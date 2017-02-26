
(function () {
	console.log('test');
	window.addEventListener('click', '#button1', function (e) {
		e.preventDefault();
		alert("Спасибо, что щелкнули!");
	});


	  document.onkeydown = function(e) {

		if (e.keyCode==40){
			console.log('down');

		}
		if (e.keyCode==38){
			console.log('Up');
		}
		if (e.keyCode==39){
			console.log('right');
		}
		if (e.keyCode==37){
			console.log('left');
		}
	}
})();
