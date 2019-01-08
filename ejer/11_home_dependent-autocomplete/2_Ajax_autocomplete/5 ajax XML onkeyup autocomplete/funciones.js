//***************************************
//Funciones addEvent, crearXMLHttpRequest
//***************************************
function addEvent(elemento,nomevento,funcion,captura){
  if (elemento.attachEvent){
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener){
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}

function crearXMLHttpRequest() {
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

//***************************************
//autocomplete palabras
//***************************************

addEvent(window,'load',inicializarEventos,false);

function inicializarEventos(){
  var ob=document.getElementById('palabra');
  addEvent(ob,'keyup',presionTecla,false);
}

var conexion1;
function presionTecla(e){
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  var palabra=document.getElementById('palabra').value;
  conexion1.open('GET','ejer.php?palabra='+palabra, true);
  conexion1.send(null);
}

function procesarEventos(){
  var resultados = document.getElementById("resultados");
  if(conexion1.readyState == 4){
    if (conexion1.status==200){
      var xml = conexion1.responseXML;
	  
      var pals=xml.getElementsByTagName('palabra');
      
      resultados.innerHTML='';      
      for(var f=0;f<pals.length;f++)
        resultados.innerHTML = resultados.innerHTML + pals[f].firstChild.nodeValue + '<br>';
    }
    else
      alert(conexion1.statusText);
  } 
  else 
    resultados.innerHTML = '';
}
