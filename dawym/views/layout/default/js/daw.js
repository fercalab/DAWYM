/*var btnCrearMateria = document.querySelector('#botonAdminCreaMat');
var btnCrearUfo = document.getElementById('botonAdminCreaUfo');
var btnCrearConcept = document.querySelector('#botonAdminCreaConcepto');*/

function vermateria(){
  document.getElementById('aparecenufos').style.display = 'none';
  document.getElementById('aparecenmaterias').style.display = 'block';  
}

function verufo(){
  document.getElementById('aparecenmaterias').style.display = 'none';
  document.getElementById('aparecenufos').style.display = 'block';
}

/*function cargafunciones(){
  btnCrearUfo.addEventListener("click",vermateria);
}

window.addEventListener("load",cargafunciones);
*/
function getAjax() {
  var req = false;
   try {
        req = new XMLHttpRequest(); 
   } catch(err) {
      req = false;
   }

   return req;
}

var miPeticion = getAjax();


function from(id,ide,url) {

		var mi_aleatorio=parseInt(Math.random()*999999);
		var vinculo=url+"?id="+id+"&rand="+mi_aleatorio;
		miPeticion.open("GET",vinculo,true);	
	  miPeticion.onreadystatechange=function() {
               if (miPeticion.readyState==4){
                       if (miPeticion.status==200){

                               var http=miPeticion.responseText;
                               document.getElementById(jide).innerHTML= http;

                           }
                  }
               
       }
       miPeticion.send(null);
}