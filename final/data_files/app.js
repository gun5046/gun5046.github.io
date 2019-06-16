
//GETTING RESTO DATA
var xhr_get = new XMLHttpRequest();
//POSTING DATA
var xhr_post = new XMLHttpRequest();
//VAR for HOLDLING restaurant list
var food = null;

window.onload = init();


function init(){
    xhr_get.open("GET","http://localhost/final/data_files/api/food.php");
    xhr_get.send(null);

    console.log('ok');
    document.querySelector("#btn_save")
        .addEventListener('click', 
        function(){
            save_food();
        });
}


function save_food(){
    let name = document.querySelector("#name");
    let price = document.querySelector("#price");
    
    xhr_post.open("POST","http://localhost/final/data_files/api/food_save.php",true);
    xhr_post.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    data = "&name=" + name.value 
           + "&price=" + price.value;
    
    xhr_post.send(data);
   
    //CLEAR VALUES after saving...
    name.value="";
    price.value="";

    
    

}
xhr_get.onreadystatechange = function(){
    var DONE = 4;
    var OK = 200;
    if(xhr_get.readyState = DONE){
        if(xhr_get.status == OK){
                data  = xhr_get.responseText;
                food =  JSON.parse(data);
                updateTable();
                
                
        }
        else{
            console.log("Error");
        }
    }
}


function updateTable(){
    let  lst = document.querySelector("#list");
    if(food == null ) return;
    lst.innerHTML = "<tr><th>ID</th><th>Name</th><th>Price</th></tr>";

    for(i = 0; i<food.length; i++){
        let row  = document.createElement("tr");
        let id = document.createElement("td");
        let name = document.createElement("td");
        let price = document.createElement("td");
        id.innerText =  food[i].id;
        name.innerText = food[i].name;
        price.innerText = food[i].price;
        row.append(id);
        row.append(name);
        row.append(price);
        lst.append(row);
    }
}