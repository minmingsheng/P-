window.addEventListener("load", function(){
	// config

		document.querySelector(".container").style.width = window.innerWidth+'px';


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
	function resize(){
		window.addEventListener("resize", function(){
			document.querySelector(".container").style.width = window.innerWidth+"px";
		})
	}
	function fixizeBannaer(){
		var bars = document.querySelectorAll(".banner");
		var container = document.querySelector(".container");
		
		var a = bars[0].offsetTop;
		var b = bars[1].offsetTop;
		var c = bars[2].offsetTop;
		container.addEventListener("scroll", function(){
			var touchTop = container.scrollTop+32;
			console.log(touchTop);
			console.log(bars[0].offsetTop);	
			
	
				if(touchTop > a){
					console.log("offsetTop", bars[0].offsetTop);
					bars[0].style.position = "fixed";
					bars[0].style.zIndex = "1000";
					bars[0].style.top="0";
				}else{
					bars[0].style.position = "inherit";
					// bars[0].style.zIndex = "inherit";
					console.log("asdasd");
				}

				if((touchTop+bars[0].offsetTop+bars[0].offsetHeight) > b){
					console.log("offsetTop", bars[1].offsetTop);
					bars[1].style.position = "fixed";
					bars[1].style.zIndex = "1111";
					bars[1].style.top=bars[0].offsetTop+bars[0].offsetHeight+"px";

					
				}else{
					bars[1].style.position = "inherit";
					bars[1].style.zIndex = "1111";
					// bars[1].style.top=bars[0].offsetTop+bars[0].offsetHeight+"px";
				}
				if((touchTop+bars[1].offsetTop+bars[1].offsetHeight) > c){
					console.log("offsetTop", bars[1].offsetTop);
					bars[2].style.position = "fixed";
					bars[2].style.zIndex = "1111";
					bars[2].style.top=bars[1].offsetTop+bars[1].offsetHeight+"px";
					
					
				}


		}) //end of listener
	}
	fixizeBannaer();
	resize();
	getDataId();
	

})