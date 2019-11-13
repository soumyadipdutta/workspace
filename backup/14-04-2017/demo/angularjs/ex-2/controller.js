var login = angular.module('loginApp', []);


login.controller('loginController', function($scope, $http){

	$scope.model = {
		username : '',
		password : ''
	}

	$scope.signin = function(){
		$http({
			'method' : 'POST',
			'url' : 'logindata.json'
		}).then(
			function(response){
				$scope.respond = response.data;
				console.log(response.data[0].user);
				for(var i = 0; i<response.data.length; i++){
					if($scope.model.username == response.data[i].user && $scope.model.password == response.data[i].pass){
						//console.log('login successfully');
						$scope.model.username = ' ',
						$scope.model.password = ' ',
						window.location.href = "dashboard.html"
					}else{
						window.location.href = "error.html"
						//console.log('login failed');
					}
				}
			},
			function(error){
				console.log('failed');
			}
		)
	}
});