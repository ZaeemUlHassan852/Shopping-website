<?php
require('top.php');

$product_id='';
if(isset($_GET['p_id']))
{
    $product_id = $_GET['p_id'];
}
//$display_cat_link = display_cat_link();
//$res = mysqli_fetch_assoc($display_cat_link);
$products = get_product('',$product_id);
$result = mysqli_fetch_assoc($products);

?>
  <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                <!--  <a class="breadcrumb-item" href="index.html">Home</a>
                                   <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                 <a class="breadcrumb-item" href="categories.php?id=<?php echo $result['category_id']?>"><?php echo $res['cat_name']?></a> 
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>-->
                                  <span class="breadcrumb-item active"><?php echo $result['name'] ?></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details Area -->
        <form action="add_to_cart.php" method="POST">
        <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img src="../admin/uploads/<?php echo $result['image'] ?>" alt="full-image">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2><?php echo $result['name'] ?></h2>
                                <ul  class="pro__prize">
                                    <li class="old__prize"><del><?php echo $result['old_price'] ?></del></li>
                                    <li><?php echo $result['price'] ?></li>
                                </ul>
                                <p class="pro__info"><?php echo $result['descrip'] ?></p>
                                <div class="sin__desc align--left">
                                        <p><span>color:</span></p>
                                        <ul class="pro__color">
                                            <li class="red"><a href="#">red</a></li>
                                            <li class="green"><a href="#">green</a></li>
                                            <li class="balck"><a href="#">balck</a></li>
                                        </ul>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>Quantity</span></p>
                                        <select class="select__size" id="qty">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>size</span></p>
                                        <select class="select__size">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                            <option>X-Large</option>
                                        </select>
                                    </div>
                                    <div class="crt__btn">
                                            <a href="javascript:void(0)" onclick="manage_cart('<?php echo $result['p_id'] ?>','add')">Add to Cart</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        </form>
        <!-- End Product Details Area -->
<?php
require('footer.php');
?>