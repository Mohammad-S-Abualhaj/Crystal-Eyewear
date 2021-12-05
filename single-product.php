<?php
session_start();
include("./includes/public-header.php");

    require_once "includes/db.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $statement=$connection->prepare("SELECT * from products INNER JOIN category ON products.category_id=category.category_id WHERE product_id=:id ");
        $statement->bindParam(':id',$id);
        $statement->execute();
        $product=$statement->fetch(PDO::FETCH_ASSOC);
    }

$satatement = $connection->prepare("SELECT * FROM products INNER JOIN category ON products.category_id=category.category_id
INNER JOIN sub_category ON products.sub_category_id = sub_category.sub_category_id");

?>
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->

    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Single Area Wrapper ==-->
    <section class="product-area product-single-area mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="product-single-item">
              <div class="row">
                <div class="col-xl-6">
                  <!--== Start Product Thumbnail Area ==-->
                  <div class="product-single-thumb product-single-thumb-normal">
                    <div class="swiper-container single-product-thumb single-product-thumb-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a class="lightbox-image" data-fancybox="gallery" href="admin/assets/media/products_images/<?php echo $product['product_image']; ?>">
                            <img src="admin/assets/media/products_images/<?php echo $product['product_image']; ?>" width="570" height="541" alt="<?php echo $product['product_description'] ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-container single-product-nav single-product-nav-slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-1.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-2.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-3.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-4.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-5.webp" width="127" height="127" alt="Image-HasTech">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Product Thumbnail Area ==-->
                </div>
                <div class="col-xl-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h3 class="main-title"><?php echo $product['product_name'] ?></h3>
                    <div class="prices">
                      <span class="price">$<?php echo $product['product_price'] ?></span>
                    </div>
                    <div class="product-quick-action">
                      <div class="qty-wrap">
                        <div class="pro-qty">
                            <form action="shop-cart.php" method="get">
                                <input type="text" name="quantity" title="Quantity" value="1">
                                <input type="hidden" name="id" value="<?php echo $product['product_id'] ?>">


                        </div>
                      </div>
                      <button type="submit" class="btn-theme" >Add to Cart</button>
                    </div>
                      </form>
                  </div>
                  <!--== End Product Info Area ==-->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="product-review-tabs-content">
              <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                <li role="presentation">
                  <a class="active" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                </li>
                <li role="presentation">
                  <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span>(05)</span></a>
                </li>
              </ul>
              <div class="tab-content product-tab-content" id="ReviewTabContent">
      
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <div class="product-description">
                  <p><?php echo $product['product_description'] ?></p>

                  </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <div class="product-review-content">
                    <div class="review-content-header">
                      <h3>Customer Reviews</h3>
                      <div class="review-info">
                        <span class="review-write-btn">Write a review</span>
                      </div>
                    </div>

                    <!--== Start Reviews Form Item ==-->
                    <div class="reviews-form-area">
                      <h4 class="title">Write a review</h4>
                      <div class="reviews-form-content">
                        <form action="#">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_name">Name</label>
                                <input id="for_name" class="form-control" type="text" placeholder="Enter your name">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_email">Email</label>
                                <input id="for_email" class="form-control" type="email" placeholder="john.smith@example.com">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_review-title">Review Title</label>
                                <input id="for_review-title" class="form-control" type="text" placeholder="Give your review a title">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_comment">Body of Review (1500)</label>
                                <textarea id="for_comment" class="form-control" placeholder="Write your comments here"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-submit-btn">
                                <button type="submit" class="btn-submit">Post comment</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!--== End Reviews Form Item ==-->

                    <div class="reviews-content-body">
                      <div class="review-item">
                        <ul class="review-rating">
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                        </ul>
                        <h3 class="title">Awesome shipping service!</h3>
                        <h5 class="sub-title"><span>Nantu Nayal</span> no <span>Sep 30, 2018</span></h5>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#/">Report as Inappropriate</a>
                      </div>
             
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Single Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-best-seller-area">
      <div class="container pt--0">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Related Products</h3>
              <div class="desc">
                <p>There are many variations of passages of Lorem Ipsum available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-slider-wrap">
              <div class="swiper-container product-slider-col4-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.php">
                            <img src="assets/img/shop/1.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-flag">
                            <ul>
                              <li class="discount">-10%</li>
                            </ul>
                          </div>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.php"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.php"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.php">Modern Smart Shoes</a></h4>
                          <div class="prices">
                            <span class="price-old">$300</span>
                            <span class="sep">-</span>
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.php">
                            <img src="assets/img/shop/7.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.php"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.php"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.php">Quickiin Mens shoes</a></h4>
                          <div class="prices">
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.php">
                            <img src="assets/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-flag">
                            <ul>
                              <li class="discount">-10%</li>
                            </ul>
                          </div>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.php"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.php"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.php">Rexpo Womens shoes</a></h4>
                          <div class="prices">
                            <span class="price-old">$300</span>
                            <span class="sep">-</span>
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.php">
                            <img src="assets/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.php"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.php"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.php">Leather Mens Slipper</a></h4>
                          <div class="prices">
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.php">
                            <img src="assets/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.php"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.php"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.php">Primitive Mens shoes</a></h4>
                          <div class="prices">
                            <span class="price-old">$300</span>
                            <span class="sep">-</span>
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.php">
                            <img src="assets/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-flag">
                            <ul>
                              <li class="discount">-10%</li>
                            </ul>
                          </div>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.php"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.php"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.php">Simple Fabric Shoe</a></h4>
                          <div class="prices">
                            <span class="price-old">$300</span>
                            <span class="sep">-</span>
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                </div>
              </div>
              <!--== Add Swiper Arrows ==-->
              <div class="product-swiper-btn-wrap">
                <div class="product-swiper-btn-prev">
                  <i class="fa fa-arrow-left"></i>
                </div>
                <div class="product-swiper-btn-next">
                  <i class="fa fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>
<?php
    include("./includes/public-footer.php");
?>