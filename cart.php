<?php 
require('top.php');
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        
										foreach($_SESSION['cart'] as $key=>$val)
                                        {
                                            $q = mysqli_query($con, "select * from products where p_id = $key");
                                            
                                        foreach($q as $a)
                                        {    
                                          
                                        ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="../admin/uploads/<?php echo $a['image'] ?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php echo $a['name']?></a>
                                                <ul  class="pro__prize">
                                                    <li class="old__prize"></li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount"></span><?php echo $a['price']?></td>
                                            <td class="product-quantity"><input type="number" id="qty" value="<?php echo $val['qty']?>" /></td>
                                            <td class="product-subtotal"><?php ?><?php echo $val['qty'] * $a['price']?></td>
                                            <td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                    <?php }} ?>  
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')"">update</a>
                                            <a href="checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
										
<?php require('footer.php')?>        