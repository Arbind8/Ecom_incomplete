<!-- <?php
include("AdminWork/function.php");

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdminWork/CSS/archieved_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Archieved</title>
</head>
<body>
<div class="st_container_whol_CVR">

    <div class="header">
        <div class="container">
            <div class="left">
                <a onclick="history.back()" class="back-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
                </a>
                <a class="archieved_tc-xt" href="#">Archived</a>
            </div>
        </div>
    </div>

    <?php
    $products_archieved=getArcieveditemsAfterAdd();
    if(mysqli_num_rows($products_archieved)>0){

    ?>

    <?php
        foreach($products_archieved as $itemArchieved){
    ?>

     <!-- Single Cart Product -->
    <div class="cart_product_container">
        <div class="product-Wrapper">
            <div class="flexing_all_detailsproduct">
                <div class="product_details_QTY_cart-Wrapper">
                    <div class="Image_QTY_CART">
                        <div class="imgae_container_cart">
                            <div class="image-wrapper-cart">
                                <div class="image-box">
                                    <img src="AdminWork/Uploads/Products/<?=$itemArchieved['image']?>">
                                </div>
                            </div>
                        </div>
                        <!-- Quantity Start -->
                        <div class="qty_Cart_container">
                            <div class="wrapper_Qty">
                                <div class="qty_option-box">
                                    <div class="option">
                                        <span>Qty: 1</span>
                                    </div>
                                </div>
                                <div class="down_btn_qty">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 24 24" style="fill: rgb(83, 66, 66);transform: ;msFilter:;"><path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Product_detls_cart">
                        <a class="before_Anchor_view_fullNAME_SIZE" href="#">
                        <div class="NAme-SIZE_Rating">
                            <div class="flex-NAME_SIZE_RATING_WRAPER">
                                <div class="name_product_cart">
                                    <span><?=$itemArchieved['name']?></span>
                                </div>
                                <div class="size-cart">
                                    <span>Size: M</span>
                                </div>
                                <!-- Rating -->
                                <div class="rating_cart_container">
                                    <div class="wrapper_allRating_details">
                                        <div class="Star_rating">
                                            <div class="border_star">
                                                <span class="rating-Txt">4.0</span>
                                            <svg class="star_rate" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 128, 0, 1);transform: ;msFilter:;"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                            </div>
                                        </div>
                                        <div class="rating_result">
                                            <span>&nbsp;•</span>
                                            <span>Good</span>
                                        </div>
                                        <div class="total_count_rating">
                                            <span class="count_rating_txt">&nbsp;(1566 Ratings)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <div class="price_Offer_wRapper">
                            <div class="price_wiTHSTRIP_PErcent">
                                <div class="price_wiTHSTRIP_PErcent_FLEXWRAPPER">
                                    <div class="Percent_off_cart">
                                        <span class="percent_off">25% off</span>
                                    </div>
                                    <div class="mrp_price_cart">
                                        <span class="mrp_txt">MRP</span>
                                        <span class="mrp_price"><?=$itemArchieved['mrp_price']?></span>
                                    </div>
                                    <div class="price-cart">
                                        <span class="selling_p">₹<?=$itemArchieved['selling_price']?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="special_offer_cart">
                                <div class="Special_offers_Flex_wrapeer">
                                    <div class="Wow_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: rgba(251, 163, 37, 1);transform: ;msFilter:;"><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path></svg>
                                    </div>
                                    <div class="Offer_txt_get">Get it</div>
                                    <div class="special_pRiCe_txte">&nbsp;₹2,499</div>
                                    <div class="sPeCial_offErS-TweXT">&nbsp;with Special offers</div>
                                    <div class="right_openable_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(251, 163, 37, 1);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="action_btn_cartBYproduct">
                    <div class="action_btnWrapper">
                        <div class="archied_cart">
                            <div class="archiedICON_TXT-Wrapper">
                                <button class="flexing_icon_txt_btn">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(116,103,103);transform: ;msFilter:;"><path d="m21.706 5.292-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z"></path><path d="M7 14h3v3h4v-3h3l-5-5z"></path></svg>
                                    </div>
                                    <div class="Action_txt">Move To cart</div>
                                </button>
                            </div>
                        </div>

                        <div class="remove_cart">
                            <div class="REmoveIcon_TXT-Wrapper">
                                <button class="flexing_icon_txt_btn">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: rgb(116,103,103);transform: ;msFilter:;"><path d="m18.5 5-1.224-2.447A1 1 0 0 0 16.382 2H7.618a1 1 0 0 0-.894.553L5.5 5H3v2h18V5h-2.5zM6.734 21.142c.071.492.493.858.991.858h8.551a1 1 0 0 0 .99-.858L19 9H5l1.734 12.142zM16 12l-.714 5H8.714L8 12h8z"></path></svg>
                                    </div>
                                    <div class="Action_txt">Delete</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        }

    ?>


<!-- Hide Every Thing if not products in cart -->

 <?php
}

else{

    echo "SORRY! Your Archied is empty";
?>

    <div class="suggested_category_products">
    </div>

    <div class="recnt_viewProducts">
    </div>
<?php
}
?>


</div>

<script src="carthandle.js"></script>
</body>
</html>