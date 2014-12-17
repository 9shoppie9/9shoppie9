var pvPostApp = angular.module('pvPostApp', []);

pvPostApp.controller('postController', function ($scope, $http) {
//   $http.get('http://localhost/omshoppie/public/index.php/mainCategories').success(function(response) {
//      $scope.categories = response.categories; 
//   }); 
//   
    $scope.post1 = function () {
        var cat = $('select.step1_Categories').val();
        $('.step1-postingAd').hide();
        $('.step2-postingAd').show();
        $('li#step2').addClass('active');
        $('span#span_step1').html('<i class="fa fa-check"></i>');
        $http.get('http://localhost/omshoppie/public/index.php/subCategories/' + cat).success(function (response) {

            $scope.subCategory = response.subCategories;
        });

    }

    $scope.post_back = function () {
        $('.step1-postingAd').show();
        $('.step2-postingAd').hide();
        $('li#step2').removeClass('active');
        $('span#span_step1').html('1');
    }

    $scope.post2 = function () {
        $('.step2-postingAd').hide();
        $('.step3-postingAd').show();
        $('li#step3').addClass('active');
        $('span#span_step2').html('<i class="fa fa-check"></i>');
    }

    $scope.post_back_2 = function () {
        $('.step2-postingAd').show();
        $('.step3-postingAd').hide();
        $('li#step3').removeClass('active');
        $('span#span_step2').html('2');
    }

    $scope.post3 = function () {
        $scope.submitted = true;
        if ($scope.hiShoppiePostadForm.$valid) {
            var data = $scope.ad;
            console.log(data);
            $('.step3-postingAd').hide();
            $('.step4-postingAd').show();
            $('li#step4').addClass('active');
            $('span#span_step3').html('<i class="fa fa-check"></i>');
        }
    }

    $scope.post_back_3 = function () {
        $('.step4-postingAd').hide();
        $('.step3-postingAd').show();
        $('li#step4').removeClass('active');
        $('span#span_step3').html('3');
    }

    $scope.postadConfirm = function () {
        $scope.submitted = true;
        if ($scope.hiShoppiePostadForm.$valid) {
            var data = $scope.ad;
            console.log(data);
            $('.step4-postingAd').hide();
            $('.step5-postingAd').show();
            $('span#span_step4').html('<i class="fa fa-check"></i>');
        }
    }

});
