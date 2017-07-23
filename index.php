<!DOCTYPE>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.min.js"></script>
	<script type="text/javascript" src="interface_api.js"></script>
	<script type="text/javascript" src="app.js"></script>
  </head>
  <body class="container" ng-app="CombineModule">
  	<div id="top" ng-app="topImplementation" ng-controller="ProcessMonitorController as procMonitor">
	  	<div ng-repeat="notice in procMonitor.notices">
	    	<p class="notice" ng-show="notice">{{ notice }}</p>
	    </div>
	    <pre class="top-info" ng-show="procMonitor.top"><span>{{ procMonitor.top }}</span></pre>
    </div>
    <div id="inderface-factory" ng-app="additionInterfaces">
		<a href="#form">test create form</a>
		<a href="#par/created paragraph">test create paragraph</a>
		<div ng-view></div>
    </div>
  </body>
</html>