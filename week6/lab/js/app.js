//the function wrapper stops us from creating global variables
(function() {
    'use strict';
    angular
        .module('app', ['ngRoute'])
        .config(config);
    
    config.$inject = ['$routeProvider'];
    
    function config($routeProvider) {
        //the route provider tells he browser that when the url ends a certain way,
        //you pull up the coresponding template and controller
      $routeProvider.
        when('/', {
            //For example, when the default page is called, pull up the list 
            //of phones and use the phone list controller
            templateUrl: 'js/phone-list.template.html',
            controller: 'PhoneListController',
            controllerAs: 'vm'
        }).
        //we pass the phone id in so we can view more information about it
        when('/phones/:phoneId', {
            templateUrl: 'js/phone-detail.template.html',
            controller: 'PhoneDetailController',
            controllerAs: 'vm'
        }).
        otherwise({
            redirectTo: '/'
        });
    }
    
})();