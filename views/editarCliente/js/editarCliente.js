$(document).ready(function(){
    
    // Save Edit
    $(document).on("click","#BtnSalvarEditCliente",function(){
        if( $("#numCodeHidden").val() == "" ||  $("#numCodeHidden").val() == " " ||
            $("#NumCPFClienteEdt").val() == "" || $("#NumCPFClienteEdt").val() == " " ||
            $("#NomeClienteEdt").val() == "" || $("#NomeClienteEdt").val() == " " || 
            $("#RuaClienteEdt").val() == "" || $("#RuaClienteEdt").val() == " " ||
            $("#EmailClienteEdt").val() == "" || $("#EmailClienteEdt").val() == " " || 
            $("#BairroClienteEdt").val() == "" || $("#BairroClienteEdt").val() == " " ||
            $("#TelefoneClienteEdt").val() == "" || $("#TelefoneClienteEdt").val() == " " ||  
            $("#select_estadoClienteEdt").val() == "" || $("#select_estadoClienteEdt").val() == " " ||
            $("#NumCepClienteEdt").val() == "" || $("#NumCepClienteEdt").val() == " " || 
            $("#select_cidadeClienteEdt").val() == "" || $("#select_cidadeClienteEdt").val() == " " || 
            $("#NumCasaClienteEdt").val() == "" || $("#NumCasaClienteEdt").val() == " ")
            {
                Swal.fire({
                    type: "error",
                    title: "Oops...",
                    html: "<h4>Verifique se os campos estão preenchidos corretamente !</h4>",
                });
        }else{
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
        }
    });

    // Delete
    $(document).on("click", ".delete-cliente", function(){
		$.post("clientes/del/",{cod: $(this).attr("valor") },function(data){
			lista();
		});
    });

});