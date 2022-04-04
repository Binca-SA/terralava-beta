window.onload=function(){
    let sumar=function(cantidad,txt){
        txt.value=(!isNaN(txt.value) && txt.value!="")?parseInt(txt.value)+cantidad:0;
    }
    let sumador1={
        btnResta: document.getElementById("btn1"),
        btnSuma: document.getElementById("btn2"),
        txt: document.getElementById("txt")
    };
    sumador1.btnResta.onclick=function(){ sumar(-1,sumador1.txt); };
    sumador1.btnSuma.onclick=function(){ sumar(1,sumador1.txt); };
}
 