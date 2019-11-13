$(document).ready(function(){

    $(document).ready(function(){

        lista();
        
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
                        location.reload();
                        lista(); 
                    }, 2200);
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
		 
		    $("#tab-cliente").find("tr:gt(0)").remove();
                for (var i = 0; i < data.length; i++){
                    $('#tab-cliente-list').append(`
                    <tr>
                        <td>` + data[i].nome + `</td>
                        <td>` + data[i].cpf + `</td>
                        <td>` + data[i].email + `</td>
                        <td>
                            <button type="button" class="delete-cliente btn btn-danger" valor="`+data[i].codigo+`">
                                deletar
                            </button>
                    
                            <button type="button" class="editar-cliente btn btn-primary" valor="`+data[i].codigo+`">
                                editar
                            </button>
                        </td>
                    </tr>`);
			}
			
		});
		
    }

    // Delete
    $(document).on("click", ".delete-cliente", function(){
		$.post("clientes/del/",{cod: $(this).attr("valor") },function(data){
			lista();
		});
    });
    
    // editar

    $(document).on("click",".editar-cliente",function(){
        $.post("clientes/loadData/",{cod: $(this).attr("valor") },function(data){
			data=$.parseJSON(data);
            
            $("#numCodeHidden").val(data[0].codigo);
            $("#NumCPFClienteEdt").val(data[0].cpf);
            $("#NomeClienteEdt").val(data[0].nome);
            $("#EmailClienteEdt").val(data[0].email);
            $("#TelefoneClienteEdt").val(data[0].telefone);
            $("#NumCepClienteEdt").val(data[0].cep);
            $("#RuaClienteEdt").val(data[0].rua);
            $("#BairroClienteEdt").val(data[0].bairro);
            $("#select_estadoClienteEdt").val(data[0].estado);
            $("#select_cidadeClienteEdt").val(data[0].cidade);
            $("#NumCasaClienteEdt").val(data[0].numeroCasa);
        });
    });

    $(document).on("click","#BtnSalvarEditCliente",function(){
        $.post("clientes/save/",$("#frmEditCliente").serialize(),function(data){
            if(data == "success"){
                Swal.fire({
                    type: "success",
                    html: "<h4><strong>Cliente atualizado com sucesso!</strong></h4>",
                    showConfirmButton: false,
                    timer: 2000,
                });
                setTimeout(function(){ 
                    location.reload();
                    lista(); 
                }, 2200);
            }else{
                Swal.fire({
                    type: "error",
                    title: "Oops...",
                    html: "<h4>Verifique se os campos estão preenchidos corretamente !</h4>",
                });
            }
        });
    });
});