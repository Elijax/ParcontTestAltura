angular.module('starter.services', [])

.factory('Historias', function($http) {

    var urlService = 'http://192.168.1.1/restangularjslaravel/public/historias/';
    var obj = {};

    obj.getHistoria =function(output){
        return $http.get(urlService+output);
    }
    return obj;
})

.factory('Citas', function($http) {

    var urlService = 'http://192.168.1.1/restangularjslaravel/public/citas/';
    var obj = {};

    obj.getCita =function(output){
        return $http.get(urlService+output);
    }
    return obj;
})

.factory('Cuestionarios', function($resource) {

  var url= 'http://192.168.1.1/restangularjslaravel/public/cuestionarios/'

  return $resource(url);

});