var app = angular.module('app', ['ngRoute']);
 
//definindo as rotas
app.config(function ($routeProvider, $locationProvider) {
 
    // remove o # da url, padrão
    $locationProvider.html5Mode(true);
 
    $routeProvider.when('/', { templateUrl: '/Views/lancamentos.html' });
 
    $routeProvider.when('/index.html', { templateUrl: '/Views/home.html' });
 
    $routeProvider.when('/home', { templateUrl: '/Views/lancamentos.html'});
 
    $routeProvider.when('/tp-lancamento', { templateUrl: '/Views/tp-lancamento.html'});
 
});