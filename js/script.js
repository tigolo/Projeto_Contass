function getXmlHttp() {
var xmlhttp;
try{
 xmlhttp = new XMLHttpRequest();
}catch(ee){
 try{
  xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 }catch(e){
  try{
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }catch(E){
    xmlhttp = false;
  }
 }
}
return xmlhttp;
} 

var request = getXmlHttp();
 
   function cadastra(){
     var usuario = document.getElementById("usuario").value;
     var descricao = document.getElementById("descricao").value;
    var data = document.getElementById("data").value;
     var url= "registra-tarefas.php";
     request.open("POST", url, true);
     request.setRequestHeader("Content-Type", 
     "application/x-www-form-urlencoded");
     request.onreadystatechange = confirma;
     request.send(null);
  }
 
  function confirma(){
 
  if(request.readyState == 4){
    var response = request.responseText;
    var divmain = document.getElementById("geral");
    var formid = document.getElementById("frm");
    var pelement = document.createElement("p");
    var text = document.createTextNode
    Content-Type", "application/x-www-form-urlencoded")
    ("Parabéns " + response + ", Cadastro Concluido!");
    pelement.appendChild(text);
    divmain.replaceNode(pelement,frm);
 
    var ael = document.createElement("a");
    var pula = document.createElement("<br>");
    var textlink = document.createTextNode("voltar");
     
    ael.appendChild(textlink); 
    ael.setAttribute("href","forms-tarefas.php");
    pelement.appendChild(pula); 
    pelement.appendChild(ael); 
   }
}