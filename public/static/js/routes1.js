
hiShoppieApp.config(function ($routeProvider)
{
    $routeProvider
            .when('/', {
                siteTitle: 'hiShoppie',
                templateUrl: 'templates/home.html',
                controller: 'homeController'
            })
                    .otherwise({
        redirectTo: '/'
    });
//    $locationProvider.html5Mode(true);
});
