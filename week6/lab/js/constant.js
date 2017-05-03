
(function() {
    'use strict';
    
    //pulling the data for the list from the phones.json file
    angular
        .module('app')
        .constant('REQUEST', {
            'Phones' : './data/phones.json'
    });
})();