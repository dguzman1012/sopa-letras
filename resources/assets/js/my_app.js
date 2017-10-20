/****
* MAIN APLICATION
*/

$(document).ready(function($){

	var token = document.head.querySelector('meta[name="csrf-token"]');
	$( "#calcular" ).click(function() {
		var texto = $('#entrada').val();
		$.post( "/calcular", { sopas: texto, _token: token.content })
		.done(function( data ) {
			var response_message = '<ul class="horizontal-bars">';
			$.each(data, function( index, value ) {
			  
			  response_message = response_message + '<li>'+
                                  '<div class="title">'+
                                    value
                                  '</div>'+
                                '</li>';
			});                     
			var response_message = response_message + '</ul>';
			$('#response').html(response_message);
		})
		.fail(function(error) {
			var error_message = '<div class="alert alert-danger" role="alert">'+
						            error.responseJSON.errors.sopas[0]+
        						'</div>';
        	$('#response').html(error_message);
		});
	});

	$('#entrada').on('input', function(evt) {
	  $(this).val(function (_, val) {
	    return val.toUpperCase();
	  });
	});
});