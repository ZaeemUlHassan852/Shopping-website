<?php 
require('top.php');
$cart_total=0;

if(isset($_POST['submit'])){
	$address=get_safe_value($con,$_POST['address']);
	$city=get_safe_value($con,$_POST['city']);
	$postcode=get_safe_value($con,$_POST['postcode']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
	$user_id=$_SESSION['USER_ID'];
    foreach($_SESSION['cart'] as $key=>$val)
    {
        $q = mysqli_query($con, "select * from products where p_id = $key");
                                            
        foreach($q as $a)
        {    
            $cart_total=$cart_total+($a['price']*$val['qty']);
    }
    }

    $total_price=$cart_total;
	$payment_status='pending';
	if($payment_type=='cod'){
		$payment_status='success';
	}
	$order_status='pending';
	$added_on=date('Y-m-d h:i:s');
	
    mysqli_query($con,"insert into orders (user_id,address,city,postcode,payment_type,payment_status,order_status,added_on,total_price) values('$user_id','$address','$city','$postcode','$payment_type','$payment_status','$order_status','$added_on','$total_price')");

    $order_id=mysqli_insert_id($con);

    foreach($_SESSION['cart'] as $key=>$val)
    {
        $qty=$val['qty'];
        $price=$a['price'];                                   
    }
    mysqli_query($con,"insert into orders_detail (order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");

    unset($_SESSION['cart']);
    ?>
		<script>
			window.location.href='thank_you.php';
		</script>
		<?php
}
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
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                                    <form method="POST">
                                    <div>Address Information</div>
                                    <div>
                                        <div class="bilinfo">
                                       
                                                <div class="row">
                                               
                                                   
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address" placeholder="Your Address">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="city" placeholder="City/State">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="postcode" placeholder="Post code/ zip">
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                        </div>
                                    </div>
                                    <div class="mt--20">Payment Method</div>
                                    <div>
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                                <a href="#"><i class="zmdi zmdi-long-arrow-right"></i>COD: &nbsp;<input type="radio" name="payment_type" value="COD"></a>
                                            </div>
                                        </div>
                                        <div class="paymentinfo">
                                            <div class="single-method mt--20">
                                            <input type="submit" class="fv-btn" name="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                              
                           
                        </div> 
                    </div>
                
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
							<?php
							$cart_total=0;
										foreach($_SESSION['cart'] as $key=>$val)
                                        {
                                            $q = mysqli_query($con, "select * from products where p_id = $key");

                                        foreach($q as $a)
                                        {    
                                            $cart_total=$cart_total+($a['price']*$val['qty']);
                                        ?>
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="../admin/uploads/<?php echo $a['image'] ?>" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#"><?php echo $a['name']?></a>
                                        <span class="price"><?php echo $a['price']*$val['qty']?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
								<?php }} ?>
                            </div>
                            
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price"><?php echo $cart_total?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
    function emeAccordion(){
        $('.accordion__title')
          .siblings('.accordion__title').removeClass('active')
          .first().addClass('active');
        $('.accordion__body')
          .siblings('.accordion__body').slideUp()
          .first().slideDown();
        $('.accordion').on('click', '.accordion__title', function(){
          $(this).addClass('active').siblings('.accordion__title').removeClass('active');
          $(this).next('.accordion__body').slideDown().siblings('.accordion__body').slideUp();
        });
        };
    emeAccordion();
</script>
<?php require('footer.php')?>  