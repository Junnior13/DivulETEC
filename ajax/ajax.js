function popUp(url,ltra) {
window.open(url,"win",'toolbar=no,menubar=no,scrollbars=0,resizable=1,width='+ltra+',height=450,top=100,left=100');
self.name = "mainWin";

}

function replaceText(el, text) {
  if (el != null) {
    clearText(el);
    var newNode = document.createTextNode(text);
    el.appendChild(newNode);
  }
}

function clearText(el) {
  if (el != null) {
    if (el.childNodes) {
      for (var i = 0; i < el.childNodes.length; i++) {
        var childNode = el.childNodes[i];
        el.removeChild(childNode);
      }
    }
  }
}

function getText(el) {
  var text = "";
  if (el != null) {
    if (el.childNodes) {
      for (var i = 0; i < el.childNodes.length; i++) {
        var childNode = el.childNodes[i];
        if (childNode.nodeValue != null) {
          text = text + childNode.nodeValue;
        }
      }
    }
  }
  return text;
}

function createRequest() {
	request = null;
   try {
     request = new XMLHttpRequest();
   } catch (trymicrosoft) {
     try {
       request = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (othermicrosoft) {
       try {
         request = new ActiveXObject("Microsoft.XMLHTTP");
       } catch (failed) {
         request = null;
       }
     }
   }

   if (request == null){
     alert("Error creating request object!");
   } else {
	   return request;
   }
}

	function mascaraData(campo, valor){
  var mydata = '';
  mydata = mydata + valor;
  if (mydata.length == 2){
    mydata = mydata + '/';
    campo.value = mydata;
  }
  if (mydata.length == 5){
    mydata = mydata + '/';
    campo.value = mydata;
  }
}

	function mascaraHora(campo, valor){
  var mydata = '';
  mydata = mydata + valor;
  if (mydata.length == 2){
    mydata = mydata + ':';
    campo.value = mydata;
  }
 
}

   function geraSenha(letras,local) {
	  
var pass = "";
var chars = 10; //Número de caracteres da senha

for (var i= 0; i <= chars; i++){
pass += nroAleat();
}

document.getElementById(local).value=pass;
}

    function nroAleat() {

/*
* matriz contendo em cada linha indices (inicial e final) da tabela ASCII para retornar alguns caracteres.
* [48, 57] = numeros;
* [64, 90] = "@" mais letras maiusculas;
* [97, 122] = letras minusculas;
*/

var ascii = [[48, 57],[64,90],[48, 57]];
var i = Math.floor(Math.random()*ascii.length);
return String.fromCharCode(Math.floor(Math.random()*(ascii[i][1]-ascii[i][0]))+ascii[i][0]);
	}