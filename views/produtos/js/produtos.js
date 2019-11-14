$(document).ready(function(){
	lista();
	listaCarrinho();
		
	function lista(){
	
		$.post('produtos/lista/', function(data) {
            data=JSON.parse(data);
            
            for (var i = 0; i < data.length; i++){
                $('#list-prod').append(`
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="thumbnail produtos-style-card">
                            <!-- <img src="..." alt="..."> -->
                            <div class="caption">
                                <input type="hidden" value="` + data[i].codigo + ` " />
                                <p class="produtos-name-card">` + data[i].descricao + `</p>
                                <p class="produtos-valor-card">R$ ` + data[i].valor + `</p>
                                <button type="button" class="btn btn-success addCarrinho" role="button" valor="`+data[i].codigo+`">Comprar</button>
                            </div>
                        </div>
                    </div>
                `);
            }
		});
	}

	$(document).on("click",".addCarrinho",function(){
		var pro=$(this).attr("valor");
		$.post('produtos/addCarrinho/',{ codproduto: pro }).done(function(data) {
			listaCarrinho();			  
        });
	});

	$(document).on("click",".rmCarrinho",function(){
		var pro=$(this).attr("valor");
		$.post('produtos/rmCarrinho/',{ codproduto: pro }).done(function(data) {
			listaCarrinho();			  
		  });
	});

	function listaCarrinho(){
        $.post('produtos/listaCarrinho/', function(data) {
            
            try{
                data=JSON.parse(data);		
                
                for (var i = 0; i < data.length; i++){
                    for (var i = 0; i < data.length; i++){
                        $('#list-cart').append(`
                            <div class="col-sm-6 col-md-4 col-xs-12">
                                <div class="thumbnail produtos-style-card">
                                    <!-- <img src="..." alt="..."> -->
                                    <div class="caption">
                                        <input type="hidden" value="` + data[i].codigo + ` " />
                                        <p class="produtos-name-card">` + data[i].descricao + `</p>
                                        <p class="produtos-valor-card">R$ ` + data[i].valor + `</p>
                                        <button type="button" class="btn btn-success rmCarrinho" role="button" valor="'+data[i].codigo+'">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        `);
                    }
                }
            }
            catch(ee){

            }  
        });
    }
});