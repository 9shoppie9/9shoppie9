var hiShoppieApp = angular.module('hiShoppieApp', ['ngRoute']);

hiShoppieApp.directive('ngCompare', function () {
    return {
        require: 'ngModel',
        link: function (scope, currentEl, attrs, ctrl) {
            var comparefield = document.getElementsByName(attrs.ngCompare)[0]; //getting first element
            compareEl = angular.element(comparefield);

            //current field key up
            currentEl.on('keyup', function () {
                if (compareEl.val() != "") {
                    var isMatch = currentEl.val() === compareEl.val();
                    ctrl.$setValidity('compare', isMatch);
                    scope.$digest();
                }
            });

            //Element to compare field key up
            compareEl.on('keyup', function () {
                if (currentEl.val() != "") {
                    var isMatch = currentEl.val() === compareEl.val();
                    ctrl.$setValidity('compare', isMatch);
                    scope.$digest();
                }
            });
        }
    }
});


hiShoppieApp.controller('signupController', function ($scope, $http) {

    $scope.saveData = function () {
        $scope.submitted = true;
        if ($scope.hiShoppieSignupForm.$valid) {
            var data = $scope.user;
            data._token = $scope.csrf_token;
            console.log(data);
            $http.post('http://192.168.137.86/hishoppie/public/index.php/accesscontrol/securitycheck/insert', data).success(function (response) {
                console.log(response);
            });
        }
    }
    $scope.scrollFunction = function () {
        $('html, body').scrollTop(0);
    }

});

hiShoppieApp.controller('loginController', function ($scope, $http) {

    $scope.checkLogin = function () {
        $scope.submitted = true;
        if ($scope.hiShoppieLoginForm.$valid) {
            var data = $scope.login;
            data._token = $scope.csrf_token;
            $.post('http://localhost/omshoppie/public/index.php/accesscontrol/check_login', data).success(function(response){
                console.log(response);
               if(response.status_code == '1') {
                  window.location = 'http://localhost/omshoppie/public/';
              } 
            });
        }
    }
    $scope.scrollFunction = function () {
        $('html, body').scrollTop(0);
    }

});

hiShoppieApp.controller('forgotPassController', function ($scope, $http) {

    $scope.checkForgotPass = function () {
        $scope.submitted = true;
        if ($scope.hiShoppieForgotpassForm.$valid) {
            var data = $scope.forgotPass;
            console.log(data);
        }
    }
    $scope.scrollFunction = function () {
        $('html, body').scrollTop(0);
    }

});

hiShoppieApp.controller('homeController', function ($scope, $http, limitToFilter) {

    $scope.scrollFunction = function () {
        $('html, body').animate({scrollTop: 505}, 'slow');
    }

    $http.get('http://localhost/omshoppie/public/index.php/json').success(function (data) {
//        $(".item-search").typeahead({
//            highlight: true,
//            hint: true,
//            source: function (query, process) {
//                objects = [];
//                map = {};
////                var data = [{"id": 1, "label": "machin"}, {"id": 2, "label": "truc"}] // Or get your JSON dynamically and load it into this variable
//                $.each(data, function (i, object) {
//                    map[object.value] = object;
//                    objects.push(object.value);
//                    objects.push(object.foo);
//                });
//                process(objects);
//            },
//            updater: function (item) {
//                $('hiddenInputElement').val(map[item].foo);
//                return item;
//            }
//        });
        $(".item-search").typeahead({
            highlight: true,
            hint: true,
            source: data
        });
        
        $(".search-location").typeahead({
            highlight: true,
            hint: true,
            source: data
        });
    }, 'json');

});



