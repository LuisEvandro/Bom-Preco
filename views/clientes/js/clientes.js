$(document).ready(function(){

    $(document).ready(function(){
        
        var header = document.getElementById("group-itens-clientes");
        var btns = header.getElementsByClassName("list-group-item");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        $(document).on("click", ".btn-item-cliente-cadastro", function(){
            $('#item-cliente-cadastro').fadeIn(300);
            //$('#item-cliente-lista').fadeOut(100);
            //$('#item-cliente-cadastro').fadeOut(100);
        });

        // $(document).on("click", ".btn-item-cliente-lista", function(){
        //     $('#item-cliente-cadastro').fadeIn(300);
        //     //$('#item-cliente-lista').fadeOut(100);
        //     //$('#item-cliente-cadastro').fadeOut(100);
        // });

        // $(document).on("click", ".btn-item-cliente-cadastro", function(){
        //     $('#item-cliente-cadastro').fadeIn(300);
        //     //$('#item-cliente-lista').fadeOut(100);
        //     //$('#item-cliente-cadastro').fadeOut(100);
        // });
    });


    $(document).on("click","#BtnSalvarCliente",function(){
        if( $("#NumCPFCliente").val() && $("#NomeCliente").val() && $("#EmailCliente").val &&
            $("#TelefoneCliente").val() && $("#NumCepCliente").val() && $("#RuaCliente").val &&
            $("#BairroCliente").val() && $("#select_estadoCliente").val() && $("#select_cidadeCliente").val != "" && 
            $("#NumCPFCliente").val() && $("#NomeCliente").val() && $("#EmailCliente").val &&
            $("#TelefoneCliente").val() && $("#NumCepCliente").val() && $("#RuaCliente").val &&
            $("#BairroCliente").val() && $("#select_estadoCliente").val() && $("#select_cidadeCliente").val != " ")
        {
            //var frm=$("#frmCadCliente").serialize();
            $.post("clientes/insert/",$("#frmCadCliente").serialize(),function(data){
                if(data == "success"){
                    Swal.fire({
                        type: "success",
                        html: "<h4><strong>Cliente cadastrado com sucesso!</strong></h4>",
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    setTimeout(function(){ 
                        //location.reload(); 
                        lista(); 
                    }, 2500);
                }else{
                    Swal.fire({
                        type: "error",
                        title: "Oops...",
                        html: "<h4>Insira os dados corretamente ! </br></br> Verifique se todos campos estão preenchidos !</h4>",
                    });
                }
            });
        }else{
            Swal.fire({
                type: "error",
                title: "Oops...",
                html: "<h4>Insira os dados corretamente ! </br></br> Verifique se todos campos estão preenchidos !</h4>",
            });
        }
    });

    function lista(){
	
		$.post('clientes/lista/', function(data) {
		  data=$.parseJSON(data);
		 
		//   $("#tabres").find("tr:gt(0)").remove();
		// 	for (var i = 0; i < data.length; i++){
		// 		$('#lsclientes').append('<tr><td>' + data[i].cpf + '</td><td>' + data[i].nome + '</td><td>' + data[i].endereco + '</td><td><button class="del btn btn-xs btn-default" valor="'+data[i].codigo+'" type="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>&nbsp;<button class="edt btn btn-xs btn-default" valor="'+data[i].codigo+'" type="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td></tr>');
		// 	}
			
		});
		
	}
});