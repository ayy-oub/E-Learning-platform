function C1() {
    
  if (( document.getElementById('myField0').value == ('simple')) && ( document.getElementById('myField1').value == ('b+(a%10)*10')) && ( document.getElementById('myField2').value == ('b+=a')) )
  {
        alert("Votre réponse est correcte, vous pouvez passer à la question suivante");
  }
  
  else {
        alert("Votre réponse est incorrecte, vous pouvez passer à la question suivante ou bien refaire la question");
  }
}



 function M1 () {

        switch (Math.floor(Math.random() * 2)) {

    case 0:  document.getElementById('btn40').style.display='block'; break;
    case 1:  document.getElementById('btn41').style.display='block'; break;
}
}
