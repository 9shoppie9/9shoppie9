<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../../static/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../static/bower_components/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="../../static/bower_components/jquery/dist/jquery.min.js"></script>
        <style>
            input[type="search"] , #search{
                color: rgb(255, 255, 255);
                background: rgba(0, 0, 0, 0);
                font-size: 60px;
                font-weight: 300;
                text-align: center;
                border: 0px;
                outline: none;
            }
        </style>
        <script>
            $(document).ready(function () {
                $('input[type="search"]').focus();
            });
        </script>
    </head>
    <body style="background: rgba(0,0,0,0.6);">
        <div class="container" style="margin-top:20%;">
            <div class="row">    
                <div class="col-xs-12 text-center">
                    <form class="form-inline"> 
                        <div class="form-group">
                            <div class="input-group input-group-lg"> 
                                <input type="search" id="search" placeholder="Search term...">
                            </div>
                            <div class="input-group input-group-lg">
                                <button class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-search" style="font-size:25px;"></span> <span style="font-size:30px;">Search</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>