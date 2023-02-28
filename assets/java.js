//atribuição de comentários
/*
    outra atribuição de comentários
*/
/*document.write("Alguma coisa");
document.write("<img src='http://www.google.com.br/google.jpg'/>");

function fuc(nome, idade){
    var novo = document.getElementById("area2");
    var texto = prompt("Qual o seu sobrenome ?");
    novo.innerHTMl= nome+" "+texto+" tem "+idade+" anos";
}
function adicionarI(){
    var ing = document.getElementById("ingrediente").value;
    var listahtml = document.getElementById("lista").innerHTMl;
    listahtml = listahtml +"<li>" + ing + "</li>";
    document.getElementById("lista").innerHTMl=listahtml;
}
function valorsoma(){
    var num1 = parseInt(document.getElementById("num1").value);
    var num2 = parseInt(document.getElementById("num2").value);
    
    var soma = num1 + num2;
    document.getElementById("valor").innerHTML= soma;
}*/
function verificar(){
    var n1 = document.getElementById("n1").innerHTML;
    var n2 = document.getElementById("n2").value;

    if(n1 == n2){
        alert("valores iguais");
    }else{
        alert("Valores diferentes");
    }
    reset();
}
function reset(){
    document.getElementById("n2").value="";
    document.getElementById("n1").innerHTML= Math.floor(Math.random()*100);
}