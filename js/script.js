function signupValidation(){
    //define html elements
    const fullName=document.querySelector('#username');
    const password=document.querySelector('#password');
    const email=document.querySelector('#email');
    const passwordConfirmation=document.querySelector('#password_confirmation');
   
    const btnRegister=document.querySelector('.btn-register');
    const signupForm=document.getElementById('form');

    
    
    const renderError=function(msg,el,type){
        const err=document.querySelector(`.${type}1`);
        if(err)return;
        const markup=`<span class="mt-2 ${type}1  text-danger text-bold">${msg}</span>`
        el.parentElement.insertAdjacentHTML("beforeend",markup)
    
    }
    const removeError=function(el,type){
        const err=document.querySelector(`.${type}1`);
        if(!err)return;
        err.remove()
    }
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    function validateMobile(num){
        return (/077[0-9]{7}$/gm).test(num)
    }
    function validateFullName(name){
        return (/^[a-zA-Z]{4,}(?: [a-zA-Z]+){3}$/gm).test(name)

    }
    function validatePassword(pass){
       
        return (/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z])/).test(pass)
    }
    function validateUsername(username) {
        return /^[0-9a-zA-Z_.-]+$/.test(username);
    }
    let emailCheck=false;
    //let phoneCheck=false;
    let passwordCheck=false;
    let fullNameCheck=false;
    let checkInputCheck=false;
    let passwordConfirmationCheck=false;
    
    const checkEmpty=function(type,el){
        try{
           /* if(el===checkInput){
                if(!el.checked){
                    throw new Error(`The ${type} should be checked`)
    
                }
                else{
                    removeError(el,type);
                    checkInputCheck=true;
                }
    
            }*/
             if(el.value==="")throw new Error(`The ${type} shouldn't be empty`)
            if(el.value!==""){
                removeError(el,type);
                
            }
            if(type==="email"){
                if(!validateEmail(el.value)){
                    emailCheck=false;
                    throw new Error ('The email is not valid');
    
                }
                else{
                    emailCheck=true;
                }
    
            }
            if(type==='username'){
                if(!validateUsername(el.value)){
                    fullNameCheck=false;
                    throw new Error('The name is not valid')
                }
                else{
                    fullNameCheck=true;
                }

            }
            //?Orange Mobile check
           /* if(type==="mobile"){
                if(!validateMobile(el.value)){
                    phoneCheck=false;
                    throw new Error ('The mobile should be valid')
                }
                else{
                    phoneCheck=true;
                }
    
            }*/
            if(type==="password"){
                if(!validatePassword(el.value)){
                    passwordCheck=false;
                    throw new Error ('A password contains at least eight characters,including at least one number and includes both lower and uppercase letters and special characters, for example')
                }
                else{
                    passwordCheck=true
                }
    
            }
            if(type==="passwordConfirmation"){
                if(el.value===password.value){
                    passwordConfirmationCheck=true



                }
                else{
                    passwordConfirmationCheck=false;
                    throw new Error("password must match")
                }
            }
           
           
        
            
        }
        catch(err)
        
        {
            
           
           renderError(err,el,type);
    
        }
       
        
}

fullName.addEventListener('blur',()=>{
    checkEmpty('username',fullName);

})
password.addEventListener('blur',()=>{
    checkEmpty('password',password);

})
email.addEventListener('blur',()=>{
    checkEmpty('email',email);

})
passwordConfirmation.addEventListener('blur',()=>{
   
    checkEmpty('passwordConfirmation',passwordConfirmation);
})
   
function submitForm(form) {
    var submitFormFunction = Object.getPrototypeOf(form).submit;
    submitFormFunction.call(form);
}

btnRegister.addEventListener('click',(e)=>{
    
    const validate=emailCheck && passwordCheck && fullNameCheck && passwordConfirmationCheck;
    
    if(!validate){
        e.preventDefault();
       

    }

})


}
//initiate the signup logic only when we are in signup page
const signupFormEl=document.querySelector('.signup_form');
if(signupFormEl){
    signupValidation()
}
//?------------------------------END OF SIGNUP LOGIC-----------------------------------