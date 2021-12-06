<?php
session_start();



require_once "includes/db.php";
if (isset($_GET['search_key'])) {
   $search_key = '%' . $_GET['search_key'] . '%';
   $satatement = $connection->prepare("SELECT * FROM ((products
                              INNER JOIN category ON category.category_id = products.category_id)
                              INNER JOIN sub_category ON sub_category.sub_category_id = products.sub_category_id)
                              WHERE product_name LIKE '{$search_key}'");
} else {
   $satatement = $connection->prepare("SELECT * FROM (( products INNER JOIN category ON products.category_id=category.category_id)
                                        INNER JOIN sub_category ON products.sub_category_id=sub_category.sub_category_id)");
}

$satatement->execute();
$products = $satatement->fetchAll(PDO::FETCH_ASSOC);

if (count($products) === 0) {

   echo "<div class='error_not_found'>
         <div><i class='fas fa-search'></i></div>
         No result found
         <p>Try rephrasing your search term. Be less specific or double check the spelling.</p>
         </div>";
   include_once("./includes/public-footer.php");
   exit;
}



$satsub_category = $connection->prepare("SELECT * FROM sub_category");
$satsub_category->execute();
$sub_category = $satsub_category->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {
   $x[] = $product['category_name'];
}
$z = array_count_values($x);
foreach ($products as $product) {
   $u[] = $product['sub_category_name'];
}
$y = array_count_values($u);
$z = array_count_values($x);


if (isset($_GET['category_name'])) {
   $name = $_GET['category_name'];
   $satatement = $connection->prepare("SELECT * FROM  products INNER JOIN category ON products.category_id=category.category_id
    INNER JOIN sub_category ON products.sub_category_id=sub_category.sub_category_id WHERE category_name='$name'");
   $satatement->execute();
   $productcategory = $satatement->fetchAll(PDO::FETCH_ASSOC);
   $products = $productcategory;
}


if (isset($_GET['category_name'])) {
   $name = $_GET['category_name'];
   $satatement = $connection->prepare("SELECT sub_category_name FROM sub_category INNER JOIN category  ON sub_category.category_id= category.category_id   WHERE category_name='$name'");
   $satatement->execute();
   $subctcategory = $satatement->fetchAll(PDO::FETCH_ASSOC);
   $category = $subctcategory; 
}


if (isset($_GET['sub_category_name'])) {
   $sub_category_name = $_GET['sub_category_name'];
   $satatement = $connection->prepare("SELECT * FROM  products INNER JOIN category ON products.category_id=category.category_id
    INNER JOIN sub_category ON products.sub_category_id=sub_category.sub_category_id WHERE sub_category_name='$sub_category_name'");
   $satatement->execute();
   $category = $satatement->fetchAll(PDO::FETCH_ASSOC);
   $products = $category;

}

include_once("./includes/public-header.php");
?>
<main class="main-content">
   <!--== Start Page Header Area Wrapper ==-->
   <div class="container ">
      <div class="padding-15 .page-header-area2 mb-5" data-bg-img="assets/img/photos/bg3.webp">
      </div>
   </div>
   <!--== End Page Header Area Wrapper ==-->
   <section class="product-area product-default-area mt-5">
      <div class="container">
         <div class="row flex-xl-row-reverse justify-content-between">
            <div class="col-xl-9">
               <div class="row">
                  <div class="col-12">
                     <div class="shop-top-bar">
                        <div class="shop-top-left">
                           <p class="pagination-line"><a href="shop.html"><?php echo count($products) ?></a> Product Found </p>
                        </div>
                        <div class="shop-top-center">
                           <nav class="product-nav">
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                              </div>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                           <div class="row">
                              <!--== Start Product Item ==-->
                              <?php
                              foreach ($products as $product) { ?>
                                 <div class="col-sm-6 col-lg-4">
                                    <div class="product-item">
                                       <div class="inner-content">
                                          <div class="product-thumb">
                                             <a href="single-product.php?id=<?php echo $product['product_id']; ?>">
                                                <img src="admin/assets/media/products_images/<?php echo $product['product_image']; ?>" width="270" height="274" alt="Image-HasTech">
                                             </a>
                                             <?php if ($product['product_percentage_price'] > 0) : ?>
                                                <div class="product-flag">
                                                   <ul>
                                                      <li class="discount">-<?php echo $product['product_percentage_price'] ?>%</li>
                                                   </ul>
                                                </div>
                                             <?php endif; ?>
                                             <div class="product-action">
                                                <a class="btn-product-cart" href="shop-cart.php?id=<?php echo $product['product_id'] ?>&quantity=1&shop=true"><i class="fa fa-shopping-cart"></i></a>
                                             </div>
                                             <a class="banner-link-overlay" href="shop.php"></a>
                                          </div>
                                          <div class="product-info">
                                             <div class="category">
                                                <ul>
                                                   <li><a href="shop.php?category_name=<?php echo $product['category_name']; ?>"><?php echo $product['category_name']; ?></a>/<a href="shop.php?sub_category_name=<?php echo $product['sub_category_name']; ?>"><?php echo $product['sub_category_name']; ?></a></li>
                                                </ul>
                                             </div>
                                             <h4 class="title"><a href="single-product.php?id=<?php echo $product['product_id'] ?>"><?php echo $product['product_name']; ?></a></h4>
                                             <div class="prices">
                                                <?php if ($product['product_percentage_price'] > 0) { ?>
                                                   <span class="price-old">$<?php echo $product['product_price'] ?></span>
                                                   <span class="sep">-</span>
                                                   <span class="price">$
                                                   <?php echo ($product['product_price']) * (100 - $product['product_percentage_price']) / 100;
                                                } else { ?><span class="price">$ <?php echo $product['product_price'];
                                                                              } ?></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              <?php } ?>
                              <!--== End product Item ==-->
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                           <div class="row">
                              <div class="col-md-12">
                                 <!--== Start Product Item ==-->
                                 <div class="product-item product-list-item">
                                    <div class="inner-content">
                                       <div class="product-thumb">
                                          <a href="single-product.html">
                                             <img src="assets/img/shop/list-1.webp" width="322" height="360" alt="Image-HasTech">
                                          </a>
                                          <div class="product-flag">
                                             <ul>
                                                <li class="discount">-10%</li>
                                             </ul>
                                          </div>
                                          <div class="product-action">
                                             <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                                             <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                                             <button type="button" class="btn-product-quick-view-open">
                                                <i class="fa fa-arrows"></i>
                                             </button>
                                             <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                                          </div>
                                          <a class="banner-link-overlay" href="shop.html"></a>
                                       </div>
                                       <div class="product-info">
                                          <div class="category">
                                             <ul>
                                                <li><a href="shop.html">Men</a></li>
                                                <li class="sep">/</li>
                                                <li><a href="shop.html">Women</a></li>
                                             </ul>
                                          </div>
                                          <h4 class="title"><a href="single-product.html">Leather Mens Slipper</a></h4>
                                          <div class="prices">
                                             <span class="price-old">$300</span>
                                             <span class="sep">-</span>
                                             <span class="price">$240.00</span>
                                          </div>
                                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem quo, rerum rem soluta quisquam, repellat is deleniti omnis culpa ea quis provident dolore esse, offici modi dolorem nam cum eligendi enim!</p>
                                          <a class="btn-theme btn-sm" href="shop-cart.html">Add To Cart</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--== End prPduct Item ==-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3">
               <div class="shop-sidebar">


                


                  <?php if (isset($_GET['category_name'])) {?>
                  <div class="shop-sidebar-category">
                     <h4 class="sidebar-title">Sub Category</h4>
                     <div class="sidebar-brand">
                        <ul class="brand-list mb--0">
                           <?php
                           foreach ( $category as $cat) {  ?>
                              <li> <a href="shop.php?sub_category_name=<?php echo $cat['sub_category_name']; ?>"><?php echo $cat['sub_category_name']; ?></a></li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
                  <?php } ?>


                  

                  <div class=" shop-sidebar-brand">
                     <h4 class="sidebar-title">Categories</h4>
                     <div class="sidebar-category">
                        <ul class="category-list mb--0">
                           <?php foreach ($z as $cat => $count) { ?>
                              <li> <a href="shop.php?category_name=<?php echo $cat; ?>"><?php echo $cat; ?><span>(<?php echo $count; ?>)</span></a></li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
include("./includes/public-footer.php");
?>
<script>
   <?php ?>
</script>