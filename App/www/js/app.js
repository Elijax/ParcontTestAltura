// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.services' is found in services.js
// 'starter.controllers' is found in controllers.js
angular.module('starter', ['ionic', 'starter.controllers', 'starter.services', 'starter.directives','ngResource'])

.run(function($ionicPlatform,$rootScope,$ionicPopup) {
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if (window.cordova && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
    }
    if (window.StatusBar) {
      // org.apache.cordova.statusbar required
      StatusBar.styleDefault();
    }

    if(window.Connection) {
      if(navigator.connection.type == Connection.NONE) {
        $ionicPopup.confirm({
            title: "Sin conexión...",
            content: "Por favor verifique la conexión a su red local!"
        })
        .then(function(result) {
            if(!result) {
              ionic.Platform.exit();
            }
        });
      }
    }

  });
})
.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider

  .state("inicio", {
      controller: 'HistoriasCtrl',
      templateUrl: 'templates/tab-inicio.html',
      url: '/inicio'
    })

  .state("inicio.form", {
      controller: 'HistoriasCtrl',
      parent: 'inicio',
      templateUrl: 'templates/tab-form.html',
      url: '/form'
    })
  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/inicio');

});
