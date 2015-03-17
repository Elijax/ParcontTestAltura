angular.module('starter.controllers', [])

.controller('HistoriasCtrl', function($scope, Historias, Citas, Cuestionarios ,$http , $window,  $timeout, $ionicLoading,$ionicScrollDelegate) {
  // Probador
  $scope.output = "1064106931";  
  //$scope.output = "";

  $scope.updateOutput = function(btn) {
    $scope.output += btn;
  };

  $scope.clear = function() {
    setOutput("");
  };

  setOutput = function(output) {
    $scope.output = output;
  };  

  $scope.refresh = function() {
    $window.location.reload();
  };
  


  $scope.consultarHistoria = function (output) {
    $ionicScrollDelegate.scrollTop();

    $ionicLoading.show({
          template: 'Consultando...'
    });

    if (output==""){
      alert("Para hacer una consulta el campo de texto no puede estar vacío...");
      $ionicLoading.hide();
      $window.location.reload();
    }
    else{
      Citas.getCita(output).then(function(cita) {
        if (cita.data.length == "0" ){
          $scope.showError = true;
          $timeout(function () { 
            $window.location.reload();
          }, 2500);
          $ionicLoading.hide();
        }
        else{
          $ionicLoading.hide();
          var datos= cita.data[0];

          $scope.numeroDocumento = datos.NumeroDocumento;          
          $scope.evento = datos.Evento;
          $scope.fecha = datos.Fecha;

          var today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth()+1; //January is 0!
          var yyyy = today.getFullYear();
          var h = today.getHours();  
          var m = today.getMinutes();
          var ms = today.getMilliseconds(); 

          if(dd<10) {
              dd='0'+dd
          } 

          if(mm<10) {
              mm='0'+mm
          } 

          today = yyyy+'-'+mm+'-'+dd+' '+h+':'+m+':'+ms;    

          // Comparador -> console.log($scope.fecha +" "+ today);
          // Testing -> 954100
          //if ($scope.evento == "930105" && $scope.fecha == today) {
          if ($scope.evento == "954100") {            

            Historias.getHistoria(output).then(function(historia){
              if (historia.data.length == "0" ){

                $scope.showError = true;

                $timeout(function () { 
                  $window.location.reload();
                }, 2500);

              }
              else{
                var datosHistoria= historia.data[0];
                $scope.numeroHistoria = datosHistoria.NumeroHistoria;
                $scope.Edad = datosHistoria.Edad;
                $scope.codigoEntidad = datosHistoria.CodigoEntidad;
                $scope.primerNombre = datosHistoria.PrimerNombre;
                $scope.primerApellido = datosHistoria.PrimerApellido;
                $scope.showData = true;
              }             
            });
          }
          else{
            $scope.showErrorAgenda = true;
            $timeout(function () { 
              $window.location.reload();
            }, 2500);
          };
        };
      })
    }
  }

  $scope.cuestionario = {};

  $scope.sendCuestionario = function (cuestionario) {
    $ionicScrollDelegate.scrollTop();
    $ionicLoading.show({
          template: 'Enviando cuestionario...'
    });    
    $scope.cuestionario.NumeroDocumento = $scope.numeroDocumento;
    $scope.cuestionario.NumeroHistoria = $scope.numeroHistoria;
    $scope.cuestionario.Edad = $scope.numeroDocumento;
    $scope.cuestionario.CodigoEntidad = $scope.codigoEntidad;
    console.log($scope.cuestionario)
    Cuestionarios.save($scope.cuestionario).$promise.then(function (data) {
      if(data.msg){
        $ionicLoading.hide();
        angular.copy({},$scope.cuestionario);
        $scope.showData = false;
        $scope.showSuccessSent = true;
          $timeout(function () { 
            $window.location.reload();
          }, 5000);
          $scope.loading = false;
      }
    },function (error) {
      $ionicLoading.hide();
      alert("Por favor revise que todos los campos hayan sido diligenciados correctamente...");
    })
  };
  
//
  $scope.clearQ1 = function (){
    $scope.cuestionario.cantidadQ1 = undefined;
    $scope.cuestionario.intervaloQ1 = undefined;
  }
  $scope.clearQ2 = function (){
    $scope.cuestionario.cantidadQ2 = undefined;
    $scope.cuestionario.intervaloQ2 = undefined;
  }
  $scope.clearQ3 = function (){
    $scope.cuestionario.cantidadQ3 = undefined;
    $scope.cuestionario.intervaloQ3 = undefined;
  } 
  $scope.clearQ4 = function (){
    $scope.cuestionario.cantidadQ4 = undefined;
    $scope.cuestionario.intervaloQ4 = undefined;
  } 
  $scope.clearQ5 = function (){
    $scope.cuestionario.cantidadQ5 = undefined;
    $scope.cuestionario.intervaloQ5 = undefined;
  } 
  $scope.clearQ6 = function (){
    $scope.cuestionario.cantidadQ6 = undefined;
    $scope.cuestionario.intervaloQ6 = undefined;
  } 
  $scope.clearQ7 = function (){
    $scope.cuestionario.cantidadQ7 = undefined;
    $scope.cuestionario.intervaloQ7 = undefined;
  } 
  $scope.clearQ8 = function (){
    $scope.cuestionario.cantidadQ8 = undefined;
    $scope.cuestionario.intervaloQ8 = undefined;
  } 
  $scope.clearQ9 = function (){
    $scope.cuestionario.cantidadQ9 = undefined;
    $scope.cuestionario.intervaloQ9 = undefined;
  } 
  $scope.clearQ10 = function (){
    $scope.cuestionario.cantidadQ10 = undefined;
    $scope.cuestionario.intervaloQ10 = undefined;
  } 
  $scope.clearQ11 = function (){
    $scope.cuestionario.cantidadQ11 = undefined;
    $scope.cuestionario.intervaloQ11 = undefined;
  } 
  $scope.clearQ12 = function (){
    $scope.cuestionario.cantidadQ12 = undefined;
    $scope.cuestionario.intervaloQ12 = undefined;
  } 
  $scope.clearQ13 = function (){
    $scope.cuestionario.cantidadQ13 = undefined;
    $scope.cuestionario.intervaloQ13 = undefined;
  } 
  $scope.clearQ14 = function (){
    $scope.cuestionario.cantidadQ14 = undefined;
    $scope.cuestionario.intervaloQ14 = undefined;
  }
  $scope.clearQ15 = function (){
    $scope.cuestionario.cantidadQ15 = undefined;
    $scope.cuestionario.intervaloQ15 = undefined;
    $scope.cuestionario.descripcionQ15 = undefined;
  }
  $scope.clearQ16 = function (){
    $scope.cuestionario.cantidadQ16 = undefined;
    $scope.cuestionario.descripcionQ16 = undefined;
  }
  $scope.clearQ17 = function (){
    $scope.cuestionario.descripcionQ17 = undefined;
  } 
  $scope.clearQ18 = function (){
    $scope.cuestionario.descripcionQ18 = undefined;
  }
   $scope.clearQ20 = function (){
    $scope.cuestionario.descripcionQ20 = undefined;
  }

})