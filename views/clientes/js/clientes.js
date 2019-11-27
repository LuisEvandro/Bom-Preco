$(document).ready(function(){
    
    lista();
    
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
                    </tr>`);
			}
			
		});
		
    }
});