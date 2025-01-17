<?php include '../dashboard/main/ajax/datab.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/prodcut-360-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:29:58 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Samuthrika Academy Jewellery Making Trichy</title>

    <!--BootStrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/plugins.css">
    <!-- Photoswipe Gallery CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/vendor/photoswipe.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/responsive.css">
</head>
<style>
    .footer-img {
        margin-bottom: 14px;
    }



    .level #basic,
    #adv,
    #dip {
        accent-color: black;

    }
</style>

<body class="template-product prodcut-360-view">
    <!--Page Wrapper-->
    <div class="page-wrapper">


        <!--Header-->
        <?php include '../header.php';?>
        <!--End Header-->
        <!--Mobile Menu-->
        <?php include '../sidebar.php';?>
        <!--End Mobile Menu-->

        <!-- Body Container -->
        <div id="page-content">
            <!--Page Header-->
            <div class="page-header text-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"><span class="main-title fw-bold">Skill Development Courses</span>
                            </div>
                            <!--End Breadcrumbs-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->

            <!--Main Content-->
            <div class="container">
                <!--Product Content-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                            <!-- Product Horizontal -->

                            <div class="product-details-img product-horizontal-style">
                                <!-- Product Main -->
                                <div class="zoompro-wrap">

                                    <!-- Product Image -->
                                    <div class="zoompro-span"><img id="zoompro" class="w-100"
                                            src="<?php echo $path;?>assets/images/jewel.jpg"
                                            data-zoom-image="<?php echo $path;?>assets/images/jewel.jpg" alt="product"
                                            width="600" height="800" /></div>
                                    <!-- End Product Image -->


                                </div>
                                <!-- End Product Main -->


                                <!-- Product Gallery 
                                    <div class="lightboximages">
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/1.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/5.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/10.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/15.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/20.jpg" data-size="1000x1280"></a>
                                        <a href="<?php echo $path;?>assets/images/products/360degree-images/25.jpg" data-size="1000x1280"></a>
                                    </div>
                                     End Product Gallery -->

                            </div>
                            <!-- End Product Horizontal -->
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                            <!-- Product Details -->
                            <div class="product-single-meta">
                                <h2 class="product-main-title" style="text-transform: capitalize;">Jewellery Making
                                </h2>
                                <!-- Product Info -->
                                <div class="product-info">
                                    <p class="product-cat"><i class="bi bi-clock"></i> Level: <span>
                                            <div class="form-check level">
                                                <input id="basic" name="level" type="radio" value="Basic" />

                                                <label for="basic" class="me-3">Basic - 10 Hours</label>
<br>
                                                <input id="adv" name="level" type="radio" value="Advance" />

                                                <label for="adv" class="me-3">Advance - 15 Hours</label>
<br>
                                                <input id="dip" name="level" type="radio" value="Diploma" />

                                                <label for="dip" class="me-3">Diploma - 40 Hours</label>


                                            </div>
                                        </span></p>


                                    <p class="product-cat"><i class="icon anm anm-calendar"></i> Course Duration: <span>
                                            1 Month
                                        </span></p>

                                </div>
                                <!-- End Product Info -->

                                <!-- Product Price -->
                                <div class="product-price d-flex-center my-2 money">

                                    <span class="price old-price basic-price" style="display:none;">₹5,500</span><span
                                        class="price basic-price bprice" style="display:none;">₹4500</span>

                                    <span class="price old-price advance-price" style="display:none;">₹7500</span><span
                                        class="price advance-price aprice" style="display:none;">₹6500</span>

                                    <span class="price old-price diploma-price" style="display:none;">₹21000</span><span
                                        class="price diploma-price dprice" style="display:none;">₹20000</span>
                                </div>
                                <!-- End Product Price -->

                            </div>
                            <!-- End Product Details -->


                            <!-- Product Form -->
                            <!-- <form method="post" action="#" class="product-form product-form-border hidedropdown"> -->
                            <!-- Product Action -->
                            <div class="product-action w-100 d-flex-wrap mb-2">


                                <!-- Product Add -->
                                <div class="product-form-submit addcart fl-1 ms-0 mt-0">
                                    <button id="submit" name="add"
                                        class="btn btn-secondary product-form-cart-submit"><span>Add to
                                            cart</span></button>
                                </div>
                                <!-- Product Add -->

                            </div>
                            <!-- End Product Action -->

                            <!-- </form> -->
                            <!-- End Product Form -->

                            <!-- Social Sharing -->
                            <div class="social-sharing d-flex-center mt-2 lh-lg">
                                <span class="sharing-lbl fw-600">Share :</span>

                                <!-- Copy to Clipboard Button -->
                                <button class="d-flex-center btn btn-link btn--share copy-to-clipboard"
                                    onclick="copyToClipboard()">
                                    <i class="icon anm anm-share"></i>
                                </button>
                            </div>
                            <!-- End Social Sharing -->
                        </div>
                    </div>
                </div>
                <!--Product Content-->

                <!--Product Tabs-->
                <div class="tabs-listing section pb-0">
                    <ul
                        class="product-tabs style3 border-bottom list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                        <li rel="description" class="active"><a class="tablink">Description</a></li>

                    </ul>

                    <div class="tab-container">
                        <!--Description-->
                        <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                        <div id="description" class="tab-content">
                            <div class="product-description">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-0 mb-md-0">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. the majority have suffered alteration in some
                                            form randomised words which don't look even slightly believable.</p>
                                        <h4 class="mb-3">Features</h4>
                                        <ul class="checkmark-info">
                                            <li>High quality fabric, very comfortable to touch and wear.</li>
                                            <li>This cardigan sweater is cute for no reason,perfect for travel and
                                                casual.</li>
                                            <li>It can tie in front-is forgiving to you belly or tie behind.</li>
                                            <li>Light weight and perfect for layering.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Description-->




                    </div>
                </div>
                <!--End Product Tabs-->
            </div>
            <!--End Main Content-->

        </div>
        <!-- End Body Container -->

        <!--Footer-->
        <?php include '../footer.php';?>
        <!--End Footer-->

        <!--Scoll Top-->
        <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
        <!--End Scoll Top-->





        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path;?>assets/js/plugins.js"></script>

        <!-- Elevatezoom Zoom -->
        <script src="<?php echo $path;?>assets/js/vendor/jquery.elevatezoom.js"></script>
        <script>
            $(document).ready(function () {
                /* Product Zoom */
                function product_zoom() {
                    $(".zoompro").elevateZoom({
                        gallery: "gallery",
                        galleryActiveClass: "active",
                        zoomWindowWidth: 300,
                        zoomWindowHeight: 100,
                        scrollZoom: false,
                        zoomType: "inner",
                        cursor: "crosshair"
                    });
                }
                product_zoom();
            });
        </script>

        <!-- Main JS -->
        <script src="<?php echo $path;?>assets/js/main.js"></script>

        <!-- Photoswipe Gallery JS -->
        <script src="<?php echo $path;?>assets/js/vendor/photoswipe.min.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>
            function copyToClipboard() {
                // Get the text you want to copy (replace with your actual URL or content)
                var textToCopy = window.location.href;

                // Create a temporary input element
                var tempInput = document.createElement("input");
                tempInput.setAttribute("value", textToCopy);
                document.body.appendChild(tempInput);

                // Select the text in the input element
                tempInput.select();
                tempInput.setSelectionRange(0, 99999); // For mobile devices

                // Execute the "copy" command
                document.execCommand("copy");

                // Remove the temporary input element
                document.body.removeChild(tempInput);

                // Optionally, provide feedback to the user
                toastr.info("Link copied ");
            }

            function getCookie(cookieName) {
                var name = cookieName + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var cookieArray = decodedCookie.split(';');

                for (var i = 0; i < cookieArray.length; i++) {
                    var cookie = cookieArray[i].trim();
                    if (cookie.indexOf(name) == 0) {
                        return cookie.substring(name.length, cookie.length);
                    }
                }
                return null;
            }
            var cookieValue = getCookie('samuthrika_login_user_id');
            console.log(cookieValue);


            $("#submit").click(function () {

                if (cookieValue === null) {
                    window.location.href("../register.php")
                } else {
                    var level = $('input[name="level"]:checked').val();

                    var price;

                    if (level == "Basic") {
                        price = $(".bprice").text();
                    }
                    if (level == "Advance") {
                        price = $(".aprice").text();
                    }
                    if(level == "Diploma"){
                        price = $(".dprice").text();
                    }


                    if (level == null) {
                        toastr.error("Select Level", "Empty")
                    } else {

                        var fd = new FormData();

                        fd.append('id', "68");
                        fd.append('course_name', "Jewellery Making");
                        fd.append("level", level);
                        fd.append("price", price);
                        fd.append("location", "trichy")

                        $.ajax({
                            url: 'ajax',
                            type: 'post',
                            contentType: false,
                            processData: false,
                            data: fd,

                            success: function (response) {
                                var result = JSON.parse(response);

                                if (result.status == 'Success') {
                                    toastr.success("Course Successfully Added ", "Success")
                                } else {
                                    toastr.error("Unable to Add", "Error")

                                }
                            }
                        })

                    }

                }


            })




            $(document).ready(function () {
                const basicBtn = $("#basic");
                const advBtn = $("#adv");
                const dipBtn = $("#dip");
                const basicMoney = $(".basic-price");
                const advMoney = $(".advance-price");
                const dipMoney = $(".diploma-price");

                basicBtn.change(function () {
                    if (basicBtn.is(":checked")) {
                        basicMoney.show();
                        advMoney.hide();
                        dipMoney.hide();
                    }
                });

                advBtn.change(function () {
                    if (advBtn.is(":checked")) {
                        basicMoney.hide();
                        advMoney.show();
                        dipMoney.hide();
                    }
                });

                dipBtn.change(function () {
                    if (dipBtn.is(":checked")) {
                        basicMoney.hide();
                        advMoney.hide();
                        dipMoney.show();
                    }
                });


            });
        </script>
        <script>
            $(function () {
                var $pswp = $('.pswp')[0],
                    image = [],
                    getItems = function () {
                        var items = [];
                        $('.lightboximages a').each(function () {
                            var $href = $(this).attr('href'),
                                $size = $(this).data('size').split('x'),
                                item = {
                                    src: $href,
                                    w: $size[0],
                                    h: $size[1]
                                };
                            items.push(item);
                        });
                        return items;
                    };
                var items = getItems();

                $.each(items, function (index, value) {
                    image[index] = new Image();
                    image[index].src = value['src'];
                });
                $('.prlightbox').on('click', function (event) {
                    event.preventDefault();

                    var $index = $(".active-thumb").parent().attr('data-slick-index');
                    $index++;
                    $index = $index - 1;

                    var options = {
                        index: $index,
                        bgOpacity: 0.7,
                        showHideOpacity: true
                    };
                    var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                    lightBox.init();
                });
            });
        </script>
        <div class="pswp" tabindex="-1" role="dialog">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Threesixty JS -->
        <script src="<?php echo $path;?>assets/js/vendor/jquery.threesixty.min.js"></script>
        <script src="<?php echo $path;?>assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
        <!-- Threesixty Gallery -->
        <script>
            window.onload = init;

            function init() {
                var product;
                if (!$(".threesixty_images li").length) {
                    product1 = $('.threesixty').ThreeSixty({
                        totalFrames: 30, // Total no. of image you have for 360 slider
                        endFrame: 30, // end frame for the auto spin animation
                        currentFrame: 1, // This the start frame for auto spin
                        imgList: '.threesixty_images', // selector for image list
                        progress: '.spinner', // selector to show the loading progress
                        imagePath: '<?php echo $path;?>assets/images/products/360degree-images/', // path of the image <?php echo $path;?>assets
                        filePrefix: '', // file prefix if any
                        ext: '.jpg', // extention for the <?php echo $path;?>assets
                        height: 500,
                        width: 800,
                        responsive: false,
                        navigation: true
                    });
                }
                $('.nav_bar_previous').bind('click', function (e) {
                    product.previous();
                });
                $('.nav_bar_next').bind('click', function (e) {
                    product.next();
                });
                $('.nav_bar_play').bind('click', function (e) {
                    product.play();
                });
            }
        </script>

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/prodcut-360-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:30:21 GMT -->

</html>