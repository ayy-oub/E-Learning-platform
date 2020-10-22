

 var a;
 var I;
 var A;
 var E11;
 var Score =0;

 function validateform1() {
    
  if (( document.getElementById('myField').value == ('(I+(a-1)*E11)*A')) || ( document.getElementById('myField').value == ('(I+a*E11-E11)*A')) || ( document.getElementById('myField').value == ('I*A +a*E11*A-E11*A')) )
        
       {
        alert("Votre réponse est correcte, vous pouvez passer à la question suivante");
       }
   else {
   	    alert("Votre réponse est incorrecte, vous pouvez passer à la question suivante ou bien refaire la question");
   }
         
         
       
   

switch (Math.floor(Math.random() * 3)) {

	case 0:  document.getElementById('btn40').style.display='block'; break;
	case 1:  document.getElementById('btn41').style.display='block'; break;
	case 2:  document.getElementById('btn42').style.display='block'; break;


}
}
 







   
        function rep  () {
          alert("Votre réponse est incorrecte, vous pouvez passer à la question suivante ou bien refaire la question");
        }
        function rep1 () {
          alert("Votre réponse est correcte, vous pouvez passer à la question suivante");
        }

     


          function MT2 () {

        switch (Math.floor(Math.random() * 3)) {

    case 0:  document.getElementById('btn40').style.display='block'; break;
    case 1:  document.getElementById('btn41').style.display='block'; break;
    case 2:  document.getElementById('btn42').style.display='block'; break;
}
}

       function repf  () {
          alert("Votre réponse est incorrecte");
        }
        function rep1f () {
          alert("Votre réponse est correcte");
        }
    

