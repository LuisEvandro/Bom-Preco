$(document).on("click","#BtnSalvarCategoria",function(){
    if($("#NomeCategoria").val() != " " && $("#NomeCategoria").val() != "" && $("#NomeCategoria").val() != null){
        var frm=$("#frmCadCategoria").serialize(); 
        $.post("categoriaCad/cadCategoria",frm).done(function(retorno){
            if(retorno == "success"){
                Swal.fire({
                    type: "success",
                    html: "<h4><strong>Categoria cadastrada com sucesso!</strong></h4>",
                    showConfirmButton: false,
                    timer: 2000,
                });

                setTimeout(function(){ location.reload(); }, 2500);
            }else{
                Swal.fire({
                    type: "error",
                    title: "Oops...",
                    html: "<h4>Insira a categoria corretamente ! </br></br> Verifique se o campo est'a preenchido !</h4>",
                });
            }
        });
    }
    else{
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            html: '<h4>Insira uma categoria !</h4>',
        });
    }
});