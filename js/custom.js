function manage_cart(p_id,type){
    if(type=='update'){
		var qty=jQuery("#"+p_id+"qty").val();
	}else{
		var qty=jQuery("#qty").val();
	}
    var qty=jQuery("#qty").val();
        jQuery.ajax({
            url:'manage_cart.php',
            type:'post',
            data:'p_id='+p_id+'&qty='+qty+'&type='+type,
            success:function(result){
                if(type=='update' || type=='remove'){
                    window.location.href=window.location.href;
                }
                jQuery('.htc__qua').html(result);
            }	
        });	
    }

