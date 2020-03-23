$(document).ready(function(){
    	$(".quantidade").change(function(e){		
		if($(this).val()!=''){
			
			var preco=$(this).attr('data-preco');
			var quantidade=$(this).val();
			var subtotal = preco*quantidade;
			var id = $(this).attr('data-id');
			//var total = parseFloat($('.total').attr('data-total')) ;
			total = 0;				
			$(this).parentsUntil('.produto').find('.subtotal').text('Subtotal: '+subtotal);
			$(this).parentsUntil('.produto').find('.subtotal').attr('data-total',subtotal);
			$(this).parentsUntil('.produto').find('.eliminar').attr('data-subtotal',subtotal);
			/*$('.subtotal').each(function(){
				total = total +  parseFloat($(this).attr('data-total'));			    
			});*/
			
			$.post('js/modificarDados.php',{
					Id:id,
					Preco:preco,
					Quantidade:quantidade
				},function(e){
						
					$('.total').text(e);
					$('.total2').text(e);
					$('.total').attr('data-total',e);	
				});		
			
		}
	});
    $(".eliminar").click(function(e){
    	e.preventDefault();    	
		var id=$(this).attr('data-id');
		var total = parseFloat($('.total').attr('data-total'));
		var subtotal = parseFloat($(this).attr('data-subtotal'));
		$(this).parentsUntil('.produto').remove();
		total = total - subtotal;
		$('.total').text(total);
		$('.total').attr('data-total',total);
		$('.total2').text(total);
		$.post('js/eliminar.php',{
			Id:id
		},function(a){			
			if(a=='0'){
				location.href="./carrito.php";
			}
		});
	});
	$("#Sim").click(function(e){
    	e.preventDefault();    	
		if($('#telefone').val().length == 9){
			var pos = 1;
			$('.test').each(function(){
					if($(this).val().length == 0){
						pos = -1;
					}		    
			});
			if (pos == 1) {
				
				$.post('js/inserirPedido.php',{
					Nome:$('#nome').val(),
					Telefone: $('#telefone').val(),
					Endereco:$('#endereco').val(),
					Observacao:$('.obs').val()
				},function(a){	

					if(a=='1'){
						location.href="./index.php?pedidolisto=1#carousel";

					}
					else{
						alert(a);
					}
				});
			}
			else{
				alert("O nome, a direção e o telefone, são campos que deve especificar.");
			}

		}
		else{
			alert("O número de telefone não tem 9 dígitos");
		}
	});
	$("#aceitaruser").click(function(e){
    	e.preventDefault();    	
		if($('#usuario').val().length > 0 && $('#senha').val().length > 0){
			$.post('js/admin.php',{
					User:$('#usuario').val(),
					Senha: $('#senha').val()
				},function(a){

					if(a=='1'){

						location.href="./index.php";
					}
					else{
						alert("Usuário ou senha não válidos");
					}
				});

		}
		else{
			alert("Usuário ou senha não válidos");
		}
	});
	$(".btnpedido").click(function(e){
    	e.preventDefault(); 
    	$(this).addClass('disabled');
    	$(this).text('Sim');
    	$(this).addClass('btn-dark');
    	var aux = $(this).data('id');
    	$('.tdpronto').each(function(){

				if(aux == $(this).data('id'))
				{
					$(this).text('Sim');
				}	    
			});
    	$.post('js/pedidopronto.php',{
					Id:$(this).data('id')					
				},function(a){

					
				});	
	});
	$("#datepedido").change(function(e){
    	e.preventDefault();
    	var date = $(this).val().split('-'); 
    	var data = date[2]+'/'+date[1]+'/'+date[0];
    	$.post('./pedido.php',{
					Data:data,
					Data2: $(this).val()
				},function(){
					location.href="./pedido.php?data="+data+"#tablepedido";					
				});
	});
	$("#fecharsessao").click(function(e){
    	e.preventDefault();
    	$.post('js/fecharsessao.php',{

		},function(){
			location.href="./index.php";					
		});
	});
	$("#telefone").keypress(function(tecla) {
        if((tecla.charCode >= 48 && tecla.charCode <= 57) || tecla.charCode == 8 || tecla.charCode == 0) {
 			return true;
        }
        else{
        	return false;
        }
    });
    $("#nome").keypress(function(tecla) {
        if((tecla.charCode >= 48 && tecla.charCode <= 57)) {
 			return false;
        }
        else{
        	return true;
        }
    });
});