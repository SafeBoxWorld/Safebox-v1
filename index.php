<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Safe Box | NFT Marketplace </title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/dist/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/dist/responsive.css">
    
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png">

</head>

<body class="body header-fixed">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper" class="wrapper-style">
        <div id="page" class="clearfix">
            <?php
                include('parts/header.php');
                if(isset($_GET["page"])){
                    if(file_exists('include/'.$_GET["page"].'.php')){
                        include('include/'.$_GET["page"].'.php');
                    }else{
                        include('include/home.php');
                    }
                }else{
                    include('include/home.php');
                }
                include('parts/footer.php');
            ?>
        <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Modal Popup Bid -->
    <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h2 class="text-center">Your Bidding
                        Successfuly Added</h2>
                    <p class="text-center">your bid <span class="price color-popup">(2.39ETH) </span> has been listing
                        to our database</p>
                    <a href="#" class="btn btn-primary"> Watch the listings</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h2>Place a Bid</h2>
                    <p class="text-center">You must bid at least <span class="price color-popup">2.39 ETH</span>
                    </p>
                    <input type="text" class="form-control" placeholder="00.00 ETH">
                    <p>Enter quantity. <span class="color-popup">1 available</span>
                    </p>
                    <input type="text" class="form-control quantity" value="1">
                    <div class="hr"></div>
                    <div class="d-flex justify-content-between">
                        <p> Current Bid</p>
                        <p class="text-right price color-popup"> 2.39 ETH </p>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success"
                        data-dismiss="modal" aria-label="Close"> Place a bid</a>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top"></a>

    <!-- Javascript -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/switchmode.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer@2.1.0/dist/model-viewer.min.js"></script>
    <script>
        $(document).ready(function(){
            const modelViewer = document.querySelector('model-viewer#saat');

            modelViewer.addEventListener("load", (ev) => {
                let material = modelViewer.model.materials[0];
                let material2 = modelViewer.model.materials[1];
                let material3 = modelViewer.model.materials[2];

                const createAndApplyTexture = async (channel, event, element) =>{
                    const texture = await
                    modelViewer.createTexture(event.target.value);
                    (element == "wood") ? material2.pbrMetallicRoughness[channel].setTexture(texture) : (element == "cloth") ? material.pbrMetallicRoughness[channel].setTexture(texture) : material3.pbrMetallicRoughness[channel].setTexture(texture);
                }
                document.querySelector(".modelAttribute").children[0].querySelector(".attributeList").addEventListener('click', (event) => {
                    createAndApplyTexture("baseColorTexture", event, 'wood')
                });
                document.querySelector(".modelAttribute").children[1].querySelector(".attributeList").addEventListener('click', (event) => {
                    createAndApplyTexture("baseColorTexture", event, 'cloth')
                });
                document.querySelector(".modelAttribute").children[2].querySelector(".attributeList").addEventListener('click', (event) => {
                    createAndApplyTexture("baseColorTexture", event, 'extra')
                });
                
            });

            setInterval(function(){
                for(let i = 0; i<3;i++){
                    let randomm = Math.floor(Math.random()*3 + (3*i));
                    document.querySelectorAll('.attributePicker')[randomm].click();
                }
            },2000);
        });
    </script>

</body>

</html>