var myMDLApp = angular.module("myMDLApp", ['ui.router', 'ui.router.stateHelper', 'ngCookies', 'ui.bootstrap', 'ngTable']);

myMDLApp.config(['stateHelperProvider', '$urlRouterProvider', function(stateHelperProvider, $urlRouterProvider){
  // $qProvider.errorOnUnhandledRejections(false);
  stateHelperProvider
  .state({
    name: 'administrador',
    url: '/administrador',
    templateUrl: 'app/MDL/administrador/administrador.html',
    children: [
      {
        name: 'gestion-productos',
        url: '/productos',
        templateUrl: 'app/MDL/administrador/gestionProductos/listarProductos.html',
        controller: 'gestorProductosCtrl as GPCtrl'
      },
      {
        name: 'gestionar-peticiones',
        url: '/peticiones',
        templateUrl: 'app/MDL/administrador/gestionPeticiones/listarPeticiones.html',
        controller: 'gestorPeticionesCtrl as GPeCtrl',
  //     },
  //     {
  //       name: 'registrar-alumno',
  //       url: '/registrarAlumno',
  //       templateUrl: 'app/SGA/administrador/gestionAlumnos/registrarAlumnos.html',
  //       controller: 'gestorAlumnosCtrl as GACtrl',
  //     },
  //     {
  //       name: 'gestionar-docente',
  //       url: '/gestionDocente',
  //       templateUrl: 'app/SGA/administrador/gestionDocentes/gestorDocentes.html',
  //       controller: 'gestorDocentesCtrl as GDCtrl',
  //     },
  //     {
  //       name: 'gestionar-curso',
  //       url: '/gestionCurso',
  //       templateUrl: 'app/SGA/administrador/gestionCursos/gestorCursos.html',
  //       controller: 'gestorCursosCtrl as GCCtrl',
  //     },
  //     {
  //       name: 'gestionar-asignacion',
  //       url: '/gestionAsignacion',
  //       templateUrl: 'app/SGA/administrador/gestionAsignaciones/gestorAsignaciones.html',
  //       controller: 'gestorAsignacionesCtrl as GAsCtrl'
  //     },
  //     {
  //       name: 'gestionar-usuario',
  //       url: '/gestionUsuario',
  //       templateUrl: 'app/SGA/administrador/gestionUsuarios/gestorUsuarios.html',
  //       controller: 'gestorUsuariosCtrl as GUCtrl'
  //     },
  //     {
  //       name: 'gestionar-grado',
  //       url: '/gestionGrado',
  //       templateUrl: 'app/SGA/administrador/gestionGrados/gestorGrados.html',
  //       controller: 'gestorGradosCtrl as GGCtrl'
  //     },
  //     {
  //       name: 'gestionar-seccion',
  //       url: '/gestionSeccion',
  //       templateUrl: 'app/SGA/administrador/gestionSecciones/gestorSecciones.html',
  //       controller: 'gestorSeccionesCtrl as GSCtrl'
      }
    ]
  // },
  // {
  //   name: 'alumno',
  //   url: '/alumno',
  //   templateUrl: 'app/SGA/alumno/alumno.html',
  //   children: [
  //     {
  //       name: 'inicioAlumno',
  //       url: '/inicioAlumno',
  //       templateUrl: 'app/SGA/alumno/principalAlumno.html',
  //       controller: 'alumnoCtrl as AlumCtrl'
  //     }
  //   ]
  }, { keepOriginalNames: true })
  $urlRouterProvider.otherwise("/administrador");
}]);

myMDLApp.controller("MDLController", ['$scope', '$state', function($scope, $state){
  var ctrl = this;

  ctrl.irProductos = function () {
    $state.go('gestion-productos')
  }
  ctrl.irPeticiones = function () {
    $state.go('gestion-peticiones')
  }

  ctrl.init = function() {
    // $state.go('gestion-productos')
  }

  ctrl.init();
}]);