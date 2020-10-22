

function C1() {
    
  if (( document.getElementById('myField0').value == ('simple')) && (document.getElementById('myField1').value == ('half_duplex')) && (document.getElementById('myField2').value == ('full_duplex')) )
  {
       alert("the answer is correct");
  }
  
  else {
       alert("your answer is not correct\ntype another one");
        }

}
  
function C2() {
    
  if ((document.getElementById('myField3').value == 'TMD'&& document.getElementById('myField4').value == 'FDM')||(document.getElementById('myField3').value == 'FDM'&& document.getElementById('myField4').value == 'TDM'))
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}

function C3() {
    
  if (( document.getElementById('myField5').value == 'Atténuation'&& document.getElementById('myField6').value == 'Distorsion'&& document.getElementById('myField7').value == 'Brait')||(document.getElementById('myField6').value == 'Atténuation'&& document.getElementById('myField7').value == 'Distorsion'&& document.getElementById('myField5').value == 'Brait')||document.getElementById('myField7').value == 'Atténuation'&& document.getElementById('myField6').value == 'Distorsion'&& document.getElementById('myField5').value == 'Brait')||( document.getElementById('myField6').value == 'Atténuation'&& document.getElementById('myField5').value == 'Distorsion'&& document.getElementById('myField7').value == 'Brait')||( document.getElementById('myField5').value == 'Atténuation'&& document.getElementById('myField7').value == 'Distorsion'&& document.getElementById('myField6').value == 'Brait')||( document.getElementById('myField7').value == 'Atténuation'&& document.getElementById('myField5').value == 'Distorsion'&& document.getElementById('myField6').value == 'Brait')
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}

function C4() {
    
  if ( document.getElementById('myField8').value == 'D/Vp')
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}

function C5() {
    
  if ( document.getElementById('myField9').value == 'T/d')
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}

function C6() {
    
  if ( document.getElementById('myField10').value == 'Préambule'&& document.getElementById('myField11').value == 'Control info'&& document.getElementById('myField12').value == 'Data'&& document.getElementById('myField13').value == 'Postambule')
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}
function C7() {
    
  if ( document.getElementById('myField14').value == 'Non')
  {
       alert("the answer is correct");
       return true; 
  }
  
  else {
       alert("your answer is not correct\ntype another one");
       return false;
  }
}

function C8() {
    
  if ((document.getElementById('myField15').value == 'Stop-and-Wait'&& document.getElementById('myField16').value == 'Go-back-N'&& document.getElementById('myField17').value == 'Selevtive-reject')||(document.getElementById('myField17').value == 'Stop-and-Wait'&& document.getElementById('myField16').value == 'Go-back-N'&& document.getElementById('myField15').value == 'Selevtive-reject')||(document.getElementById('myField16').value == 'Stop-and-Wait'&& document.getElementById('myField15').value == 'Go-back-N'&& document.getElementById('myField17').value == 'Selevtive-reject')||(document.getElementById('myField16').value == 'Stop-and-Wait'&& document.getElementById('myField17').value == 'Go-back-N'&& document.getElementById('myField15').value == 'Selevtive-reject')||(document.getElementById('myField15').value == 'Stop-and-Wait'&& document.getElementById('myField17').value == 'Go-back-N'&& document.getElementById('myField16').value == 'Selevtive-reject')||(document.getElementById('myField17').value == 'Stop-and-Wait'&& document.getElementById('myField15').value == 'Go-back-N'&& document.getElementById('myField16').value == 'Selevtive-reject'))
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