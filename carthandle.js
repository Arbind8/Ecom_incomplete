

$(document).ready(function () {

    $(document).on('click','.addcart_btn',function (e) {
        e.preventDefault();
        var product_id =$(this).val();
        $.ajax({
           method: "POST",
            url: "carthandler.php",
            data: {
                 "product_id" : product_id,
                 "scope":"addcart",
                },
            success: function (response) {

                if(response == 201){

                    alert("Sucessfully Add to cart");
                }

                else if(response == 500){
                   alert("Something went wrong");
                }
            }
        });

    });

    // Delete cart

    $(document).on('click','.delete_cart_item',function () {

       var cart_id=$(this).val();
        // alert(cart_id);

        $.ajax({
            method: "POST",
             url: "carthandler.php",
             data: {
                  "cart_id" : cart_id,
                  "scope":"deletecart",

                 },
             success: function (response) {

                 if(response == 200){

                     alert("SUCESSFUL DeLETE");
                     $('#refreshdeletecart').load(location.href + "#refreshdeletecart");
                 }

                 else if(response == 500){
                    alert("Something went wrong");
                 }
             }
         });
    });


    // Move later on Cart

    $(document).on('click','.movelater_cart_item',function () {

        move_product_id=$(this).val();
        // alert(move_product_id);

        $.ajax({
            method: "POST",
             url: "carthandler.php",
             data: {
                  "move_product_id" : move_product_id,
                  "scope":"moveproduct",
                 },
             success: function (response) {

                 if(response == 300){

                     alert("Sucessfully move to archieved");
                     $('#refreshdeletecart').load(location.href + "#refreshdeletecart");
                 }

                 else if(response == 3000){
                    // alert("Exists and delete from cart");
                    $('#refreshdeletecart').load(location.href + "#refreshdeletecart");
                 }

                 else if(response == 600){
                    alert("Something went wrong");
                 }
             }
         });
    });

// Proceed to checkout

    // $(document).on('click','.order_summary',function () {

    //     cart_to_check_product=$(this).val();
    //     alert(cart_to_check_product);
    // });

    // Buy now button on cart for buy single product

    // $(document).on('click','.buy_now_bycart_single_product',function () {

    //     cart_to_check_product=$(this).val();
    //     // alert(cart_to_check_product);
    // });


     // Buy now Button

    $(document).on('click','.buy_now_btn',function () {

        var buy_now_product_id=$(this).val();
        // alert(buy_now_product_id);
        url="checkout.php?ProducIDChecKoUt="+buy_now_product_id;+"payment";
        window.location.href = url;

    });


    //MOVE TO WISHLIST

    $(document).on('click','.wishlist_icon_btn',function (e) {
        e.preventDefault();
        var Wishlist_product_id =$(this).val();
        // $('#refreshwishlist').delay(100).load(location.href + "#refreshwishlist");

        // $(this).find('.WISH_ICON_CHANGE').css('fill', "yellow");
        //  $( "svg." ).replaceWith( "<h2>New heading</h2>" );
        // alert(Wishlist_product_id);
        $.ajax({
           method: "POST",
            url: "carthandler.php",
            data: {
                 "Wishlist_product_id" : Wishlist_product_id,
                 "scope":"movetowishlist",
                },
            success: function (response) {

                if(response == 777){

                    // alert("Sucessfully added to wishlist");


                }
            }
        });
    });


     // REMOVE FROM WISHLIST

     $(document).on('click','.wishlist_icon_btn_remove',function (e) {
        e.preventDefault();
        var wishlist_remove_product_id =$(this).val();
        alert(wishlist_remove_product_id);

        $.ajax({
           method: "POST",
            url: "carthandler.php",
            data: {
                 "wishlist_remove_product_id" : wishlist_remove_product_id,
                 "scope":"removefromwishlist",
                },
            success: function (response) {

                if(response == 786){

                    alert("Removed From wishlist");
                    $('#refreshwishlist').load(location.href + "#refreshwishlist");

                }
            }
        });
    });

});


