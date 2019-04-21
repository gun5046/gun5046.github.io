// JavaScript source code

var a=1;
var b=0;
var data = [{
"id":"1", 
"name":"Samsung S7", 
"price":"2500"}
];
var view;
var i=0;
var save1;


window.onload = init; 

function init() {

	document.querySelector("#save").onclick = saving; 
	document.querySelector("#idbt").onclick = arrayData;	
	document.querySelector("#namebt").onclick = arrayData;	
	document.querySelector("#pricebt").onclick = arrayData;	
	showData();
		
} 
 
 
function showData() {

	tb = document.querySelector("#datax"); 
	tb.innerHTML = "";

	if(a==1){
		for (i = 0; i < data.length; i++) {
				mtr = document.createElement("tr"); 
				td1 = document.createElement("td"); 
				td2 = document.createElement("input");
				td2.type="button";
				td2.id="text";
				td2.value = data[i].name;
		
				td3 = document.createElement("td");

				td2.onclick=function(){
					save1= this.value;
					
					this.setAttribute('type', 'text');
					this.setAttribute('onkeydown',"onKeydown(this);");

				};
			

				td1.innerText = data[i].id;
				
				td3.innerText = data[i].price;

				mtr.append(td1);
				mtr.append(td2); 
				mtr.append(td3); 
				tb.append(mtr);

				}
			
			
		
		
		}
	else if(a!==1){
	
		b++;
		for(j=data.length-1; j>=0; j--){
					mtr = document.createElement("tr"); 
					td1 = document.createElement("td"); 
					td2 = document.createElement("input"); 
					td2.type="button";
					td2.id="text";
					td2.value=data[j].name;
					td3 = document.createElement("td");

					
					td2.onclick=function(){
					
				
					this.setAttribute('type', 'text');
					this.setAttribute('onkeydown',"onKeydown(this);");
					};
				
					td1.innerText = data[j].id;
					td2.innerText = data[j].name;
					td3.innerText = data[j].price;
	
					mtr.append(td1);
					mtr.append(td2); 
					mtr.append(td3); 
					tb.append(mtr);
			
		}

		if(b!==1){
			i++;
		}
		
	}
	
	
				


} 
 
 
function saving() { 
	name = document.querySelector("#name1").value; 
	price = document.querySelector("#price1").value;

	
 
 
let contact =new Object(); 
	contact.name= name; 
	contact.price = price; 
	contact.id = Number(i+1); 
	data.push(contact); 
	showData();
	

	}

	function arrayData(){
	if(a==1){
		a=0;
		b=0;
		showData();
	}
	else if(a!==1){
		a=1;
		showData();
		
	}
}

function onKeydown(view)
{
	

	if(event.keyCode==27){
		view.value =save1;
		view.setAttribute('type', "button");

		}
		
	else if((event.keyCode==13 || event.which==13)){
		
		view.setAttribute('type', 'button');
		
		}
	
     
}