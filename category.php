


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="AdminWork\CSS\stylesheet.css">
    <script src="javascript.js"></script>
    <script src="jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div id="menu-bar" class="side_BAR_WrappEr-STYLED">
        <div class="top_logo_AND_Cancel-btn">
            <div class="container">
                <div class="left">
                    <a id="close-btn" class="menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V7h16l.001 12H4z"></path><path d="m15.707 10.707-1.414-1.414L12 11.586 9.707 9.293l-1.414 1.414L10.586 13l-2.293 2.293 1.414 1.414L12 14.414l2.293 2.293 1.414-1.414L13.414 13z"></path></svg>
                    </a>
                    <a class="logo" href="#">MANU STORE</a>
                </div>
            </div>
        </div>
        <nav class="Side_NAVBAR_Category">
            <div class="Categ_SubCAte_FLEX_WRAPEr">   <!-- Start Category -->
                <div class="category_SCROLL_container">
                    <div class="CaTEgORy_WrapPeR_Y_AXIS">

                        <div id="category-1" class="Single_category"> <!-- Single Ctaegory -->
                            <div class="Ctegory_IMG">
                                <img src="Images-C/gpu.png" alt="Popular" height="30" width="30">
                            </div>
                            <span class="Category_text_tittle">Popular</span>
                        </div>

                    </div>
                </div>
                <div class="SuB-Categ_-Scroll_contaiNEr">
                    <div class="CategOry-1">               <!--  category-1 component start from heading  -->
                        <span class="CATE_NAME">Popular</span>

                        <div class="Sub_cateGory_components_img_wrapper">        <!-- Width---- START SUB HEAD OF CATEGORY -->
                           <div class="Sub-category_fromCategory-1">
                                <h3 class="sub-tittle">All Popular Items</h3>
                                <div class="ImgANDcomPonents_froM_SUb_head">
                                    <!-- Single compent Image  -->
                                    <a class="single_img_compnt_from_sub_Category">
                                        <img src="AdminWork/Uploads/Products/1725618949.webp" alt="Kurti">
                                        <span class="single_compnt_textOR-Name">Kurtis & Dress Materials</span>
                                    </a>

                                </div>
                           </div>
                        </div>

                        <div class="Sub_cateGory_components_img_wrapper">        <!-- Width---- START SUB HEAD OF CATEGORY -->
                           <div class="Sub-category_fromCategory-1">
                                <h3 class="sub-tittle">Featured Products</h3>
                                <div class="ImgANDcomPonents_froM_SUb_head">
                                    <!-- Single compent Image  -->
                                    <a class="single_img_compnt_from_sub_Category">
                                        <img src="AdminWork/Uploads/Products/1725618949.webp" alt="Kurti">
                                        <span class="single_compnt_textOR-Name">Kurtis & Dress Materials</span>
                                    </a>

                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <script>
    document.getElementById("menu-btn").addEventListener("click", function(){
        document.getElementById("menu-bar").style.visibility = "visible";
    });

    document.getElementById("close-btn").addEventListener("click", function(){
        document.getElementById("menu-bar").style.visibility = "hidden";
    });

    document.getElementById("category-btn").addEventListener("click", function(){
        document.getElementById("menu-bar").style.visibility = "visible";
    });

    document.getElementById("wishlist-top-btn").addEventListener("click", function(){
    window.location.href = "wishlist.php";
    });




</script>
</body>
</html>