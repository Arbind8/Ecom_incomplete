<?php
include("AdminWork\Includes\db.php");


if(isset($_POST['scope'])){

    $scope =$_POST['scope'];
    switch($scope)
    {
        case "addcart":

        $product_id=$_POST['product_id'];

        $cart_exits_product="SELECT * FROM mycarts WHERE product_id='$product_id' AND user_id='Arbind' ";
        $exists_query=mysqli_query($conn,$cart_exits_product);

        if(mysqli_num_rows($exists_query) >0)
        {

            echo "Existing Product";
        }

        else{

        $CART_INSERT_QUERy= "INSERT INTO `mycarts` (product_id) VALUES ('$product_id')";
        $quer_run_cart=mysqli_query($conn,$CART_INSERT_QUERy);

        if($quer_run_cart){
            echo 201;
        }

        else{
            echo 500;
        }

         }

        break;

        // DELETE CART PRODUCT

        case "deletecart":

        $cart_id=$_POST['cart_id'];

        $cart_exits_product="SELECT * FROM mycarts WHERE id='$cart_id' AND user_id='Arbind' ";
        $exists_query=mysqli_query($conn,$cart_exits_product);

        if(mysqli_num_rows($exists_query) >0)
        {

           $CART_delete_QUERy= "DELETE FROM `mycarts` WHERE id='$cart_id' ";
           $delete_exist_cart=mysqli_query($conn,$CART_delete_QUERy);

           if($delete_exist_cart)
           {
              echo 200;
            }

          else{
               echo 500;
            }

         }

        else{

            echo "Some Thing Went Wrong";
          }

        break;

          // MOVE LATER ON CART BTN

        // case "moveproduct":

        // $move_cart_id=$_POST['move_cart_id'];

        // $move_producT_archieved_byStatus="UPDATE mycarts SET product_qty='0' WHERE id='$move_cart_id' AND user_id='Arbind' ";
        // $query_movelater=($conn,$move_producT_archieved_byStatus);
        // if($query_movelater)
        // {
        //   echo 300;
        // }

        // break;


        // MOVE TO WISHLIST

        case "movetowishlist":

        $Wishlist_product_id=$_POST['Wishlist_product_id'];

        $wishlist_exits_product="SELECT * FROM wishlistproducts WHERE w_product_id='$Wishlist_product_id' AND w_user_id='Arbind'";
        $wishlist_exists_query=mysqli_query($conn,$wishlist_exits_product);

        if(mysqli_num_rows($wishlist_exists_query) >0)
        {
          echo 888;
        }

        else{

        $wishlist_INSERT_QUERy= "INSERT INTO wishlistproducts (w_product_id) VALUES ('$Wishlist_product_id')";
        $quer_run_wishlist=mysqli_query($conn,$wishlist_INSERT_QUERy);

        if($quer_run_wishlist){
          echo 777;
          exit;
        }
        else{
          echo 999;
        }

         }

        break;

          // REMOVE FAROM WISHLIST

          // case "removefromwishlist":

          // $wishlist_remove_product_id=$_POST['wishlist_remove_product_id'];

          // $wishlist_exits_product="SELECT * FROM wishlistproducts WHERE w_product_id='$wishlist_remove_product_id' AND w_user_id='Arbind'";
          // $wishlist_exists_query=mysqli_query($conn,$wishlist_exits_product);

          // if(mysqli_num_rows($wishlist_exists_query) >0)
          // {

          //   $wishlist_remove_QUERy= "DELETE FROM wishlistproducts WHERE product_id='$move_product_id'  AND w_user_id='Arbind' ";
          //   $remove_exist_wishlist=mysqli_query($conn, $wishlist_remove_QUERy);

          //   if($remove_exist_wishlist){
          //     echo 786;
          //   }
          // }

          // break;


        default:
          echo 500;
    }
}

?>