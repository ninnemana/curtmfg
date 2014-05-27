function getNumbers(callback) {

		$.ajax({
			url: 'script.php',
			type: 'GET',
			dataType: 'json',
			success: function(data, status, xhr){
				callback(data);
			},
			error: function(xhr, status, err){
				callback();
			}
		});
}

$(document).ready(function($) {

	$(document).on('click', 'button',function(){
		getNumbers(function(numbers){
			if(numbers === undefined){
				alert('Failed to get primes.');
				return;
			}

			var cnt = 10;
			$.each(numbers, function(i, num) {
				if(cnt === 10){
					$('#results table tbody').append('<tr><td>'+num+'</td></tr>');
					cnt = 0;
				}else{
					$('#results table tbody tr:last-child').append('<td>'+num+'</td>');
					cnt++;
				}
			});
		});
	});

});