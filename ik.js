var i = 0;
	
var path = new Array();

for(var x =0; x<12;x++){
path[x]="images/slideImage"+x+".jpg";

}
var caption = new Array();

caption[0] = "The Time Through Ages.";
caption[1] = "In the Name of Allah, Most Gracious, Most Merciful.";
caption[2] = "1. By the Time, ";
caption[3] = "2. Verily Man is in loss,";
caption[4] = "3. Except such as have Faith, and do righteous deeds, and (join together) in the mutual enjoining of Truth, and of Patience and Constancy.";

function swapImage()
{
var el = document.getElementById("mydiv");
el.innerHTML=caption[i];
var img= document.getElementById("slideShow");
img.src= path[i];
   if(i < path.length - 1)
	 i++;
	 else i = 0;
   setTimeout("swapImage()",5000);
//alert(document.body.innerHTML);

}
var currImg = 1;
		function prevImg(){
			currImg = (currImg -1)%11;   
			document.getElementById("slideshow").src ="images/slideImage"+currImg+".jpg";
		}
		function nextImg(){
			currImg = (currImg + 1)%11;
			document.getElementById("slideshow").src ="images/slideImage"+currImg+".jpg";
		}
window.onload = swapImage;
