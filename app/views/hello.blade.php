<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>hiShoppie</title>
        <style>
            @import url(//fonts.googleapis.com/css?family=Lato:700);

            body {
                margin:0;
                font-family:'Lato', sans-serif;
                text-align:center;
                color: #999;
            }
            h1.main-logo {
                color: #2a6496;
                font-size:84px;
                text-shadow: 0px 1px 1px #000;
            }
            i#globe{
                font-size:64px
            }
            @media(max-width : 968px) {
                h1.main-logo {
                    font-size:74px;
                }  
                i#globe{
                    font-size:54px
                }
            }            
            @media(max-width : 768px) {
                h1.main-logo {
                    font-size:54px;
                }     
                i#globe{
                    font-size:44px
                }
            }
        </style>
        <link rel="stylesheet" href="../static/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../static/bower_components/font-awesome/css/font-awesome.min.css">

    </head>
    <body>
        <!--        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="http://hishoppie.com" class="navbar-brand"  id="scrollTop">hi<i class="fa fa-dollar"></i>h<i class="fa fa-globe"></i>ppie</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#" id="scrollTop"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> About</a></li>
                                <li><a href="#"><i class="fa fa-lock"></i> Sign-in</a></li>
                            </ul>
                        </div>/.nav-collapse 
                    </div>
                </nav>-->
        <div class="container">
            <div class="row" style="margin-top:20%;">
                <div class="col-xs-12">
                    <h1 class="main-logo">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <br>
                        hi<b><i class="fa fa-usd"></i></b>h<i class="fa fa-globe" id="globe"></i>ppie
                    </h1>
                    <p class="well-sm"> An Interactive interface between buyer and seller. </p>
                    <br>
                    <br>
                    <button class="btn btn-primary btn-large" style="font-size:24px;padding: 19px 18px;">  Create free AD now </button>
                </div>
            </div>
        </div>
        <div ng-view>

        </div>
        <div id="footer" class="container-fluid">
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <p class="well-sm"><b> Copyrights @ hiShoppie 2014</b></p>
            </nav>
        </div>
    </body>
</html>
