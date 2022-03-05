
var button1 = document.getElementById('show1');
var content1 = document.getElementById("subcategory-list1");

button1.onclick = function(){

    if(content1.className == "open"){
        content1.className = "";
        button1.innerHTML = "<b>+</b>"
    } else{
        content1.className="open";
        button1.innerHTML = "<b>-</b>"
    }
};


var button2 = document.getElementById('show2');
var content2 = document.getElementById("subcategory-list2");

button2.onclick = function(){

    if(content2.className == "open"){
        content2.className = "";
        button2.innerHTML = "<b>+</b>"
    } else{
        content2.className="open";
        button2.innerHTML = "<b>-</b>"
    }
};

