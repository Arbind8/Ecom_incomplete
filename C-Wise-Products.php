<?php
include("AdminWork/function.php");


$category_name=$_GET['category'];
$category_data=getNameStatusActive("category",$category_name);
$category_data_store=mysqli_fetch_array($category_data);
$category_id=$category_data_store['id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="full-style.css">     <!-- Header -->
    <link rel="stylesheet" href="AdminWork/CSS/stylesheet.css">

    <title>Document</title>
</head>
<body>
<section class="header">
        <div class="container">

            <div class="left">
                <a onclick="history.back()" class="menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                </a>
                <a class="logo" href="#">MANU STORE</a>
            </div>

            <div class="right">
                <span class="search"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path><path d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path></svg></span>
                <span class="Wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(232, 12, 12, 1);transform: ;msFilter:;"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg></span>
                <a href="#" class="add-cart"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle><path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path><path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path></svg></a>            </div>
        </div>
    </section>

    <!-- Products -->

    <div class="product-list-box">
                <div class="product-list-scroll-bhvr"></div>
                <h3 class="tittle-product"><?=$category_name?></h3>
                <div class="product-container-WithFilter">
                    <div class="product-filter-wraping">

                        <!-- <div class="product-filter-box">
                             <ul class="filter-sort-box">
                                <li><span><p>Gender</p></span></li>
                             </ul>

                        </div> -->

                        <div class="products-container">
                            <div class="product-box">
                                <div class="product">

                                <?php
                                $fetcH_PRODUCT_BY_C = getProdByCATEGORY($category_id);
                                if(mysqli_num_rows( $fetcH_PRODUCT_BY_C)>0){
                                    foreach( $fetcH_PRODUCT_BY_C as $Pdata){

                                  ?>
                                      <!-- ONE PRODUCT IN CARD STYLE -->
                                    <div class="single-product">
                                       <svg class="WishL_iSt_-single-product" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>
                                       <a href="full-view.php?P-id=<?=$Pdata['id']?>PRODUCT_name=<?=$Pdata['name'];?>">
                                          <div class="under-single-cardSTYLE-product">
                                                <div class="single-cardStyle__proDuct-image">
                                                  <img class="product-img__under-img" src="AdminWork/Uploads/Products/<?=$Pdata['image']?>" alt="GPU">
                                                </div>
                                                <div class="single-cardSTYLE__proDuct-deTails">

                                                    <div class="CARDSTylE_products-NaME-__pRiCe_STRIP-priCE">
                                                        <!-- prodct name and price strip-->
                                                         <span class="prOducT_capTIon__PriCe_S-trip">

                                                            <div class="Produc-C-A__PtiOn--TittLe">
                                                                <span class="PRDT-NamE__"><?=$Pdata['name']?></span>                                                             </span>
                                                            </div>

                                                            <div class="Price__-ofF-_">
                                                                <span class="PrICE--T_Ag">₹<?=$Pdata['selling_price']?></span>
                                                                <span class="PrIc_ECUT-StrIP"><?=$Pdata['mrp_price']?></span>
                                                                <span class="percenT-_OFF"><?=$Pdata['OfferPercent']?>% off</span>
                                                            </div>
                                                        </span>
                                                    </div>


                                                    <span class="StYlE_-Card__SPeC__ial_OfFEr">
                                                        <!--SPECIAL OFFER WITH GREEN BASE -->
                                                        <svg class="RUPI_SIGN-StYlE_-Card__SPeC__ial_OfFEr"  xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" style="fill: rgba(27, 113, 11, 1);transform: ;msFilter:;"><path d="M12.006 2.007A9.93 9.93 0 0 0 4.935 4.93c-3.898 3.898-3.898 10.242 0 14.142 1.885 1.885 4.396 2.923 7.071 2.923s5.187-1.038 7.071-2.923c3.898-3.899 3.898-10.243 0-14.142a9.931 9.931 0 0 0-7.071-2.923zm5.657 15.65c-1.507 1.507-3.516 2.337-5.657 2.337s-4.15-.83-5.657-2.337c-3.118-3.119-3.118-8.194 0-11.313 1.507-1.507 3.517-2.337 5.657-2.337s4.15.83 5.657 2.337c3.118 3.119 3.118 8.194 0 11.313z"></path><path d="m14.346 8.247-3.215 3.215-2.125-2.125V15h5.663l-2.124-2.124 3.215-3.215z"></path></svg>
                                                        <span class="special_offER__-ECHO-TEXT">Save ₹99 with 1 Special Offer</span>
                                                    </span>

                                                    <div class="PrODucT__DEliVer__y_Pr_Off">
                                                        <!-- Delivery Price -->
                                                         <div class="DELiVe_RY_TeXt">
                                                            <span class="DElivE-R-Y PRicE-TExt_EcHO">Free Delivery</span>
                                                         </div>
                                                    </div>

                                                    <div class="PrODucT_-Ra_ting_RW">
                                                        <!-- Rating -->
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php
                                      }
                                    }
                                      else{
                                        echo "Not Products Available";
                                      }


                                    ?>
                                    <!-- ENd ONE PRODUCT CARD -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>