function submitAnswers(){
	var total=10;
	var score=0;

	//entrer la reponse
	 var q1=document.forms["quizForm"]["q1"].value;
	 var q2=document.forms["quizForm"]["q2"].value;
	 var q3=document.forms["quizForm"]["q3"].value;
	 var q4=document.forms["quizForm"]["q4"].value;
	 var q5=document.forms["quizForm"]["q5"].value;
	 var q6=document.forms["quizForm"]["q6"].value;
	 var q7=document.forms["quizForm"]["q7"].value;
	 var q8=document.forms["quizForm"]["q8"].value;
	 var q9=document.forms["quizForm"]["q9"].value;
	 var q10=document.forms["quizForm"]["q10"].value;
	 
	 //validation
	 for (var i = 1; i <= total; i++) {
	 	if (eval('q'+i)==null || eval('q'+i)==' ') {
	 	alert("vous n'avez pas répondre à la question"+i);
	 	return false;
	    }
	}
	 
	 //corection
	 var answers =["b","a","c","a","b","a","a","a","c","b"];
     for (var i = 1; i <= total; i++) {
	 	if (eval('q'+i)==answers[i-1]) {
	 	   score++;
	    }
	} 
	alert("votre score est :"+score+ "de" +total );

}
