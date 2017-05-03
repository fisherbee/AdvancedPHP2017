
(function() {
    'use strict';
    angular
        .module('app')
        .factory('PhonesService', PhonesService);

    //$http lets us make ajax calls with built-in promises
    //request tells us where the data we need is located
    PhonesService.$inject = ['$http', 'REQUEST'];
    
    //the service sets up the ability to retrieve the data for the view page
    function PhonesService($http, REQUEST) {
        var url = REQUEST.Phones;
        
        //service defines what the functions the service offers
        var service = {
            'getPhones': getPhones,
            'findPhone': findPhone
        };
        return service;
        
        //////////////
        
        
        function getPhones() {
            //finds the url for the phones, then returns whether or not it succeeded
            return $http.get(url)
                    .then(getPhonesComplete, getPhonesFailed);
            
            function getPhonesComplete(response) {
                return response.data;
            }
            
            function getPhonesFailed(error) {
                return [];
            }
        }
        
        //gets a single phone with the ID provided
        function findPhone(id) {
            
            
            return getPhones()
                .then(function(data) {
                    return findPhoneComplete(data);;
            });
            
            function findPhoneComplete(data) {
                var results = {};
                
                //loops throughthe array of phones and matches each phone id
                //with the one we're looking for
                angular.forEach(data, function (value, key) {
                    if (!results.length) {
                        if(value.hasOwnProperty('id') && value.id === id) {
                            results = angular.copy(value);
                        }
                    }
                }, results);
                
                return results;
            }
        }
    }
    
}) ();