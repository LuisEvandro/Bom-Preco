$(document).ready(function(){

    // $.post("ListaCategorias.php",{}).done(function(dados){
    //     $("#select_CategoriaProduto").html(dados);
    // });

    $(document).on("click","#BtnSalvarProduto",function(){
        if($("#NomeProduto").val() && $("#ValorProduto").val() && $("#select_CategoriaProduto").val != ""){
            var frm=$("#frmCadProduto").serialize(); 
            $.post("produtos/cadProduto",frm).done(function(retorno){
                if(retorno == "success"){
                    Swal.fire({
                        type: "success",
                        html: "<h4><strong>Produto cadastrado com sucesso!</strong></h4>",
                        showConfirmButton: false,
                        timer: 2000,
                    });

                    setTimeout(function(){ location.reload(); }, 2500);
                }else if(retorno == "fail"){
                    Swal.fire({
                        type: "error",
                        title: "Oops...",
                        html: "<h4>Insira o produto corretamente ! </br></br> Verifique se todos campos estão preenchidos !</h4>",
                    });
                }
            });
        }else{
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                html: '<h4>Insira o produto corretamente ! </br></br> Verifique se todos campos estão preenchidos !</h4>',
            });
        }
    });

});