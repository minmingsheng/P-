window.addEventListener("load", function(){
	var descriptions;
	var skillSet = document.querySelectorAll(".skillSet");
	var infoFeed = document.querySelector(".infoFeed");
	var dataId; // getAttribute from data-id --> is the N.O of skills
	function loadDoc(a) {/*pass id*/
	  var xhttp = new XMLHttpRequest();
	  xhttp.open("GET", "description.php", true);
	  xhttp.send();
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    	var req = JSON.parse(xhttp.responseText);
	     	
	     	for (var i = 0; i < req.length; i++) {
	     		// console.log(req[i].sid);// for test
	     		// console.log(req[i].description);// for test
	     		if(req[i].sid == a){
	     			console.info(req[i].description);
	     			var el = document.createElement("div");
	     			el.setAttribute("class", "showup");
	     			el.textContent = req[i].description;
	     			infoFeed.appendChild(el);
	     		}
	     	};
		}
	  };
	}
	function getDataId(){
		for (var i = 0; i < skillSet.length; i++) {
			skillSet[i].addEventListener("click",function(){
				infoFeed.innerHTML   = "";
				dataId = this.getAttribute("data-id");
				console.log(dataId);//for test
				loadDoc(dataId);
			})
		};
	}

	getDataId();
	

})