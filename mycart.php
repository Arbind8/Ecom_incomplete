<?php
include("AdminWork/function.php");
include("popup.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdminWork/CSS/mycart-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>MyCart</title>
</head>
<body>
<div class="st_container_whol_CVR">
<div id="refreshdeletecart">
    <div class="header">
        <div class="container">
            <div class="left">
                <a onclick="history.back()" class="back-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
                </a>
                <a class="mycart_tc-xt" href="#">My Cart</a>
            </div>

            <div class="right">
                <a href="Archieved.php" class="Archied add-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m21.706 5.292-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z"></path><path d="M7 14h3v3h4v-3h3l-5-5z"></path></svg>
                </a>
            </div>
        </div>
    </div>


    <?php
    $products_cart=getcartsitemsAfterAdd();
    if(mysqli_num_rows($products_cart)>0){

    ?>

    <div class="adresses_wrapper">
        <div class="addresses_container">
            <div class="box-adresses">
                <div class="PDD_ADRESS">
                    <div class="adress-text">
                        <div class="adress-topLinE">
                            <span class="dlvry_txt">Deliver To:</span>
                            <div class="NAME_PIN_DEliverY">
                                <span class="name">Arbind Das</span>
                                <span class="pincode">,&nbsp;110086</span>
                                <div class="delvry_typE">
                                    <span class="Type_home">Home</span>
                                </div>
                            </div>
                        </div>
                        <div class="secndLIne-adres">
                            Karan public school new, Aman Vihar,Sultanpuri, Aman Vihar,New karan public school, New Delhi
                        </div>
                    </div>
                    <div class="CHange-SELECT_BTN">
                        <div class="btn_text">
                            <span>Change</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
      $total_mrp_price=0;
      $total_discount=0;
        foreach($products_cart as $itemCart){
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
                                    <img src="AdminWork/Uploads/Products/<?=$itemCart['image']?>">
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
                        <a class="before_Anchor_view_fullNAME_SIZE" href="full-view.php?P-id=<?=$itemCart['pid']?>PRODUCT_name=<?=$itemCart['name'];?>">
                        <div class="NAme-SIZE_Rating">
                            <div class="flex-NAME_SIZE_RATING_WRAPER">
                                <div class="name_product_cart">
                                    <span><?=$itemCart['name']?></span>
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
                                        <span class="percent_off"><?=$itemCart['OfferPercent']?>% off</span>
                                    </div>
                                    <div class="mrp_price_cart">
                                        <span class="mrp_txt">MRP</span>
                                        <span class="mrp_price"><?=$itemCart['mrp_price']?></span>
                                    </div>
                                    <div class="price-cart">
                                        <span class="selling_p">₹<?=$itemCart['selling_price']?> </span>
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
                <div class="deliVerY_DAtE_container">
                    <div class="delivery_date_box">
                        <div class="wrapper_flex_allDetails">
                            <div class="delivery_date_txt">
                                <span>Delivery by Sep 16, Mon</span>
                                <span class="Separeted_dot">•</span>
                            </div>
                            <div class="DLvry_typE">
                                <div class="type_wraper_flex">
                                    <div class="rate_delivery_txtWith_Strip">
                                        <span class="rate_delivery_txt"><s>₹40</s></span>
                                    </div>
                                    <div class="free_txt">
                                        <span>Free</span>
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
                                <button class="flexing_icon_txt_btn movelater_cart_item" value="<?=$itemCart['mcid']?>">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: rgb(116, 103, 103);transform: ;msFilter:;"><path d="m21.706 5.292-2.999-2.999A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.294 5.292A.994.994 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a.994.994 0 0 0-.294-.708zM6.414 4h11.172l1 1H5.414l1-1zM4 19V7h16l.002 12H4z"></path><path d="M14 9h-4v3H7l5 5 5-5h-3z"></path></svg>
                                    </div>
                                    <div class="Action_txt"><?=$itemCart['mcid']?>Save for later</div>
                                </button>
                            </div>
                        </div>

                        <div class="remove_cart">
                            <div class="REmoveIcon_TXT-Wrapper">
                                <button class="flexing_icon_txt_btn delete_cart_item" value="<?=$itemCart['mcid']?>">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: rgb(116,103,103);transform: ;msFilter:;"><path d="m18.5 5-1.224-2.447A1 1 0 0 0 16.382 2H7.618a1 1 0 0 0-.894.553L5.5 5H3v2h18V5h-2.5zM6.734 21.142c.071.492.493.858.991.858h8.551a1 1 0 0 0 .99-.858L19 9H5l1.734 12.142zM16 12l-.714 5H8.714L8 12h8z"></path></svg>
                                    </div>
                                    <div class="Action_txt"><?=$itemCart['mcid']?>Remove</div>
                                </button>
                            </div>
                        </div>

                        <div class="buy_now_cart">
                            <div class="BuyICON_TXT-Wrapper">
                                <a href="checkout.php?ProducIDChecKoUt=<?=$itemCart['pid']?>" class="flexing_icon_txt_btn buy_now_bycart_single_product" >
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill:rgb(116, 103, 103);transform: ;msFilter:;"><path d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-8-8zM12 19.586l-7-7V5h7.586l7 7L12 19.586z"></path><circle cx="8.496" cy="8.495" r="1.505"></circle></svg>
                                    </div>
                                    <div class="Action_txt">Buy Now</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
      $total_discount += $itemCart['mrp_price']-$itemCart['selling_price'];
      $total_mrp_price += $itemCart['mrp_price']*$itemCart['product_qty'];
      $total_price_all_products= $total_mrp_price- $total_discount ;

        }

    ?>

      <!-- End CART PRODUCT -->

    <div class="Wishlist_cart_container">
        <div class="comibine_hear_wish">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(68, 54, 54);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>
            <span class="wish_txt_cart">Wishlist</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(67, 71, 67);transform: ;msFilter:;"><path d="M10.061 19.061 17.121 12l-7.06-7.061-2.122 2.122L12.879 12l-4.94 4.939z"></path></svg>
    </div>

    <div class="Product_details_PAGE-PRICE_Cart__Container">
        <div class="FLEx_wrapper_details_page">
            <div class="heading_price-details">
                <span class="price_details_txt">Price Details</span>
            </div>
            <div class="all_details_dlvry_all-ITEM-Price">
                <div class="price_total_ITEMS_DLVRY_CHARGES">
                    <div class="total_items_with_pRiCe">
                        <div class="txt_price-total-items_txt">
                            <span>Total Product Price (7 items)</span>
                        </div>
                        <div class="total_price_integer">
                            <span>₹<?=$total_mrp_price?></span>
                        </div>
                    </div>
                    <div class="total_discopunt_cart">
                        <div class="txt_total_discont_txt">
                            <span>Total Discount</span>
                        </div>
                        <div class="total_discOunT_integer">
                            <span>- ₹<?=$total_discount?></span>
                        </div>
                    </div>
                    <div class="Total_dLVERY_rate">
                        <div class="txt_deliver_charges_txt">
                            <span>Delivery Charges</span>
                        </div>
                        <div class="total_Dlvry_price_integer">
                            <span class="dlVRY-toatal_rate_txt"><s>₹40</s></span>
                            <span>•</span>
                            <span class="DLVRY_tXT_page_cart">Free Delivery</span>
                        </div>
                    </div>
                </div>
                <div class="total_amount">
                    <div class="total_maount_tXTE">
                        <span>Total Price</span>
                    </div>
                    <div class="Total_amounT-integer">
                        <span>₹<?=$total_price_all_products?></span>
                    </div>
                </div>
                <div class="total_saving_txt">
                    <span class="save_icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 128, 0, 1);transform: ;msFilter:;"><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path></svg></span>
                    <span>You Will Total Save ₹760 on this order</span>
                </div>
            </div>
        </div>
    </div>

    <div class="privacy_AND_PROTECTION_TXT-orImg">
        <div class="wrapper_fLEX_Privacy_cart">
            <div class="logo_privacy">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(12, 167, 82);transform: ;msFilter:;"><path d="M2 8v4.001h1V18H2v3h16l3 .001V21h1v-3h-1v-5.999h1V8L12 2 2 8zm4 10v-5.999h2V18H6zm5 0v-5.999h2V18h-2zm7 0h-2v-5.999h2V18zM14 8a2 2 0 1 1-4.001-.001A2 2 0 0 1 14 8z"></path></svg>
            </div>
            <div class="PRIVACY_TXT_PRAGRAPH">
                <span class="heading_cart_privacy">Your Safety, Our Priority</span>
                <span class="paragraph_cart_privacy">Safe and secure payment. Easy Returns</span>
                <span class="last_part_paragraph">100% Geniune products</span>
            </div>
        </div>
    </div>

    <div class="Place_Order_btn_cart_container">
        <div class="Place_Order_btn_cart_box">
            <div class="all_wraper_place-order">
                <div class="total_price_container">
                    <div class="stripPrice_and_Full_price_cart">
                        <span class="strip_price_cARTT"><s>₹<?=$total_mrp_price?></s></span>
                        <span class="Price_cart_aftER_dis"><?=$total_price_all_products?></span>
                    </div>
                    <div class="view_dtails_Price_page_cart">
                        <span class="price_details_txt_CART">View Price Details</span>
                        <span class="details_icon_cart_price">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path><path d="m21.707 7.293-5-5A.996.996 0 0 0 16 2H8a.996.996 0 0 0-.707.293l-5 5A.996.996 0 0 0 2 8v8c0 .266.105.52.293.707l5 5A.996.996 0 0 0 8 22h8c.266 0 .52-.105.707-.293l5-5A.996.996 0 0 0 22 16V8a.996.996 0 0 0-.293-.707zM20 15.586 15.586 20H8.414L4 15.586V8.414L8.414 4h7.172L20 8.414v7.172z"></path></svg>
                        </span>
                    </div>
                </div>
                <button class="place_order_btn_cart order_summary" value="lund">
                    <span>Order Summary</span>
                </button>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M12 14c-3 0-4 3-4 3h8s-1-3-4-3z"></path></svg>
    <div class="suggested_category_products">
      <span>Sugested Products after product</span>
    </div>

    <div class="recnt_viewProducts">
        <span>Recet viewed after product Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic perspiciatis excepturi fugiat nihil consectetur quibusdam consequatur? Amet hic voluptatibus repellat itaque corporis dolorem, provident eaque, modi voluptatem maiores enim optio possimus placeat! Ad debitis, quod facere vero iure, sapiente inventore aperiam velit pariatur mollitia doloremque quas accusamus ipsa numquam nisi dolores natus architecto tempora. Iusto adipisci, ipsam quis doloribus, expedita eaque, voluptates ex facilis perspiciatis hic omnis vel molestias at cumque nisi ab maxime sed. Debitis placeat error, quidem aut consequuntur, est architecto laborum autem quam non pariatur dolorum cumque! Vitae, consequuntur laudantium velit repellendus magni saepe voluptas quam sint dolores veritatis quae et suscipit reprehenderit laborum, corporis corrupti debitis voluptatum ullam explicabo cumque fugiat dolor praesentium placeat. Fuga, mollitia quam omnis quisquam sint libero provident laudantium consectetur eaque cupiditate sequi sunt laborum nam odio, temporibus modi ducimus vel optio incidunt deleniti obcaecati velit molestias sit non. Placeat explicabo accusantium fugit mollitia quis est, ad eos numquam earum a veniam eum ratione molestias assumenda molestiae facilis deleniti, minus id quas totam sit cumque et. Nihil aut amet et voluptas unde perferendis iste voluptatum, maiores explicabo eligendi officiis debitis rerum adipisci! Commodi aperiam itaque reprehenderit consectetur. Saepe quas exercitationem, nobis molestias alias nulla repudiandae assumenda veniam dicta minima illo voluptates suscipit, placeat laboriosam, debitis laudantium cumque quaerat dolorum non quo ipsa hic doloribus quia similique? Sit modi quibusdam non sapiente necessitatibus perferendis, repellendus a doloremque mollitia hic soluta, dolorum praesentium eveniet voluptate quaerat! A non ipsam quis odit tenetur sunt omnis!</span>
    </div>


</div>

<!-- Hide Every Thing if not products in cart -->
<?php
}
else{
    echo "SORRY! Your cart is empty";
    // NO PRODUCTS DESIGN
?>

    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M12 14c-3 0-4 3-4 3h8s-1-3-4-3z"></path></svg>
    <div class="suggested_category_products">
      <span>Offers for U</span>
      <span>Sugested Products</span>
    </div>

    <div class="recnt_viewProducts">
        <span>Recet viewed</span>
    </div>

<?php
}
?>


</div>
</div>
<script src="carthandle.js"></script>
</body>
</html>