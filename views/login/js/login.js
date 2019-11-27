$(document).ready(function(){
	$("#btn-Login").click(function(e){
		e.preventDefault();
		$.post("login/logar/",$("#frmLogin").serialize(),function(data){
			if(data=="logado"){
                Swal.fire({
                    type: "success",
                    html: "<h4><strong>Logado com sucesso!</strong></h4>",
                    showConfirmButton: false,
                    timer: 2000,
                });
                setTimeout(function(){
                    window.location='/BomPreco/';
                }, 2100);
			}
			else{
				Swal.fire({
                    type: "error",
                    title: "Oops...",
                    html: "<h4>Insira os dados corretamente ! </br></br> Verifique se todos campos estão preenchidos !</h4>",
                });
			}
		});
	});
});