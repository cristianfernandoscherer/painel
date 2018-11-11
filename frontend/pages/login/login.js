var app = angular.module('pages', []);

app.controller('LoginPage', function($scope, $http) {

	//FUNÇÃO ENVIA FORM -- AUTENTICA USUARIO
	$scope.submit = function() {
		$(".login-error").hide();
		$(".senha-error").hide();
		$(".usario-senha-error").hide();
		$(".instabilidade-error").hide();

		if($scope.login == null || $scope.login == ""){
			$(".login-error").show();
			return false;
		}

		if($scope.senha == null || $scope.senha == ""){
			$(".senha-error").show();
			return false;
		}

		$(".mask-loader").slideDown("slow");
		var codigo = md5($scope.login)+md5($scope.senha);

	    $http({
		  	method: 'GET',
		  	url: 'http://localhost/painel/rest.php/autentica='+codigo,
		}).then(function successCallback(response) {
			$(".mask-loader").hide();
			if(response.status == 200){
				if(response.data == ""){
					$(".usario-senha-error").show();
				}else{
                    window.location.href = ('http://localhost/painel/sessao.php?codigo='+response.data);
				}
		    	
		    }else{
		    	$(".instabilidade-error").show();
		    }
		    

		}, function errorCallback(response) {
		    $(".instabilidade-error").show();
		});
	}
		
});
