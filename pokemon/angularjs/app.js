var app = angular.module('pokemon',  ['ngRoute','ngAnimate', 'ui.bootstrap']);

app.config(['$httpProvider', function($httpProvider) {
   $httpProvider.defaults.useXDomain = true;
}]);

app.controller('MainCtrl', function($scope, $http) {
  $scope.Pokemons = {};

  cargarPokemons();
  

  $scope.pokemon = {
    id: null, 
    name: null,
    typeAheadFlag: false,
    readonly: true
  };


  $scope.client = {
    id: null, 
    firstName: null,
    typeAheadFlag: false,
		readonly: true
  };
  $scope.clients = [ {'id': 1, 'firstName': 'Aaron'},
                    {'id': 2, 'firstName': 'Bert'},
                    {'id': 3, 'firstName': 'Cesar'},
                    {'id': 4, 'firstName': 'David'},
                    {'id': 5, 'firstName': 'Elsa'}];
                    
  $scope.selectTypeAhead = function($item)	{
    //typeahead provides us the ID
    $scope.pokemon.id = $item.name;
    //it has been modified by typeahead
    $scope.pokemon.typeAheadFlag = true;
  };
  
  // listener for client.firstName to look if it has been modified 
  // by typeahead or not (since only through typeahead the ID is informed)
  $scope.$watch('pokemon.name', function(newVal, oldVal)	{
		if($scope.pokemon.typeAheadFlag){
			$scope.pokemon.typeAheadFlag = false;
		} else {
		  //if not informed by typeahead we delete the id
		  $scope.pokemon.id = null;
		}
	    
	 });

  function cargarPokemons(){
    var YOUR_URL ="https://pokewebapi.herokuapp.com/Pokemon/Pokemon/getAll";

    $http({
      method: 'GET',
      url: YOUR_URL,
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Headers': 'policy'
      }
    }).then(function(data, status, headers) {
      $scope.result = data;
    }, function(data, status, headers) {
      console.log = "Something went wrong";
    });
  }
});