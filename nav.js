//var declaration
search = document.querySelector(".searchBar");
icon = document.querySelector("#searchIcon");
searchText = document.querySelector(".searchText");
categories = document.querySelector("#cat");

//functions
function colorChange(){
    icon.style.color = "red";
    searchText.style.color = "red";
}

function colorChangeBack(){
    icon.style.color = "black";
    searchText.style.color = "black";
}

function colorChangeSelect(){
    categories.style.color = "red";
}

function colorChangeBackSelect(){
    categories.style.color = "black";
}



//Event callings
search.addEventListener("mouseover",colorChange);
search.addEventListener("mouseout",colorChangeBack);

categories.addEventListener("mouseover",colorChangeSelect);
categories.addEventListener("mouseout",colorChangeBackSelect);