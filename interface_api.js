(function() {
	var app = angular.module('additionInterfaces', ['ngRoute']);

	app.controller('ParCreateController', ['$scope', '$routeParams', function($scope, $routeParams) {
		$scope.paragraph = $routeParams.string;
	}]);

	app.config(function($routeProvider) {
	  $routeProvider
	  	.when('/form', {
	      templateUrl: 'templates/form.html'
	    })
	    .when('/par/:string', {
	      controller: 'ParCreateController',
	      templateUrl: 'templates/par.html'
	    })
	    .otherwise({
	      redirectTo: '/'
	    });
	});
})();
