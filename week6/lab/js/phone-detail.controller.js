(function() {
    'use strict';
    
    //defining which module and controller we're using
    angular
        .module('app')
        .controller('PhoneDetailController', PhoneDetailController);

    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];
    
    function PhoneDetailController($routeParams, PhonesService) {
        var vm = this;
        
        vm.phone = {};
        var id = $routeParams.phoneId;
        
        activate();
        
        ///////////
        
        function activate() {
            //PhonesService makes an AJAX call to find the phone given the id
            //and the data is returned as a promise
            PhonesService.findPhone(id).then(function(response) {
                vm.phone = response;
            });
        }
    }
}) ();