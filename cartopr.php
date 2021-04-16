<?php
session_start();
if(isset($_SESSION['cart']))
{
	$_SESSION['cart'];
}
class add_to_cart{
	function addProduct($p_id,$qty){
		$_SESSION['cart'][$p_id]['qty']=$qty;
	}
	
	function updateProduct($p_id,$qty){
		if(isset($_SESSION['cart'][$p_id])){
			$_SESSION['cart'][$p_id]['qty']=$qty;
		}
	}
	
	function removeProduct($p_id){
		if(isset($_SESSION['cart'][$p_id])){
			unset($_SESSION['cart'][$p_id]);
		}
	}
	
	function emptyProduct(){
		unset($_SESSION['cart']);
	}
	
	function totalProduct(){
		if(isset($_SESSION['cart'])){
			return count($_SESSION['cart']);
		}else{
			return 0;
		}
		
	}

}
?>