$(document).ready(() => {	
	let name = $('#phonebook-form #name');
	let number = $('#phonebook-form #number');

	name.on('input propertychange', () => {
		setTimeout(() => {		
			var validatedName = $.trim(name.val());
			
	    	if (validatedName !== '') {
	    		$('#name-help-block').remove();
	    		 name.parent().removeClass('has-error');
	    	}
		}, 0);
	});

	number.on('input propertychange', () => {
		setTimeout(() => {		
			var validatedNumber = $.trim(number.val());
			
	    	if (validatedNumber !== '') {
	    		$('#number-help-block').remove();
	    		 number.parent().removeClass('has-error');
	    	}
		}, 0);
	});
	
	$('#phonebook-form').submit((event) => {
		$('#name-help-block').remove();
        $('#number-help-block').remove();

		var validatedName = $.trim(name.val());
		var validatedNumber = $.trim(number.val());

        if (validatedName === '') {
            name.parent().append($('<span id="name-help-block" class="help-block">Please provide name.</span>'));
            name.parent().addClass('has-error');
        }

        if (validatedNumber === '') {
            number.parent().append($('<span id="number-help-block" class="help-block">Please provide number.</span>'));
            number.parent().addClass('has-error');
        }        
		
		if (validatedName !== '' && validatedNumber !== ''){
			return true;
		} else {
			event.preventDefault();
		}
	});
});