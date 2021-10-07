
<html>
<head>
	<title>Programming activty #1 </title>
</head>
<body>
	
<div 

	<h1> Programming activty #1 </h1>

	<p> Enter your Name: <input type="text" ng-model="address"></p>
	<p> Your address is: <spam ng-bind="address"></spam></p>

	<p> Enter your address: <input type="text" ng-model="address"></p>
	<p> Your Senior high School is: <spam ng-bind="shs"></spam></p>

	<p> Enter your Course: <input type="text" ng-model="Course"></p>
	<p> Your Course is: <spam ng-bind="Course"></spam></p>

	<p><b>list of food:</b></p>
	<ol>


		<li ng-repeat=" list of food">
	 {"food= [{fruit:'pizza', description:'New'},
	{fruit:'apple',color:'red', description: 'medium'},
	{fruit:'grapes',color:'violet', description: 'small'},
	{fruit:'banana',color:'yellow', description: 'small'},
	{fruit:'watermellon',color:'green', description: 'big'},
	{fruit:'ponkan',color:'orange ', description: 'big'},
	{fruit:'melon',color:'peach ', description: 'big'},
	{fruit:'chico',color:'brown', description: 'small'},
	{fruit:'strawbey',color:'pink', description: 'small'},
	{fruit:'indian mango',color:'green', description: 'small'},
	{fruit:'cherry',color:'reed', description: 'small'},]">

		</li>
	</ol>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1,3,14/angular.min.js"></script>



</body>
</html>
