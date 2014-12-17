
@include('default/header')
<body>
    <div class="wrapper-one">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle nav-stacked collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="http://hishoppie.com" class="navbar-brand"  id="scrollTop" style="padding-left:20px;padding-right:20px;"> &nbsp; &nbsp; &nbsp; hi<i class="fa fa-dollar"></i>h<i class="fa fa-globe"></i>ppie  &nbsp; &nbsp; &nbsp;  </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right" style="padding-right:35px;">
                        <?php if ($hi_id == '0') { ?> 
                            <li id="home"><a href="#" id="scrollTop"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                            <li id="#"><a href="#"><i class="fa fa-user"></i> About</a></li>
                        <?php } ?>
                        <li class="dropdown">
                            <?php if ($hi_id == '0') { ?> <a href="#login"><i class="fa fa-lock"></i> Sign-in</a><?php } else { ?>
                                <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">
                                    <img src ="static/images/bg.jpg" style="margin-top:-10px;margin-bottom:-10px;
                                         border-radius: 100%;
                                         border: 0px solid #FFF;
                                         width: 40px;height:40px;"> <?php echo $username; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu" style="color:#37b590;">
                                    <li><a href="#"> Profile</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"> </li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="index.php/logout">Logout</a></li>
                                </ul>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class='main-content'>
        <div ng-view>

        </div>               
    </div>
    <div class="wrapper-one">
        <div class="container-fluid" style="background:#4bb1b1;padding-top:10px;padding-bottom:10px;border-bottom:3px inset #4bb1b1;">
            <div class='row text-center'>
                <div class='col-md-3'>
                    <i class="fa fa-money icon-list " style="color:#fff;"></i> <h4> &nbsp; Sell your Items  </h4>
                </div>
                <div class='col-md-6'>
                    <i class="fa fa-bullhorn icon-list" style="color:#fff;"></i> <h4>  &nbsp; Advertise your Business/service </h4>
                </div>
                <div class='col-md-3'>
                    <i class="fa fa-shopping-cart icon-list" style="color:#fff;"></i> <h4> &nbsp; Buy items/Find shops     <h1><?php echo $post_data['one']; ?></h1>  </h4>
                </div>

            </div>
        </div>
    </div>
    <div class='container-fluid' style="background-color: #fff;">
        <div class="container" style="margin-top:24px;">
            <div class="row text-center" id="categories">
                <a href="#" class="row-a-content unstyled" style="text-decoration: none;">
                
                    <div class="col-md-4">
                        <div class='row row-content'>
                            <p style="line-height: 4;"> Automobiles </p>
                            <div class="col-sm-5 text-center">
                                <p class="icon-list"> 
                                    <span class="fa fa-automobile icon-list"></span>
                                </p>
                            </div>
                            <div class="col-sm-7">
                                <ul class="list-unstyled pull-left text-left">
                                    <li> <a href="#">cars & jeeps</a></li> 
                                    <li> <a href="#">bikes & bicycles</a></li>
                                    <li> <a href="#">Heavy vechicles</a></li>
                                    <li> <a href="#">Agriculture equipment</a></li>
                                    <li> <a href="#">Spare parts </a></li>
                                    <li> <a href="#"></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Books </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-book icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Books & Magazines</a></li> 
                                <li> <a href="#">Study Materials</a></li>
                                <li> <a href="#">CD's/ DVD's/ Softcopies</a></li>
                                <li> <a href="#">Diary's</a></li>
                                <li> <a href="#">Notebooks</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Electronics & Computers </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-desktop icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Laptops & Desktops</a></li> 
                                <li> <a href="#"> Game station/XBox </a></li>
                                <li> <a href="#"> Tv's/DVD's & Mutlimedia</a></li>
                                <li> <a href="#">Cameras</a></li>
                                <li> <a href="#">Accessories</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:44px;">
            <div class="row text-center" id="categories">
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Mobile phones </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-mobile-phone icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#"> Mobiles </a></li> 
                                <li> <a href="#">Tablets</a></li>
                                <li> <a href="#">Phablets</a></li>
                                <li> <a href="#">Ipods/Ipads</a></li>
                                <li> <a href="#">Mobile Accessories </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Kids </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-child icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Toys & Games</a></li> 
                                <li> <a href="#">Health products</a></li>
                                <li> <a href="#">Clothes</a></li>
                                <li> <a href="#">Baby furniture</a></li>
                                <li> <a href="#">Accessories</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Home Appliances </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-home icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#"> AC/Coolers </a></li> 
                                <li> <a href="#">Washing Machines & Refrigrators </a></li>
                                <li> <a href="#">Kitchen Appliances</a></li>
                                <li> <a href="#">Furniture, Art/Paintings</a></li>
                                <li> <a href="#">Others </a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:44px;">
            <div class="row text-center" id="categories">
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Careers </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-graduation-cap icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#"> Jobs </a></li> 
                                <li> <a href="#"> Job referrals </a></li>
                                <li> <a href="#">Internships</a></li>
                                <li> <a href="#">Training centers</a></li>
                                <li> <a href="#">Colleges/Institutes </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Sports </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-soccer-ball-o icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Cricket bats</a></li> 
                                <li> <a href="#">Batmenton bats</a></li>
                                <li> <a href="#">Footballs</a></li>
                                <li> <a href="#">Tennis rackets</a></li>
                                <li> <a href="#">Other equipment</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Gifts </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-gift icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Gift articles</a></li> 
                                <li> <a href="#">Birthday cakes</a></li>
                                <li> <a href="#">Flowers</a></li>
                                <li> <a href="#">Teddy bears</a></li>
                                <li> <a href="#">Others</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:44px;">
            <div class="row text-center" id="categories">
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Real estate </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-building icon-list" style='font-size:22px'> 
                                    <span class="fa fa-home icon-list" style="font-size: 25px"><span class="fa fa-building icon-list" style="font-size: 19px"></span>
                                    </span>
                                </span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#"> Lands/Properties</a></li> 
                                <li> <a href="#">Office space</a></li>
                                <li> <a href="#"> Houses for rent </a></li>
                                <li> <a href="#">PG's & Hostels</a></li>
                                <li> <a href="#">Others</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Fashion & life style  </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-female icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Clothes </a></li> 
                                <li> <a href="#">Jewellary</a></li>
                                <li> <a href="#">Beauty & cosmotics</a></li>
                                <li> <a href="#">Watches, Belts & Wallets</a></li>
                                <li> <a href="#">Footwear</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Hotels & Medical  </p>
                        <div class="col-sm-5 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-hospital-o icon-list"></span>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Hospitals</a></li> 
                                <li> <a href="#">Clinics</a></li>
                                <li> <a href="#">Medical shops</a></li>
                                <li> <a href="#">Resorts</a></li>
                                <li> <a href="#">Lodges</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:44px;">
            <div class="row text-center" id="categories">
                <div class="col-md-12">
                    <div class='row row-content'>
                        <p style="line-height: 4;"> Services (Commerical, non-commercial & others)  </p>
                        <br/>
                        <div class="col-sm-3 text-center">
                            <p class="icon-list"> 
                                <span class="fa fa-wrench icon-list" style='font-size:22px'> </span>
                                <span class="fa fa-suitcase icon-list" style="font-size: 25px"> </span> <br/>
                                <span class="fa fa-wifi icon-list" style="font-size: 19px"> </span>
                                <span class='fa fa-heart icon-list' style='font-size:19px'></span>
                                <span class="fa fa-truck icon-list" style="font-size: 24px"></span>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Astrology</a></li> 
                                <li> <a href="#">Maids & servants</a></li>
                                <li> <a href="#">Security</a></li>
                                <li> <a href="#">Car/Bike service</a></li>
                                <li> <a href="#">Legal services</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">NGO'S</a></li> 
                                <li> <a href="#">Social services</a></li>
                                <li> <a href="#">Home repairs</a></li>
                                <li> <a href="#">Electrical Services</a></li>
                                <li> <a href="#">Cabs/Taxis</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <ul class="list-unstyled pull-left text-left">
                                <li><a href="#">Beauty & spa</a></li> 
                                <li> <a href="#">Household goods</a></li>
                                <li> <a href="#">Wholesale shops</a></li>
                                <li> <a href="#">Events/Parties</a></li>
                                <li> <a href="#">Martimonal</a></li>
                                <li> <a href="#"></a></li>
                            </ul>
                        </div>

                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="select-location-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #4bb1b1;"> <i class="fa fa-map-marker"></i> Select your Location </h4>
                </div>
                <div class="modal-body">
                    <div class="text-content text-only">
                        <a href="http://www.olx.in/" class="select-all-country" rel="nofollow">
                            Select Entire Country
                        </a> 
                        <hr/>
                        <div class="input-group">
                            <div class="input-group-addon" style="background-color:#4bb1b1;color:#fff;"> <i class="fa fa-map-marker"></i></div>
                            <input type="search" class="form-control input-sm search-location">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('default/footer')
</body>