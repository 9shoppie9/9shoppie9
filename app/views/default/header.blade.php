<!DOCTYPE html>
<html lang="en" ng-app="hiShoppieApp">
    <head>
        <title></title>
<link rel="stylesheet" href="http://localhost/omshoppie/public/static/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/omshoppie/public/static/bower_components/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/angularjs/angular.min.js"></script>
<script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/angular-route/angular-route.min.js"></script>
<meta name="_token" ng-init="csrf_token='<?php echo csrf_token(); ?>'">
<script type="text/javascript" src="http://localhost/omshoppie/public/static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/omshoppie/public/static/js/autocomplete.js"></script>
<script type="text/javascript" src="http://localhost/omshoppie/public/static/js/script.js"></script>
<?php if ($hi_id == '0') { ?> 
    <script type="text/javascript" src="http://localhost/omshoppie/public/static/js/routes.js"></script> 
<?php } else { ?>
    <script type="text/javascript" src="http://localhost/omshoppie/public/static/js/routes1.js"></script>
<?php } ?>
<link rel="stylesheet" href="http://localhost/omshoppie/public/static/css/style.css">
    </head>