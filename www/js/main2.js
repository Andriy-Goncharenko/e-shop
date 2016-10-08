function addToCart(itemId){
    console.log("js -addTocart("+itemId+")");
    $.ajax({
       type:'POST',
       async:false,
       url:"../www/?controller=cart&action=addtocart&id="+itemId+"/",
       dataType: 'json',
       succcess: function(data){
           if(data['success']){
            $('#cartCntItems').html(data['cntItems']);
            $('#addCart_'+itemId).hide();
            $('#removeCart_'+itemId).show();
       }
   }
    });
}
   function removeFromCart(itemId){
    console.log("js -removeFromCart("+itemId+")");
    $.ajax({
       type:'POST',
       async:false,
       url:"../www/?controller=cart&action=addtocart&id="+itemId+'/',
       dataType: 'json',
       succcess: function(data){
           if(data['success']){
            $('#cartCntItems').html(data['cntItems']);
            $('#removeCart_'+itemId).show();
             $('#addCart_'+itemId).hide();
           }
        }
    });
}
   
