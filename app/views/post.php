<!DOCTYPE html>
<html lang="en" ng-app="pvPostApp">
    <head>
        <title></title>
        <link rel="stylesheet" href="http://localhost/omshoppie/public/static/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/omshoppie/public/static/bower_components/bootstrap/dist/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="http://localhost/omshoppie/public/static/bower_components/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/angularjs/angular.min.js"></script>
        <script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/angular-route/angular-route.min.js"></script>
        <meta name="_token" ng-init="csrf_token = '<?php echo csrf_token(); ?>'">
        <style type="text/css">
            @import url("http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css");
        </style>
        <script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/omshoppie/public/static/js/autocomplete.js"></script>
        <script type='text/javascript' src='http://localhost/omshoppie/public/static/js/script_post.js'></script>
        <script type="text/javascript">
            window.onload = function () {
                $('.step1_Categories').selectpicker();
            };
        </script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.js" /></script>
        <link rel="stylesheet" href="http://localhost/omshoppie/public/static/css/style.css">
    </head>
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
    <div class='container text-center' style='margin-top: 100px;' ng-controller="postController">
        <br/>
        <br/>
        <ul class="post-wizard">
            <li class="active" id="step1">
                <span class="step"id="span_step1">1</span>
                <span class="data-wizard"> Category </span>
            </li>
            <li id="step2">
                <span class="step" id="span_step2">2</span>
                <span class="data-wizard"> Sub Category </span>
            </li>
            <li id="step3">
                <span class="step" id="span_step3">3</span>
                <span class="data-wizard"> Ad Details </span>
            </li>
            <li id="step4">
                <span class="step" id="span_step4">4</span>
                <span class="data-wizard"> Confirmation </span>
            </li>
        </ul> 
        <hr style="width:85%;background-color: #d0d0d0;height: 1px; border:0px;">

        <div class="step1-postingAd">
            <div class='row' style="padding-top:10px;">
                <div class='col-lg-6 col-lg-offset-3'> 
                    <form role="form" class="form form-horizontal">
                   <select class='step1_Categories col-lg-10 col-lg-offset-1' data-style="btn btn-primary btn-hishoppie">
                            <option value="#"> Select category </option>
                            <option data-icon="fa fa-automobile" value=mC1>Automobile</option>
                            <option data-icon="fa fa-book" value="mC2">Books & CD's</option>
                            <option data-icon="fa fa-desktop" value="mC3"> Electronics & Computer </option>
                            <option data-icon="fa fa-mobile-phone" value="mc4"> Mobiles & Tablets </option>
                            <option data-icon="fa fa-female" value="mC5"> fashion & lifestyles </option>
                            <option data-icon="fa fa-home" value="mC6"> Home Appliances </option>
                            <option data-icon="fa fa-graduation-cap" value="mC7"> Careers </option>
                            <option data-icon="fa fa-soccer-ball-o" value="mC8"> Sports </option>
                            <option data-icon="fa fa-gift" value="mC9"> Gifts </option>
                            <option data-icon="fa fa-building" value="mC10"> Real estate </option>
                            <option data-icon="fa fa-child" value="mC11"> kids </option>
                            <option data-icon="fa fa-hospital-o" value="mC12"> Hotels & Medical </option>
                            <option data-icon="fa fa-wrench" value="mC13"> Services </option>
                        </select>
                    </form>
                    <br/>
                    <div class="data-hint">
                        <span class="fa fa-arrow-circle-up"></span>

                        <p> Select your category from the above dropdown </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 pull-right">
                    <button class="btn btn-primary btn-hishoppie2 pull-right" style="margin-right: 50px;" ng-click="post1()"> Next </button>
                </div>
            </div>
        </div>
        <div class="step2-postingAd" style="display:none;">
            <div class='row' style="padding-top:10px;">
                <div class='col-lg-6 col-lg-offset-3 text-center'>
                    <!--                <ul class='subCategory-list list-unstyled'>
                                        <li ng-repeat="item in subCategory"> <a href='#'> {{item.name}} </a></li>
                                    </ul>-->
                    <h1 style="color: #37b590;">
                        <span class="fa fa-automobile"></span>  Automobiles 
                    </h1>
                    <br/>
                    <span class="fa fa-arrow-circle-down" style="font-size: 27px;color: #999;padding-bottom: 40px;"></span>
                    <br/>
                    <form role="form" class="form form-horizontal">
    <!--                    <select class='step1_Categories col-lg-6 col-lg-offset-4' data-style="btn btn-primary btn-hishoppie">-->
                        <select class="form-control" style="font-size: 15px; height: 45px;">
                            <option value="#"> Select sub category </option>
                            <option ng-repeat="item in subCategory"> {{ item.name}}</option>
                        </select>
                    </form>
                    <!--                <div class="data-hint">
                                        <span class="fa fa-arrow-circle-up"></span>
                                        <br/>
                                        <p> Select your category from the above dropdown </p>
                                    </div>-->
                    <br/><br/>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 pull-right">
                    <div class="form_btns pull-right">
                        <button class="btn btn-default" style="margin-right: 30px;" ng-click="post_back()"> Back </button>
                        <button class="btn btn-primary btn-hishoppie2 pull-right" style="margin-right: 50px;" ng-click="post2()"> Next </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="step3-postingAd" style="display: none;">
            <form role="form" class="form" name="hiShoppiePostadForm" ng-submit="post3()" novalidate>

                <div class='row text-center' style="padding-top:10px;">
                    <div class="col-lg-1"></div>
                    <div class='col-lg-5'>
                        <div class="selected_categories">
                            <span class="selected_category check_icon fa fa-check-circle pull-left"></span>
                            <span c-id="1" class="selected_category"> 
                                <i class="fa fa-automobile"></i> Automobiles
                            </span>
                            <span class="selected-subcategory" s-c-id="1">
                                Cars & Jeeps  
                            </span>
                            <span style="margin-left: 15px;">
                                <a href="#" ng-click="post_back()" style="font-size: 15px;color: #fff;"> Change </a>
                            </span>
                        </div>
                        <br/>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadForm.title.$invalid && (hiShoppiePostadForm.title.$dirty || submitted)}">
                            <div class="input-group">
                                <label for="text" class="control-label pull-left">Title</label>
                            </div>
                            <input type="text" class="form-control" id="title" name="title" ng-model="ad.title" placeholder="ex: samsung galaxy grand" ng-required="true">
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadForm.subtitle.$invalid && (hiShoppiePostadForm.subtitle.$dirty || submitted)}">
                            <div class="input-group">
                                <label for="text" class="control-label pull-left">Subtitle (optional)</label>
                            </div>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" ng-model="ad.subtitle" placeholder="ex: s-duos black color">
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadForm.description.$invalid && (hiShoppiePostadForm.description.$dirty || submitted)}">
                            <div class="input-group">
                                <label for="description" class="control-label pull-left">Description</label>
                            </div>
                            <textarea class="form-control" id="description" name="description" ng-model="ad.description" polaceholder="Describe about you item"></textarea>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadForm.cost.$invalid && (hiShoppiePostadForm.cost.$dirty || submitted)}">
                            <div class="form-inline pull-left">
                                <div class="input-group pull-left">
                                    <label for="cost" class="control-label">Cost</label>
                                </div>
                                <br/>
                                <div class="inside pull-left" style="margin-top : 5px;">
                                    <input type="number" class="form-control form-inline" id="cost" name="cost" ng-model="ad.cost" polaceholder="Ex: 1529" ng-required="true">
                                    <span class="fa fa-rupee"></span> <span ng-bind="ad.cost"></span> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="negotiable"> Negotiable
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" id='photos_ad'>
                        Select photos 
                        <br/><br/>
                        <span class="fa fa-image" style="color: #999; font-size: 74px;"></span>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group pull-right">
                        <button class="btn btn-default" ng-click="post_back_2()" style="margin-right: 30px;"> Back </button>
                        <button type="submit" class="btn btn-hishoppie2 pull-right" style="margin-right: 50px;" ng-disabled="hiShoppiePostadForm.$invalid"> Next </button>
                    </div>
                </div>
            </form>

        </div>

        <div class="step4-postingAd" style='display: none;'>
            <form role="form" name="hiShoppiePostadContactForm" ng-submit="postadConfirm()" novalidate>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <span style="font-size: 19px;"> Contact details</span>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadContactForm.fullname.$invalid && (hiShoppiePostadContactForm.fullname.$dirty || submitted) }">
                            <div class="input-group">
                                <label for="fullname" class="control-label pull-left">Full name</label>
                            </div>
                            <input type="text" class="form-control" id="fullname" name="fullname" ng-model="adContact.fullname" placeholder="Full name" ng-required="true">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadContactForm.email.$invalid && (hiShoppiePostadContactForm.email.$dirty || submitted) }">
                            <div class="input-group">
                                <label for="email" class="control-label pull-left">Email</label>
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input type="email" class="form-control" id="email" name="email" ng-model="adContact.email" placeholder="example@gmail.com" ng-required="true">
                            </div>
                            <span class="help-block"> <i class="fa fa-lock"></i> This email won't be shared will be kept private</span>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadContactForm.contact.$invalid && (hiShoppiePostadContactForm.contact.$dirty || submitted) }">
                            <div class="input-group">
                                <label for="contact" class="control-label pull-left">Contact(optional)</label>
                            </div>
                            <input type="tel" class="form-control" id="contact" name="contact" ng-model="adContact.contact" placeholder="#">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : hiShoppiePostadForm.address.$invalid && (hiShoppiePostadForm.address.$dirty || submitted)}">
                            <div class="input-group">
                                <label for="address" class="control-label pull-left">Address (optional) </label>
                            </div>
                            <textarea class="form-control" id="address" name="address" ng-model="ad.address" polaceholder="Describe about you item"></textarea>
                        </div>
                        <div class="form-group pull-right">
                            <button class="btn btn-default" ng-click="post_back_3()" style="margin-right: 30px;"> Back </button>
                            <button type="submit" class="btn btn-hishoppie2 pull-right" ng-disabled="hiShoppiePostadContactForm.$invalid"> Post Ad as Guest </button>
                        </div>
                    </div>
                    <div class="col-lg-5" id='photos_ad'>
                        <div class="col-lg-7 col-lg-offset-4">
                            <p class="lead"> Register for <span class="text-success"> FREE </span></p>
                            <ul class="list-unstyled" style="line-height: 2">
                                <li>
                                    <p><a href='#' class='btn btn-hishoppie2 btn-block'> &nbsp; &nbsp; <i class="fa fa-envelope"></i>  &nbsp; Signup with email &nbsp; &nbsp; &nbsp; </a></p></li>
                                <li>
                                    <p><a href='#' class='btn btn-info btn-block'> &nbsp; &nbsp; <i class="fa fa-twitter"></i>  &nbsp; Signup with twitter &nbsp; &nbsp; &nbsp; </a></p></li>
                                <li> <p><a href='#' class='btn btn-primary btn-block '> &nbsp; &nbsp; <i class="fa fa-facebook"></i>  &nbsp; Signup with facebook &nbsp; &nbsp; &nbsp;</a></p>
                                </li>
                            </ul>
                            <br/>
                            <div style="margin-top: 24px;">
                                <p class="lead"> Already have  <span class="text-success">Account ?</span></p>
                                <ul class="list-unstyled" style="line-height: 2">
                                    <li>
                                        <p><a href='#login' class='btn btn-hishoppie btn-block' ng-click="scrollFunction()"> &nbsp; &nbsp; <i class="fa fa-lock"></i>  &nbsp; Login to my account &nbsp; &nbsp; &nbsp;</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>

            </form>
        </div>

        <div class='step5-postingAd' style='display: none;'>
            <div class='row'>
                <div class='col-lg-6 col-lg-offset-3'>
                    <br>
                    <span class='fa fa-check-circle' style='font-size: 74px;color: #37b590;'></span>
                    <h1> Submission Successfull <br></h1><br>
                    <h4 style='background-color: #f0f0f0;padding: 12px;border-radius: 5px;font-size: 21px;color: #37b590;'>
                        Ad-Id <br> A1-14N29215S22G1-12CJ 
                    </h4>
                    <br>
                    <h3 style='color: #37b590;font-size: 19px;'>What next ?</h3>
                    <hr/>
                    <i class='fa fa-check'></i> Your Ad will be reviewed and posted within 9 hours.
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>