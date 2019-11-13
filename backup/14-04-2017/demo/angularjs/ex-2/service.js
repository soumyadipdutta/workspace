login.factory('loginService', function(){
	$scope.user={
		'username' : '',
		'password' : ''
	}
	$scope.signin = function(){
		$http({
			'method' : 'POST',
			'url' : 'logindata.json'
		}).then(function(response){
		$scope.responsedata = response.data;
		
		console.log(response.data);
		//console.log(response.data[1]);


		for(var i=0; i<response.data.length; i++){
			if(($scope.user.username == response.data[i].user) && ($scope.user.password == response.data[i].pass)){
				console.log('login successfull');
				$scope.user.username = '';
				$scope.user.password = '';
				window.location.href= "dashboard.html"
			}else{
				console.log('login failed');
			}
		}

			
		},function(error){
			//console.log('login failed');
		})
	}
});