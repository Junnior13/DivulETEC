<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
 <script type="text/javascript" src="ajax/ajax.js"> </script>
	<script type="text/javascript">
	function jantmp(pagina, caso, dd1, dd2, dd3, orig,ext,dd4) {
		
		var xmlhttp = createRequest();
		//elemento padrão que será alterado
		var obj = document.getElementById("conteudo");
		//elemento específicado por caso, para alteração
		switch (caso) {
		case'enfermagem':
		    obj = document.getElementById("conteudo");	
		    break;
		case'Analismo':
				obj = document.getElementById("conteudo");
            break;
        case'Turismo':
            obj = document.getElementById("conteudo");
            break;
        case'edificacoes':
            obj = document.getElementById("conteudo");
        break;  
        case'Manutençao':
            obj = document.getElementById("conteudo");
        break;  
        case'administraçao':
            obj = document.getElementById("conteudo");
        break;  

}

        var dados = "caso=" + escape(caso)+'&dd1='+ escape(dd1)+'&dd2='+ escape(dd2)+'&dd3='+ escape(dd3)+"&dado1="+escape(dd1)+"&dado2="+escape(dd2)+"&dado3="+escape(dd3)
+'&orig='+ escape(orig)+'&dd4='+ escape(dd4)+'&retorno='+ escape(ext)+'&origem='+ escape(orig);	
if(orig =='novaOrdCarga') dados= dados+'&motorista='+ext;
	
	obj.innerHTML = "<p class=\"jan_lista bold\" style=\" padding:50px;\">Aguarde...</p>";
	
		xmlhttp.open("POST", pagina, true);
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");	
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			
		
			switch(orig){

			case'atualizar':
			location.reload();
			break;

			
			default:
				obj.innerHTML = xmlhttp.responseText;
				break;
				}
					
				}
	
	
			}	
		xmlhttp.send(dados);
	}
</script>

</head>
<body>
  <div class="content ">
    <div class="banner col-md-12 ">
      <h2 class=" text-center"></h2>
    </div>
  <hr></hr>
  <div class="container">
    <div class="col-md-12">  
        <div class="row ">
          <button id="enfe" class="btn btn-danger col-md-4  my-2  rounded-0 " onclick="jantmp('Enfermagem.php','enfermagem')">Enfermagem</button>
          
          <button id="anal" class="btn  btn-primary col-md-4  my-2  rounded-0 " onclick="jantmp('Analismo.php','Analismo')">Analise de sistemas</button>
          
          <button id="turis" class="btn btn-success   col-md-4  my-2  rounded-0 text-white" onclick="jantmp('turismo.php','Turismo')">Turismo</button>
        </div>
        <div class="row ">
          <button id="edif" class="btn  btn-warning col-md-4  my-2 bg-warning rounded-0 "onclick="jantmp('edificacoes.php','edificacoes')">Edificações</button>
          <button id="edif" class="btn  btn-dark col-md-4  my-2   rounded-0" onclick="jantmp('Manutençao.php','Manutençao')">Manutenção </button>
          <button id="edif" class="btn  btn-light col-md-4  my-2 border-dark rounded-0 " onclick="jantmp('administraçao.php','administraçao')">Administração</button>
        </div>
    </div>
    </div>
  <div id="conteudo">
    
  </div>
    <a id="b5" class=" btn bt-lg btn-outline-danger offset-5 my-3" href="https://www.vestibulinhoetec.com.br/candidato/dados-acesso.asp"> inscrever-se <span id="sp"><img id=img-btn src="../etec.png"></img> </span></a>
  </div>
</body>
</html>