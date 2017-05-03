
(function() {
    
    'use strict';
    angular
        .module('app')
        .controller('PhoneListController', PhoneListController);

    PhoneListController.$inject = ['PhonesService'];
    
    function PhoneListController(PhonesService) {
        var vm = this;
        
        vm.phones = [];
        
        activate();
        
        ////////////
        
        function activate() {
            //PhonesService makes an AJAX call to get all the phones
            //and the data is returned as a promise
            PhonesService.getPhones().then(function(response) {
                vm.phones = response;
            });
        }
    }
}) ();