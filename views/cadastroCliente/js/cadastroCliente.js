$(document).ready(function(){
    $(document).on("click","#BtnSalvarCliente",function(){
        if( $("#NumCPFCliente").val() && $("#NomeCliente").val() && $("#EmailCliente").val &&
            $("#TelefoneCliente").val() && $("#NumCepCliente").val() && $("#RuaCliente").val &&
            $("#BairroCliente").val() && $("#select_estadoCliente").val() && $("#select_cidadeCliente").val != "" && 
            $("#NumCPFCliente").val() && $("#NomeCliente").val() && $("#EmailCliente").val &&
            $("#TelefoneCliente").val() && $("#NumCepCliente").val() && $("#RuaCliente").val &&
            $("#BairroCliente").val() && $("#select_estadoCliente").val() && $("#select_cidadeCliente").val != " ")
        {
            $.post("clientes/insert/",$("#frmCadCliente").serialize(),function(data){
                if(data == "cpf-fail"){
                    Swal.fire({
                        type: "error",
                        title: "Oops...",
                        html: "<h4>Este CPF já está cadastrado !!</h4>",
                    });
                }else
                {
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
});