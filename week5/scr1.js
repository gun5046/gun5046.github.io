// JavaScript source code

	window.onload=init;
	var context1;
	var context2;
	var x=150;
	var y=30;
	var a=130;
	var dx=5;
	var dy = 5;

	var holder;

	function init() {

	    context1 = myCanvas.getContext('2d');
	    context2 = myCanvas.getContext('2d');
	    holder=setInterval(draw, 40);

	    document.querySelector("#start").addEventListener('click', function () {

	        
	    })
    }

	function draw(){
   
	context1.clearRect (0,0, 500,400);
	context1.beginPath();
    context1.fillStyle="#0000ff";
    context1.arc(x,y,6,0,Math.PI*2,true);
    context1.closePath();
	context1.fill();

	
	
	

	context2= myCanvas.getContext('2d');
    context2.beginPath();
    context2.fillStyle="black";
    context2.fillRect(a,140,50,3,Math.PI*2,true); 
	context2.closePath();
    context2.fill();

    if (x < 0 || x > 300)
        dx = -dx;
    else if (y < 0)
        dy = -dy;
    else if (y > 130 && a < x && x < a + 50)
        dy = -dy;
    else if (y > 150) {

        alert('end');
        clearInterval(holder);
        
    }

	x+=dx;
	y += dy;


	document.onkeydown=func;
	}

	
 
	function func(){
	
	if(window.event.keyCode==37){
		a=a-15;
		if(a<0)
		a=0;
		}

	if(window.event.keyCode==39){
	
		a=a+15;
		if(a>250)
			a=250;
		}
	}


