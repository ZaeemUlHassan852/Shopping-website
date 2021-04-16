<?php
require('../Function/connection.php');
require('../Function/function.php');
require('cartopr.php');


$p_id=get_safe_value($con,$_POST['p_id']);
$qty=get_safe_value($con,$_POST['qty']);
$type=get_safe_value($con,$_POST['type']);

$obj=new add_to_cart();

if($type=='add'){
	$obj->addProduct($p_id,$qty);
}

if($type=='remove'){
	$obj->removeProduct($p_id);
}

if($type=='update'){
	$obj->updateProduct($p_id,$qty);
}

echo $obj->totalProduct();
?>