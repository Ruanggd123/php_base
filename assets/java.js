//atribuição de comentários
/*
    outra atribuição de comentários
*/
/*document.write("Alguma coisa");
document.write("<img src='http://www.google.com.br/google.jpg'/>");
*/
function fuc(nome, idade){
    var novo = document.getElementById("area2");
    var texto = prompt("Qual o seu sobrenome ?");
    novo.innerHTMl= nome+" "+texto+" tem "+idade+" anos";
}
function adicionarI(){
    var ing = documenht.getElementById("ingrediente");
    var listahtml = document.getElementById("lista").innerHTLM;
    listahtml = listahtml +"<li>" + ing + "</li>";
    document.getElementById("lista").innerHTML=listahtml;
}