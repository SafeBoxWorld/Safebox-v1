<!-- title page -->

<script>
    let olustur = 0;
</script>
            <?php
                if(isset($_GET["productId"])){
                    if($_GET["productId"] == "canta"){
                        ?>
                            <div class="tf-section flat-auctions-details">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="wrap-img">
                                                <div class="img-detail w-100" style="aspect-ratio: 4/4;">
                                                    <div class="media modelViewer w-100" style="aspect-ratio: 4/4;">
                                                        <model-viewer id="canta" class="w-100" disable-pan touch-action="none" interaction-prompt="none" src="../assets/models/backpackson.gltf" ar alt="3d model saat" autoplay="" camera-controls="" auto-rotate="" style="height: 100%;" camera-orbit="-30deg 70deg m" shadow-intensity="0" shadow-softness="0" quick-look-browsers="safari chrome"></model-viewer>
                                                    </div>
                                                    <!-- <h6 class="tags text-t">6 in stock</h6>   -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row canta">
                                            <h2>Ürün Özellikleri</h2>
                                                <div class="col-12 modelAttribute">
                                                    <div class="attribute mt-4">
                                                        <h3>Kumaş Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/wood/wood1.jpg">MAUN</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/wood/wood2.jpg">SEDEF</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/wood/wood3.jpg">AKÇA</button>
                                                        </div>
                                                    </div>
                                                    <div class="attribute">
                                                        <h3>Kumaş Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/cloth/cloth1.jpg">KREM</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/cloth/cloth2.jpg">BORDO</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/cloth/cloth3.jpg">MAVİ</button>
                                                        </div>
                                                    </div>
                                                    <div class="attribute">
                                                        <h3>Kumaş Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/extra/extra1.jpg">BEYAZ</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/extra/extra2.jpg">SİYAH</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/extra/extra3.jpg">MAVİ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                            <button class="attributePicker sc-button" id="olustur">Oluştur</button>      
                                            <button class="attributePicker sc-button satinAl">Satın Al</button>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('olustur').addEventListener("click",function(){
                                    olustur = 1;
                                });
                                const modeViewerCanta = document.querySelector('model-viewer#canta');
                                modeViewerCanta.addEventListener("load", (ev) => {
                                    let material = modeViewerCanta.model.materials[0];
                                    let material2 = modeViewerCanta.model.materials[1];
                                    let material3 = modeViewerCanta.model.materials[2];

                                    const createAndApplyTexture = async (channel, event, element) =>{
                                        const texture = await
                                        modeViewerCanta.createTexture(event.target.value);
                                        (element == "wood") ? material2.pbrMetallicRoughness[channel].setTexture(texture) : (element == "cloth") ? material.pbrMetallicRoughness[channel].setTexture(texture) : material3.pbrMetallicRoughness[channel].setTexture(texture);
                                    }
                                    document.querySelector(".canta .modelAttribute").children[0].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'wood')
                                    });
                                    document.querySelector(".canta .modelAttribute").children[1].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'cloth')
                                    });
                                    document.querySelector(".canta .modelAttribute").children[2].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'extra')
                                    });
                                    
                                });

                                setInterval(function(){
                                    if(olustur == 0){
                                        for(let i = 0; i<3;i++){
                                            let randomm = Math.floor(Math.random()*3 + (3*i));
                                            document.querySelectorAll('.canta .modelAttribute .attributePicker')[randomm].click();
                                        }
                                    }
                                },2000);
                            </script>
                        <?php
                    }else if($_GET["productId"] == "saat"){
                        ?>
                            <div class="tf-section flat-auctions-details">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="wrap-img">
                                                <div class="img-detail w-100" style="aspect-ratio: 4/4;">
                                                    <div class="media modelViewer w-100" style="aspect-ratio: 4/4;">
                                                        <model-viewer id="saat" class="w-100" disable-pan touch-action="none" interaction-prompt="none" src="../assets/models/untitled5.gltf" ar alt="3d model saat" autoplay="" camera-controls="" auto-rotate="" style="height: 100%;" camera-orbit="-30deg 70deg m" shadow-intensity="0" shadow-softness="0" quick-look-browsers="safari chrome"></model-viewer>
                                                    </div>
                                                    <!-- <h6 class="tags text-t">6 in stock</h6>   -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row saat">
                                            <h2>Ürün Özellikleri</h2>
                                                <div class="col-12 modelAttribute">
                                                    <div class="attribute mt-4">
                                                        <h3>Kadran Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kadran/mavi.png">Mavi</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kadran/siyah.png">Siyah</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kadran/beyaz.png">Beyaz</button>
                                                        </div>
                                                    </div>
                                                    <div class="attribute">
                                                        <h3>Kordon Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kordon/watch_strap2comp.png">Beyaz</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kordon/watch_strap3comp.png">Mavi</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kordon/watch_strapcomp.png">Siyah</button>
                                                        </div>
                                                    </div>
                                                    <div class="attribute">
                                                        <h3>Ekran Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ekran/ekran1.png">Stil 1</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ekran/ekran2.png">Stil 2</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ekran/ekran3.png">Stil 3</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> 
                                            
                                            <button class="attributePicker sc-button" id="olustur">Oluştur</button>
                                            <button class="attributePicker sc-button satinAl">Satın Al</button>                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('olustur').addEventListener("click",function(){
                                    olustur = 1;
                                });
                                const modeViewerSaat = document.querySelector('model-viewer#saat');
                                modeViewerSaat.addEventListener("load", (ev) => {
                                    let material = modeViewerSaat.model.materials[0];
                                    let material2 = modeViewerSaat.model.materials[1];
                                    let material3 = modeViewerSaat.model.materials[2];

                                    const createAndApplyTexture = async (channel, event, element) =>{
                                        const texture = await
                                        modeViewerSaat.createTexture(event.target.value);
                                        (element == "wood") ? material2.pbrMetallicRoughness[channel].setTexture(texture) : (element == "cloth") ? material.pbrMetallicRoughness[channel].setTexture(texture) : material3.pbrMetallicRoughness[channel].setTexture(texture);
                                    }
                                    document.querySelector(".saat .modelAttribute").children[0].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'wood')
                                    });
                                    document.querySelector(".saat .modelAttribute").children[1].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'cloth')
                                    });
                                    document.querySelector(".saat .modelAttribute").children[2].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'extra')
                                    });
                                    
                                });

                                setInterval(function(){
                                    if(olustur == 0){
                                        for(let i = 0; i<3;i++){
                                            let randomm = Math.floor(Math.random()*3 + (3*i));
                                            document.querySelectorAll('.saat .modelAttribute .attributePicker')[randomm].click();
                                        }
                                    }
                                },2000);
                            </script>
                        <?php
                    }else if($_GET["productId"] == "ayakkabi"){
                        ?>
                            <div class="tf-section flat-auctions-details">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="wrap-img">
                                                <div class="img-detail w-100" style="aspect-ratio: 4/4;">
                                                    <div class="media modelViewer w-100" style="aspect-ratio: 4/4;">
                                                        <model-viewer id="ayakkabi" class="w-100" disable-pan touch-action="none" interaction-prompt="none" src="../assets/models/shoes2.gltf" ar alt="3d model saat" autoplay="" camera-controls="" auto-rotate="" style="height: 100%;" camera-orbit="-30deg 70deg m" shadow-intensity="0" shadow-softness="0" quick-look-browsers="safari chrome"></model-viewer>
                                                    </div>
                                                    <!-- <h6 class="tags text-t">6 in stock</h6>   -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row ayakkabi">
                                                <h2>Ürün Özellikleri</h2>
                                                <div class="col-12 modelAttribute">
                                                    <div class="attribute">
                                                        <h3>Genel Kaplama</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ayakkabi/kaplama1.jpg">Kaplama 1</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ayakkabi/kaplama2.jpg">Kaplama 2</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ayakkabi/kaplama3.jpg">Kaplama 3</button>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="attribute">
                                                        <h3>İkincil Kaplama</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ayakkabi/kaplama1.jpg">Kaplama 1</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ayakkabi/kaplama2.jpg">Kaplama 2</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/ayakkabi/kaplama3.jpg">Kaplama 3</button>
                                                        </div>
                                                    </div>
                                                    <div class="attribute mt-4">
                                                        <h3>Bağcık ve Taban Seçiniz</h3>
                                                        <div class="attributeList my-4">
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kadran/mavi.png">Mavi</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kadran/siyah.png">Siyah</button>
                                                            <button class="attributePicker sc-button" value="../assets/images/materials/kadran/beyaz.png">Beyaz</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            <button class="attributePicker sc-button" id="olustur">Oluştur</button>
                                            <button class="attributePicker sc-button satinAl">Satın Al</button> 
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('olustur').addEventListener("click",function(){
                                    olustur = 1;
                                });
                                const modeViewerAyakkabi = document.querySelector('model-viewer#ayakkabi');
                                modeViewerAyakkabi.addEventListener("load", (ev) => {
                                    let material = modeViewerAyakkabi.model.materials[0];
                                    let material2 = modeViewerAyakkabi.model.materials[1];
                                    let material3 = modeViewerAyakkabi.model.materials[2];

                                    const createAndApplyTexture = async (channel, event, element) =>{
                                        const texture = await
                                        modeViewerAyakkabi.createTexture(event.target.value);
                                        (element == "wood") ? material2.pbrMetallicRoughness[channel].setTexture(texture) : (element == "cloth") ? material.pbrMetallicRoughness[channel].setTexture(texture) : material3.pbrMetallicRoughness[channel].setTexture(texture);
                                    }
                                    document.querySelector(".ayakkabi .modelAttribute").children[0].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'wood')
                                    });
                                    document.querySelector(".ayakkabi .modelAttribute").children[1].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'cloth')
                                    });
                                    document.querySelector(".ayakkabi .modelAttribute").children[2].querySelector(".attributeList").addEventListener('click', (event) => {
                                        createAndApplyTexture("baseColorTexture", event, 'extra')
                                    });
                                    
                                });

                                setInterval(function(){
                                    if(olustur == 0){
                                        for(let i = 0; i<3;i++){
                                            let randomm = Math.floor(Math.random()*3 + (3*i));
                                            document.querySelectorAll('.ayakkabi .modelAttribute .attributePicker')[randomm].click();
                                        }
                                    }
                                },2000);
                            </script>
                        <?php
                    }
                }else{
                    header('Location: index.php?page=products');
                }
            ?>

            
            <!-- flat live auctions
            <div class="tf-section flat-auctions live-auctions style2 nft-style">
                <div class="container">
                    <div class="row">                  
                        <div class="col-lg-6 col-sm-12">
                            <div class="heading-section2 style">
                                <h2 class="fw-5">Live Auctions</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="swiper-container carousel-4 auctions show-slider3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item">										
                                            <div class="sc-card-product sc-card-article blog-article">
                                                <div class="card-media flat-img">
                                                    <a href="live-auctions-details.html"><img src="../assets/images/box-item/auctions-1.jpg" alt="Image"></a>                                                                                                                                                                                                     
                                                </div>  
                                                <div class="content">
                                                    <h6 class="tags">6 in stock</h6>  
                                                    <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3> 
                                                    <div class="meta-info mb-17">
                                                        <div class="author">
                                                            <div class="avatar">
                                                                <img src="../assets/images/avatar/avt-01.png" alt="">
                                                                <img class="check" src="../assets/images/icon/author-check.svg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                                <div class="date"> In <span> @ 3d Models</span></div>                                           
                                                            </div>
                                                        </div>                                  
                                                    </div>  
                                                    <div class="meta-price flex-one">                                              
                                                        <div class="price flex">
                                                            <img class="" src="../assets/images/icon/icon-diamond.svg" alt="">
                                                            <div class="title-price"> 2.39 ETH</div>
                                                        </div>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-countdown">
                                                        <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                        <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                                    </div>
                                                </div> 
                                            </div>    	
                                        </div>
                                    </div>                              
                                    <div class="swiper-slide">
                                        <div class="slider-item">										
                                            <div class="sc-card-product sc-card-article blog-article">
                                                <div class="card-media flat-img">
                                                    <a href="live-auctions-details.html"><img src="../assets/images/box-item/auctions-4.jpg" alt="Image"></a>                                                                                                                                                                                                     
                                                </div>  
                                                <div class="content">
                                                    <h6 class="tags">6 in stock</h6>  
                                                    <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3> 
                                                    <div class="meta-info mb-17">
                                                        <div class="author">
                                                            <div class="avatar">
                                                                <img src="../assets/images/avatar/avt-01.png" alt="">
                                                                <img class="check" src="../assets/images/icon/author-check.svg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                                <div class="date"> In <span> @ 3d Models</span></div>                                           
                                                            </div>
                                                        </div>                                  
                                                    </div>  
                                                    <div class="meta-price flex-one">                                              
                                                        <div class="price flex">
                                                            <img class="" src="../assets/images/icon/icon-diamond.svg" alt="">
                                                            <div class="title-price"> 2.39 ETH</div>
                                                        </div>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-countdown">
                                                        <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                        <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                                    </div>
                                                </div> 
                                            </div>    	
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">										
                                            <div class="sc-card-product sc-card-article blog-article">
                                                <div class="card-media flat-img">
                                                    <a href="live-auctions-details.html"><img src="../assets/images/box-item/auctions-3.jpg" alt="Image"></a>                                                                                                                                                                                                     
                                                </div>  
                                                <div class="content">
                                                    <h6 class="tags">5 in stock</h6>  
                                                    <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3> 
                                                    <div class="meta-info mb-17">
                                                        <div class="author">
                                                            <div class="avatar">
                                                                <img src="../assets/images/avatar/avt-01.png" alt="">
                                                                <img class="check" src="../assets/images/icon/author-check.svg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                                <div class="date"> In <span> @ 3d Models</span></div>                                           
                                                            </div>
                                                        </div>                                  
                                                    </div>  
                                                    <div class="meta-price flex-one">                                              
                                                        <div class="price flex">
                                                            <img class="" src="../assets/images/icon/icon-diamond.svg" alt="">
                                                            <div class="title-price"> 2.39 ETH</div>
                                                        </div>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-countdown">
                                                        <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                        <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                                    </div>
                                                </div> 
                                            </div>    	
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">										
                                            <div class="sc-card-product sc-card-article blog-article">
                                                <div class="card-media flat-img">
                                                    <a href="live-auctions-details.html"><img src="../assets/images/box-item/auctions-2.jpg" alt="Image"></a>                                                                                                                                                                                                     
                                                </div>  
                                                <div class="content">
                                                    <h6 class="tags">4 in stock</h6>  
                                                    <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3> 
                                                    <div class="meta-info mb-17">
                                                        <div class="author">
                                                            <div class="avatar">
                                                                <img src="../assets/images/avatar/avt-01.png" alt="">
                                                                <img class="check" src="../assets/images/icon/author-check.svg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                                <div class="date"> In <span> @ 3d Models</span></div>                                           
                                                            </div>
                                                        </div>                                  
                                                    </div>  
                                                    <div class="meta-price flex-one">                                              
                                                        <div class="price flex">
                                                            <img src="../assets/images/icon/icon-diamond.svg" alt="">
                                                            <div class="title-price"> 2.39 ETH</div>
                                                        </div>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-countdown">
                                                        <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                        <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                                    </div>
                                                </div> 
                                            </div>    	
                                        </div>
                                    </div> 
                                    <div class="swiper-slide">
                                        <div class="slider-item">										
                                            <div class="sc-card-product sc-card-article blog-article">
                                                <div class="card-media flat-img">
                                                    <a href="live-auctions-details.html"><img src="../assets/images/box-item/auctions-1.jpg" alt="Image"></a>                                                                                                                                                                                                     
                                                </div>  
                                                <div class="content">
                                                    <h6 class="tags">6 in stock</h6>  
                                                    <h3><a href="live-auctions-details.html">Axtronic Electronics VS-10</a></h3> 
                                                    <div class="meta-info mb-17">
                                                        <div class="author">
                                                            <div class="avatar">
                                                                <img src="../assets/images/avatar/avt-01.png" alt="">
                                                                <img class="check" src="../assets/images/icon/author-check.svg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                                <div class="date"> In <span> @ 3d Models</span></div>                                           
                                                            </div>
                                                        </div>                                  
                                                    </div>  
                                                    <div class="meta-price flex-one">                                              
                                                        <div class="price flex">
                                                            <img class="" src="../assets/images/icon/icon-diamond.svg" alt="">
                                                            <div class="title-price"> 2.39 ETH</div>
                                                        </div>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-countdown">
                                                        <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                        <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                                    </div>
                                                </div> 
                                            </div>    	
                                        </div>
                                    </div>   
                                    <div class="swiper-slide">
                                        <div class="slider-item">										
                                            <div class="sc-card-product sc-card-article blog-article">
                                                <div class="card-media flat-img">
                                                    <a href="live-auctions-details.html"><img src="../assets/images/box-item/auctions-4.jpg" alt="Image"></a>                                                                                                                                                                                                     
                                                </div>  
                                                <div class="content">
                                                    <h6 class="tags">6 in stock</h6>  
                                                    <h3><a href="live-auctions-details.html"> Axtronic Electronics VS-10 </a></h3> 
                                                    <div class="meta-info mb-17">
                                                        <div class="author">
                                                            <div class="avatar">
                                                                <img src="../assets/images/avatar/avt-01.png" alt="">
                                                                <img class="check" src="../assets/images/icon/author-check.svg" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <h5> By<a class="text-color-3" href="author-profile.html"> Themesflat</a> </h5>
                                                                <div class="date"> In <span> @ 3d Models</span></div>                                           
                                                            </div>
                                                        </div>                                  
                                                    </div>  
                                                    <div class="meta-price flex-one">                                              
                                                        <div class="price flex">
                                                            <img class="" src="../assets/images/icon/icon-diamond.svg" alt="">
                                                            <div class="title-price"> 2.39 ETH</div>
                                                        </div>
                                                        <div class="button-place-bid">
                                                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="sc-button btn-3"><span>Place Bid</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-countdown">
                                                        <h4 class="flex-one"><span class="title-countdown">Ending Time - </span>
                                                        <span class="js-countdown" data-timer="0187600" data-labels=" :  ,  : , : , "></span></h4>
                                                    </div>
                                                </div> 
                                            </div>    	
                                        </div>
                                    </div>                              
                                </div>
                                <div class="swiper-button-next btn-slide-next active"></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                            </div>                                               
                        </div>
                    </div>
                </div>
            </div>

            <div class="flat-help page-style">
                <div class="container">
                    <div class="row help-row">                  
                        <div class="col-lg-5 col-md-5">
                            <div class="title-help">
                                <h2>Have Any Help to
                                    Newsletter.</h2>
                            </div>                           
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="widget-subcribe home2">
                                <div class="form-subcribe">
                                    <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                                        <input name="email" value="" class="email" type="email" placeholder="Enter Your Email..." required>
                                        <button id="submit" name="submit" type="submit"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <mask id="mask0_120_16159" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                            <rect width="24" height="24" fill="url(#pattern0)"/>
                                            </mask>
                                            <g mask="url(#mask0_120_16159)"> <rect x="-13" y="-13" width="50" height="50" fill="black"/> </g>
                                            <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_120_16159" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_120_16159" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                                            </defs> </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->