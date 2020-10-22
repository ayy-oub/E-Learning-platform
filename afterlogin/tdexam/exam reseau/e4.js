function C3() {
    
  if ( document.getElementById('myField0').value == 'Atténuation'&& document.getElementById('myField1').value == 'Distorsion'&& document.getElementById('myField2').value == 'Brait')
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}

          function M1 () {

        switch (Math.floor(Math.random() * 2)) {

    case 0:  document.getElementById('btn40').style.display='block'; break;
    case 1:  document.getElementById('btn41').style.display='block'; break;
}
}