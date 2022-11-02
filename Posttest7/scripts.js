var icon = document.getElementById("icon");
icon.onclick = function(){
    document.body.classList.toggle("light-theme")
    if(document.body.classList.contains("light-theme")){
        icon.src = "dark.png";
    }else{
        icon.src = "light.png";
    }
}
var icon = document.getElementById("icon");
icon.addEventListener("click",function POPUP(){
    if(document.body.classList.contains("light-theme")){
        alert("DARKMODE MATI")
    }else{
        alert("DARKMODE HIDUP")
    }
});

