var menubar = document.querySelector(".menu-box")

function showmenubar(){
    menubar.style.left="0%"
}

function closemenubar(){
    menubar.style.left="-40%"
}


var searchkey = document.querySelector(".search-bar")
var container = document.querySelector(".collection")
var collectionbox = document.querySelector(".collection-box")
var elements = container.querySelectorAll("div")


searchkey.addEventListener("keyup", function(event){

    var enteredtext= event.target.value

    for ( let i =0;i<9;i++){
        if(elements[i].textContent.indexOf(enteredtext)<0){
            elements[i].style.display = "none"
            
        }
        else{
            elements[i].style.display = "block"
        }
    }
})