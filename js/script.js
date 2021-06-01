function hidden(){

	var passwrd = document.getElementsByClassName('passwrd');
	var boxArray = [];
	var tdDisplay = document.getElementsByClassName('td-display');

	for (let i = 0; i < passwrd.length;  i++) {

		passwrd[i].classList.add("hidden-text");


	}

	for (let i = 0; i < tdDisplay.length;  i++) {

		tdDisplay[i].classList.remove("hidden-text");
	}

}

function show(){

	var passwrd = document.getElementsByClassName('passwrd');
	var boxArray = [];
	var tdDisplay = document.getElementsByClassName('td-display');


	for (let i = 0; i < passwrd.length; i++) {

	    passwrd[i].classList.remove("hidden-text");

	}

	for (let i = 0; i < tdDisplay.length;  i++) {

		tdDisplay[i].classList.add("hidden-text");
	}

}

const buttonShow = document.getElementById('button-show');


var clickCount = 0;

buttonShow.addEventListener('click', function() {
	   clickCount++;
	   if (clickCount === 1) {
	   		clickCount = 1;
	   		hidden();

	   } else if (clickCount === 2) {
	   		clickCount = 0;
	   		show();
	   }
}, false);

// function eliminarUsuario(){

// var buttonDel = document.querySelectorAll('a.button-del');
//     	// alert("hey");


// buttonDel.forEach(function(item, idx) {
//     item.addEventListener('click', function() {

//       console.log(item.dataset.id);
//     });
// });


// }