

function refreshPage(){
    window.location.reload();
}


function doSomething(id, value) {
    var a = document.createElement('div');
    a.setAttribute("style", `background-color:${value}; width: 50px; height: 50px`);
    refreshPage();
    document.getElementById("colores").appendChild(a);
}
