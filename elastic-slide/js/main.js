window.addEventListener("load", function(){
 	slide(); 

})
function slide(){
	var slides = document.querySelectorAll(".slider");
	var arrow1 = document.querySelectorAll(".arrow1");
	var arrow2 = document.querySelectorAll(".arrow2");
	var jason = document.getElementById("jason");
	var elaine = document.getElementById("elaine");
	var small_circle = document.querySelectorAll(".small-circle");
	console.log(small_circle);
	var cc = document.querySelectorAll(".cc")
	for (var i = 0; i < arrow1.length; i++) {
		console.log(this);
		arrow1[i].addEventListener("click", function(){
			var slider = this.parentElement;
			var nextSlider = this.parentElement.nextElementSibling;
			console.log(slider);
			console.log(nextSlider);
			if(nextSlider == null){
				slider.setAttribute("class", "slider is_invisible");
				slides[0].setAttribute("class", "slider is_visible");
				return;
			}
			console.log(slider.children[0]);
			console.log(jason);
			jason.style.background = "blue";
			elaine.style.background = "red";
			slider.style.display = "block";
			// setTimeout(function(){
			slider.setAttribute("class", "slider is_invisible");
			nextSlider.setAttribute("class", "slider is_visible");
				
			// }, 1000);
		})
	};
	for (var i = 0; i < arrow2.length; i++) {
		arrow2[i].addEventListener("click", function(){
			var slider = this.parentElement;
			var previousSlider = this.parentElement.previousElementSibling;
			console.log(slider);
			console.log(previousSlider);
			if(previousSlider == null){
				slider.setAttribute("class", "slider is_invisible");
				slides[slides.length-1].setAttribute("class", "slider is_visible");
				return;
			}
			slider.setAttribute("class", "slider is_invisible");
			previousSlider.setAttribute("class", "slider is_visible");

		})
	};

	
		// document.getElementById("sb").addEventListener("click", function(){
		// 	console.log(this.parentElement.previousElementSibling.previousElementSibling);
		// 	var tar  = this.parentElement.previousElementSibling.previousElementSibling;
		// 	// tar.setAttribute("class","cc slideIn scale" );
		// 	jason.style.background = "red";
		// });
	

}