<?php
function crud($connection,$operation,$table_name,$columns,$values){
    // $OPERATION=> INSERT UPDATE DELETE SELECT
    //SELECT SELECTS ALL COLUMUNS
    //$columns will be an array the first index will be id
    //$values will be an array the first index will be id
    //WHEN USING THE INSERT DON"T INSERT THE ID
    //DONT USE ID IN INSERT
    //PUT THE ID IN THE FIRST INDEX
    $query="";
    //delete all the row items
    $length=count($columns)-1;
    $i=0;
    if($operation==="DELETE"){
        $query="DELETE FROM {$table_name} WHERE  {$columns[0]} = '{$values[0]}'";

    }
    if($operation==="UPDATE"){
        $query="UPDATE ".$table_name." SET";
        $query_values="";

        for($i=0;$i<=$length;$i++){
            if($i===0)continue;
            if($i===$length){
                if(is_numeric($values[$i])){
                    $query_values.=" {$columns[$i]}={$values[$i]} WHERE";
                }
                else{
                    $query_values.=" {$columns[$i]}='{$values[$i]}' WHERE";
                }

            }

            else{
                if(is_numeric($values[$i])){
                    $query_values.=" {$columns[$i]}={$values[$i]},";
                }
                else{
                    $query_values.=" {$columns[$i]}='{$values[$i]}',";
                }

            }
        }
        $query.=" ".$query_values;
        $query.=" {$columns[0]}={$values[0]}";
    }
    if($operation==="INSERT"){
        $query="INSERT INTO " .$table_name;
        $query_values="VALUES ";

        for($i=0;$i<=$length;$i++){
            if($i===0){
                $query.="({$columns[$i]},";
                //remove '' when the value is number
                if(is_numeric($values[$i])){
                    $query_values.="({$values[$i]} ,";
                }
                else{
                    $query_values.="('{$values[$i]}' ,";
                }

            }
            elseif($i===$length){
                $query.="{$columns[$i]})";
                //remove '' when the value is number
                if(is_numeric($values[$i])){
                    $query_values.="{$values[$i]})";
                }
                else{
                    $query_values.="'{$values[$i]}')";
                }

            }
            else{
                $query.="{$columns[$i]},";
                if(is_numeric($values[$i])){
                    $query_values.="{$values[$i]},";
                }

                else{
                    $query_values.="'{$values[$i]}',";
                }



            }
        }
        $query.=" ".$query_values;

    }
    $statement=$connection->prepare($query);
    $statement->execute();
}
/*** Function To Get All Records From Any Database Table*/
function getAllFrom($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC") {

    global $con;

    $getAll = $con->prepare("SELECT $field FROM $table $where $and ORDER BY $orderfield $ordering");

    $getAll->execute();

    $all = $getAll->fetchAll();

    return $all;

}
function getPostData($post,$dataArr){
    $returned_data=[];
    if(isset($post[$dataArr[0]])){
        foreach ($dataArr as $data) {
            $returned_data[]=$post[$data];
        }

    }
    return $returned_data;
}