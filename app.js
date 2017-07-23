angular.element(document).ready(function() { 
    angular.bootstrap(document.getElementById('top'), ['topImplementation']);
    angular.bootstrap(document.getElementById('inderface-factory'), ['additionInterfaces']);
});

(function() {
	var app = angular.module('topImplementation', []);

	app.controller('ProcessMonitorController', ['$scope', '$http', '$interval', function($scope, $http, $interval) {
		var self = this;
		var interval = 1000;

		$interval(function() {
			$http.get('/os_info.php').success(function(data) {
				self.top = data.topOutput;

				if (data.notices != "")
					self.notices = data.notices.split(";");

			}).error(function (error, status){
		    	console.log(error);
		    	console.log(status); 
		    }); 
		}, interval);
	}]);
})();