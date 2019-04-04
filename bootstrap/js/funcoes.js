$( document ).ready(function() {

	$("#telefone").mask('+00 (00) 00000-0000');

	$("#nome").focusout(function(){

		var tam = $("#nome").val().length;

		

		if(tam >= 4){
			
			$(this).removeClass("is-invalid");
			$(this).addClass("is-valid");

		}else{

			$(this).addClass("is-invalid");

		}

	});

	$("#email").focusout(function(){	

		usuario = document.getElementById("email").value.substring(0, document.getElementById("email").value.indexOf("@"));
		dominio = document.getElementById("email").value.substring(document.getElementById("email").value.indexOf("@")+ 1, document.getElementById("email").value.length);
		 
		if ((usuario.length >=1) &&
		    (dominio.length >=3) && 
		    (usuario.search("@")==-1) && 
		    (dominio.search("@")==-1) &&
		    (usuario.search(" ")==-1) && 
		    (dominio.search(" ")==-1) &&
		    (dominio.search(".")!=-1) &&      
		    (dominio.indexOf(".") >=1)&& 
		    (dominio.lastIndexOf(".") < dominio.length - 1)) {

			$(this).removeClass("is-invalid");
			$(this).addClass("is-valid");

		}

		else{

			$(this).addClass("is-invalid");

		}

	});

});

function cadastrar(){


	$.ajax({

		method: "post",
		url: "../Actions/cadastrar.action.php",
		data: $("#form").serialize(),
			success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },

	});

}
