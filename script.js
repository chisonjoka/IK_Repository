
		var i = 0;
	
		var path = new Array();

		for(var x =0; x<12;x++){
			path[x]="images/slideImage"+x+".jpg";

		}
		var caption = new Array();
		
		for(var y =0; y<12;y++){
			caption[y]="CAPTION"+y+"<br >CAPTION"+y+"<br >CAPTION"+y;
		}

		function swapImage(){
			
			var el = document.getElementById("capt1"); 

			el.innerHTML=caption[i]; 
			
			document.slide.src = path[i];
			if(i < path.length -1)
				i++;
			else
				i = 0;
			setTimeout("swapImage()",8000);

		}
	
		function swapImage1(){
			
			var el = document.getElementById("capt1"); 

			el.innerHTML=caption[i]; 

			document.slide1.src = path[i];
			if(i < path.length -1)
				i++;
			else
				i = 0;
			setTimeout("swapImage1()",5000);

		}
		function swapImage2(){
			
			var el = document.getElementById("capt2"); 

			el.innerHTML=caption[i]; 

			document.slide2.src = path[i];
			if(i < path.length -1)
				i++;
			else
				i = 0;
			setTimeout("swapImage2()",6000);

		}
		function swapImage3(){
			
			var el = document.getElementById("capt3"); 

			el.innerHTML=caption[i]; 

			document.slide3.src = path[i];
			if(i < path.length -1)
				i++;
			else
				i = 0;
			setTimeout("swapImage3()",4500);

		}
		var o_interval
  		var delay=1000
		function makeBlink() {
    o_interval = window.setInterval("ShowHide()", delay);
 		 }
		function ShowHide() {
    		var o_img = document.getElementById("blinkImg");
    		if (o_img.style.visibility=="hidden")
      		o_img.style.visibility="visible"
    		else
      		o_img.style.visibility="hidden"
 		 }
		function start(){
			swapImage();
			swapImage1();
			swapImage2();
			makeBlink();
		}
		window.onload = start;
																																																																																																																																																																																																																																																																																																		

/* ****************************************/
		var currImg = 1;
		function prevImg(){
			currImg = (currImg -1)%11;   
			document.getElementById("slideshow").src ="images/slideImage"+currImg+".jpg";
		}
		function nextImg(){
			currImg = (currImg + 1)%11;
			document.getElementById("slideshow").src ="images/slideImage"+currImg+".jpg";
		}

              count = 1
              size = path.length
              function pitiliza(number){
                   if(count == size){
                       count = 1
                      }
                   count = count + number
                 
                document.showImage.src = path[count]
                }

