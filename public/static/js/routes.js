$(function () {
    // navgation active function
    $('ul li a').on('click', function () {
        $('.navbar').find('.active').removeClass('active');
        $(this).parent().addClass('active');
        $('html, body').scrollTop(0);
    });
    var k = [];
    k = document.URL.split('#/');
    if (k[1].length > 2) {
        $('li#' + k[1]).addClass('active');
        document.title = 'hiShoppie -' + k[1];
    } else {
        $('li#home').addClass('active');
        document.title = 'hiShoppie';
    }

});

hiShoppieApp.config(function ($routeProvider)
{
    $routeProvider
            .when('/', {
                siteTitle: 'hiShoppie',
                templateUrl: 'templates/home.html',
                controller: 'homeController'
            })
            .when('/login', {
                templateUrl: 'templates/login.html',
                controller: 'loginController'
            })
            .when('/signup', {
                templateUrl: 'templates/register.html',
                controller: 'signupController'
            })
            .when('/forgot', {
                templateUrl: 'templates/forgot_password.html',
                controller: 'forgotPassController'
            });
//    $locationProvider.html5Mode(true);
});
