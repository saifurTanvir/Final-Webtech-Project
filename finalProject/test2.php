<div id="button-container"></div>

// event is added for the parent of #submit-button
document.querySelector("#button-container").addEventListener('click', function(e) {
	if(e.target.id == 'submit-button') {
		alert('CLICKED');
	}
});

// #submit-button is dynamically created
document.querySelector("#button-container").innerHTML = '<button id="submit-button">Submit</button>';

// click on #submit-button will now work
document.querySelector("#submit-button").click();
