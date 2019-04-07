

function myFunction() {
	var name1=document.getElementById("name").value;
    var node = document.createElement("Li");
    var textnode = document.createTextNode(name1);
    node.appendChild(textnode);
    document.getElementById("myList").appendChild(node);
}

