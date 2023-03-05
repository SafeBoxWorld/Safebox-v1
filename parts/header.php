<header id="header_main" class="header_1 js-header">
    <div class="themes-container">
        <div class="row">
            <div class="col-md-12">                              
                <div id="site-header-inner"> 
                    <div class="wrap-box flex">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img id="logo_header" src="../assets/images/logo.png" alt="nft-gaming" width="92" height="47"
                                        data-retina="../assets/images/logo.png" data-width="133"
                                        data-height="56">
                                </a>
                            </div>
                        </div>
                        <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <!-- <li class="menu-item menu-item-has-children current-menu-item">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="index.html">Home 1</a></li>
                                        <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                        <li class="menu-item current-item"><a href="home3.html">Home 3</a></li>                                                 
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Explore</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="explore.html">Explore</a></li>
                                        <li class="menu-item"><a href="live-auctions.html">Live Auctions</a></li>
                                        <li class="menu-item"><a href="live-auctions-details.html">Live Auctions Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">                                        
                                        <li class="menu-item"><a href="about.html">About</a></li>
                                        <li class="menu-item"><a href="author.html">Author</a></li>
                                        <li class="menu-item"><a href="author-profile.html">Author Profile</a></li>
                                        <li class="menu-item"><a href="edit-profile.html">Edit Profile</a></li>
                                        <li class="menu-item"><a href="connect-wallet.html">Connect Wallet</a></li>
                                        <li class="menu-item"><a href="create-item.html">Create Item</a></li>
                                        <li class="menu-item"><a href="login.html">Login</a></li>
                                        <li class="menu-item"><a href="register.html">Register</a></li>
                                        <li class="menu-item"><a href="faq.html">Faq</a></li>
                                        <li class="menu-item"><a href="popular-collections.html">Popular Collections</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children ">
                                    <a href="#">Community</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                                        <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                 -->
                                <li class="menu-item">
                                    <a href="index.php">Anasayfa</a>                                        
                                </li>
                                <li class="menu-item">
                                    <a href="index.php?page=products">Ürünler</a>                                        
                                </li>
                                <li class="menu-item">
                                    <a href="index.php?page=license">Lisans Sorgu</a>                                        
                                </li>
                            </ul>
                        </nav><!-- /#main-nav -->   
                        <div class="flat-search-btn flex ">
                            <div class="header-search flat-show-search" >                                   
                                <div class="top-search">
                                    <form action="#" method="get" role="search" class="search-form home3">
                                        <input type="search" id="s" class="search-field" placeholder="Search Here..." value="" name="s" title="Search for" required="">
                                        <button class="search search-submit" type="submit" title="Search">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </form>                                           
                                </div>
                            </div>
                            <div class="sc-btn-top" id="site-header">
                                <form name="login" action="#" method="post">
                                    <input hidden id="phantomDisconnect" name="phantomDisconnect" value="">
                                    <input hidden id="phantomAccount" name="phantomAccount" value="">
                                </form>
                                <?php
                                    if(isset($_POST['phantomAccount']) && !empty($_POST['phantomAccount'])) {
                                        $_SESSION['phantomAccount'] = $_POST['phantomAccount']; //If connected create a session with the id of the wallet
                                    }
                                    if(isset($_POST['phantomDisconnect']) && !empty($_POST['phantomDisconnect'])) {
                                        unset($_SESSION['phantomAccount']); //If deconnected delete session
                                    }
                                    if(isset($_SESSION['phantomAccount']) && !empty($_SESSION['phantomAccount'])) {
                                        echo'<button onclick="disconnect() class="sc-button header-slider style wallet fl-button pri-1"><span>'.$_SESSION['phantomAccount'].'</span></button>'; //show log out button if connected
                                    }else{
                                        echo'<button onclick="connect() class="sc-button header-slider style wallet fl-button pri-1"><span>Cüzdan Bağla
                                        </span></button>'; //else show login button
                                    }
                                ?>
                                <button class="sc-button header-slider style wallet fl-button pri-1 cuzdanBagla"><span>Cüzdan Bağla
                                </span></button>
                            </div>                                     
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="mode_switcher">
        <a href="#" onclick="switchTheme()" class="light d-flex align-items-center">
            <img src="../assets/images/icon/sun.png" alt="">
        </a>
        <a href="#" onclick="switchTheme()" class="dark d-flex align-items-center is_active">
            <img src="../assets/images/icon/moon.png" alt="">
        </a>
    </div>
</header>