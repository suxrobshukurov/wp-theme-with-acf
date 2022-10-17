jQuery(document).ready(function($){

	function sortUpdate(){
		
		//перетаскивание элементов мышкой
		$('.all_bookmakers').sortable({
			update: function( event, ui ) {
				var hash = $('.all_bookmakers').sortable('serialize');
				console.log('hash', hash);
				$.ajax({
				  url: "/wp-admin/admin-ajax.php",
				  method: 'post',
				  data: { 
					  action: 'ajax_order', 
					  order: hash 
				  }
				}).done( function (response) { //переменная response = get_bookmakers_list($indicator)
				  
					if( response.error != 'undefined' && response.error ){  //ошибка есть
						  
						console.log(response.error);
							
					} else {
							  
						console.log(response);
						
						$('.all_bookmakers').sortable();
						
					}
		  
				});
			}
		});

		
	}
	
	sortUpdate();
	

	//обновление списка по выбранному рейтингу
	$('#choose_rating').on('change', function(e){
		
		let position = $(this).val();
		
	    $.ajax({
          url: "/wp-admin/admin-ajax.php",
          method: 'post',
          data: { 
              action: 'ajax_rating', // произвольное название ajax запроса
			  value: position //ключ, в которое передается значение let position
          }
      }).done( function (response) { //переменная response = get_bookmakers_list($indicator)
      
        if( response.error != 'undefined' && response.error ){  //ошибка есть
          
		console.log(response.error);
            
        } else {
              
			$('#main .content').html(response);
			//перетаскивание элементов мышкой при обновлении списка
			sortUpdate();
        
        }
      
	  });
	
	});



	//обновление показателя одной конторы
	$(document).on('change', '.bookmaker_item input', function(e){  //отслеживание изменения DOM-дерева

		let that = $(this);
		let parameter = $(this).val();
		let type =  $('#choose_rating').val();
		let id = $(this).parent().parent().data('id');
		
		$.ajax({
          url: "/wp-admin/admin-ajax.php",
          method: 'post',
          data: { 
              action: 'ajax_renew', // произвольное название ajax запроса
			  parameter_value: parameter, //ключ, в которое передается значение let parameter
			  type_value: type, //ключ, в которое передается значение let type
			  id_value: id //ключ, в которое передается значение let id
          }
      }).done( function (response) { 
      
        if( response.error != 'undefined' && response.error ){  //ошибка есть
          
			console.log(response.error);
			that.addClass('error');
            
        } else {
              
			that.parent().addClass('success');
        
        }
      
	  });
		
	});

});







