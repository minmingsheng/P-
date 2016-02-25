window.addEventListener("load", function(){
	

	document.querySelector(".container").style.width = window.innerWidth+'px';

	var changeP;
	if(window.innerWidth >757){
		changeP = false;
	}else{
		changeP = true;
	}
	var descriptions;
	var skillSet = document.querySelectorAll(".skillSet");
	var infoFeed = document.querySelector(".infoFeed");
	var dataId; // getAttribute from data-id --> is the N.O of skills
	function loadDoc(a, title) {/*pass id*/
	  var xhttp = new XMLHttpRequest();
	  xhttp.open("GET", "description.php", true);
	  xhttp.send();
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    	var req = JSON.parse(xhttp.responseText);
	     	document.querySelector(".showDes section div").innerHTML = "";
	     	
	     	var b =1;
	     	for (var i = 0; i < req.length; i++) {
	     		// console.log(req[i].sid);// for test
	     		// console.log(req[i].description);// for test
	     		
	     		if(req[i].sid == a){
	     			b++;
	     			console.info(req[i].description);
	     			console.log("!!!!!: ", infoFeed.style);
	     			var el = document.createElement("div");
	     			el.textContent = req[i].description;
	     			el.setAttribute("class", "showup");
	     			
	     			console.info("b: "+b);
	     			el.style.animationDelay = 0.1*b+"s";
	     			if(window.innerWidth>797){
	     				infoFeed.appendChild(el);
	     			}else{
	     				var showDes = document.querySelector(".showDes");
	     				showDes.style.display = "block";
	     				document.querySelector(".showDes section p").textContent = title;
	     				el.textContent ="> "+req[i].description;
	     				document.querySelector(".gray").style.display = 'block';
	     				document.querySelector(".showDes section div").appendChild(el);

	     			}
	     		}
	     	};
		}
	  } /*end of xhttp*/;
	}
	function getDataId(){
		for (var i = 0; i < skillSet.length; i++) {
			skillSet[i].addEventListener("click",function(){
				var bars = document.querySelectorAll(".skillBar div");
				
				for (var j = 0; j < bars.length; j++) {
					bars[j].setAttribute("class", "");
				};
				// alert(this.getAttribute("class"));
				this.children[1].querySelector(".skillBar div").setAttribute("class", "clicked");
				

				console.info(this.children[0].textContent);
				var title = this.children[0].textContent;
	     		// document.querySelector(".showDes section p").textContent = title;
	     		console.log(document.querySelector(".showDes section p"));
				infoFeed.innerHTML   = "";
				var skillTitle = document.createElement("h5");
				skillTitle.textContent = title;
				
				skillTitle.style.fontWeight = "600";
				skillTitle.style.textAlign = "center";
				skillTitle.style.display = "block";
				skillTitle.style.margin = "0.5em 0";
				infoFeed.appendChild(skillTitle);
				dataId = this.getAttribute("data-id");
				console.log(dataId);//for test


				loadDoc(dataId, title);

			})
		};
	}
	function cross(){
	  var cross = document.querySelector(".showDes section span");
	  cross.addEventListener("click", function(){
	  		document.querySelector(".showDes").style.display = "none";
			document.querySelector(".gray").style.display = 'none';

	  })
	}
	function resize(){
		window.addEventListener("resize", function(){
			document.querySelector(".container").style.width = window.innerWidth+"px";
			var banners = document.querySelectorAll(".banner");

				for (var i = 0; i < banners.length; i++) {
					banners[i].style.width = document.querySelector(".container").innerWidth+"px";
				};
			
			if(window.innerWidth<797){
				fixizeBannaer();
				
			}
			if(window.innerWidth<800){
				changeP = true;
			}else{
				changeP = false;

			}
			console.log(changeP);
		})
	}
	function fixizeBannaer(){
		var bars = document.querySelectorAll(".banner");

		var container = document.querySelector(".container");
		var a = bars[0].offsetTop;
		var b = bars[1].offsetTop;
		var c = bars[2].offsetTop;
		container.addEventListener("scroll", function(){
			var touchTop = container.scrollTop;
			console.log(touchTop);
			console.log(bars[0].offsetTop);	
			
	
				if(touchTop > a){
					console.log("offsetTop", bars[0].offsetTop);
					bars[0].style.position = "fixed";
					// bars[0].style.color = "red";
					bars[0].style.zIndex = "1000";
					bars[0].style.width = container.offsetWidth+"px";
					bars[0].style.top="0";
					bars[0].style.left="0";
					bars[0].style.right="0";
					bars[0].style.margin = "auto";
					bars[0].style.borderBottom="2px solid black";
				}else{
					bars[0].style.position = "inherit";
					bars[0].style.borderBottom="none";
					bars[0].style.width = "inherit";
					
					console.log("asdasd");
				}

				if((touchTop+bars[0].offsetTop+bars[0].offsetHeight) > b){
					console.log("offsetTop", bars[1].offsetTop);
					bars[1].style.position = "fixed";

					bars[1].style.zIndex = "1111";
					bars[1].style.width = container.offsetWidth+"px";

					bars[1].style.left="0";
					bars[1].style.right="0";
					bars[1].style.margin = "auto";

					bars[1].style.borderBottom="2px solid black";
					bars[1].style.top=bars[0].offsetTop+bars[0].offsetHeight+"px";

					
				}else{
					bars[1].style.position = "inherit";
					bars[1].style.zIndex = "1111";
					bars[1].style.borderBottom="none";
					bars[1].style.width = "inherit";

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
	function audio(){
		document.getElementById('audioElement').play();
		document.getElementById('audioElement').volume = 0.2;
		var b = true;
		document.querySelector(".pause").addEventListener("click", function(){
			if(b){
				document.getElementById('audioElement').pause();
				b = false;
			}else{
				document.getElementById('audioElement').play();
				b = true;
			}
		})
		var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
	  	var audioElement = document.getElementById('audioElement');
		var audioSrc = audioCtx.createMediaElementSource(audioElement);
		var analyser = audioCtx.createAnalyser();
		// Bind our analyser to the media element source.
		audioSrc.connect(analyser);
		audioSrc.connect(audioCtx.destination);
		//var frequencyData = new Uint8Array(analyser.frequencyBinCount);
		var frequencyData = new Uint8Array(200);
		var bars = document.querySelectorAll(".skillBar div");
		var originalWidth = [];
		for (var i = 0; i < bars.length; i++) {
			originalWidth.push(parseInt(bars[i].style.width));
		};

		console.log(originalWidth);
		function getSound(){
			
			requestAnimationFrame(getSound);
			analyser.getByteFrequencyData(frequencyData);
			var a = frequencyData[frequencyData.length-1]/20;
			console.log(a);

			for (var i = 0; i < bars.length; i++) {
			var a = frequencyData[i]/5;

				bars[i].style.width = originalWidth[i]+a+"%";
			};

		}
		getSound();

	}
	
	function scrollIt(){
		var container = document.querySelector(".container");
		container.addEventListener("scroll", function(){
			
			var intros = document.querySelectorAll(".intro");
			var barss = document.querySelectorAll(".skillBar div");
			if(container.scrollTop>350){
				for (var i = 0; i < intros.length; i++) {
					intros[i].style.display = "block";
					intros[i].style.opacity = "1";
				};
				for (var i = 0; i < barss.length; i++) {
					barss[i].style.display = "block";
					barss[i].style.opacity = "1";
				};
			}

			if(container.scrollTop<150){
				function temp(){
					for (var i = 0; i < 10; i++) {
						
					};
				}
				for (var i = 0; i < intros.length; i++) {
					intros[i].style.opacity = "0";
					temp();
					intros[i].style.display = "none";
				};
				for (var i = 0; i < barss.length; i++) {
					barss[i].style.opacity = "0";
					temp();
					barss[i].style.display = "none";
				};
			}

		});
	}
	function toggle(){


		var toggle = document.querySelector(".trigger");
		var intros = document.querySelector(".infoFeed").querySelectorAll('.intro');
		var divs = document.querySelector(".infoFeed").querySelectorAll('div');
		console.log(infoFeed);
		var b = false;
		toggle.addEventListener("click", function(){
			console.log(intros);
			if(!changeP){
				if(b){
					/*appear*/
					infoFeed.innerHTML = "";
					for (var i = 0; i < intros.length; i++) {
						// intros[i].style.display = "none";
						infoFeed.appendChild(intros[i]);
					};
					b = false;
					
				}else{
					/*disappear*/
						

					for (var i = 0; i < divs.length; i++) {
						infoFeed.innerHTML = "";
					};
					b = true;
				}
			}
			// alert("asd");
		})
	}
	function showD(){
		var top_toggle = document.querySelector('.top-toggle');
		var intros = document.querySelectorAll('.intro');
		var b = true;
		top_toggle.addEventListener("click", function(){
		var el = document.createElement("div");
		el.setAttribute("class", "window")
			var icon = top_toggle.querySelector("i");
			console.log(icon);
		console.log(intros);
			if(b){
				el.style.position = "absolute";
				el.style.top = 0;
				el.style.width = "100%";
				el.style.height = "100%";
				// el.style.zIndex = "1000";
				el.style.background = "#a1dfda";
				for (var i = 0; i < intros.length; i++) {
					el.appendChild(intros[i]);
				};
				
				icon.setAttribute("class", "fa fa-times trigger");
				// top_toggle.style.background  = "transparent";
				document.body.appendChild(el);	
				b = false;
			}else{
				console.log(el);
				icon.setAttribute("class", "fa fa-caret-up trigger");
				// top_toggle.style.background  = "#a1dfda";

				document.body.removeChild(document.querySelector(".window"));	;
				b=true;
			}
			

		})
		
	}


	showD();
	toggle();
	


	scrollIt();


	resize();
	getDataId();
	// audio();
	cross()

	

})