
function check(){
    var c=0;
    var q1=document.quiz.ques1.value;
    var q2=document.quiz.ques2.value;
    var q3=document.quiz.ques3.value;
     var q4=document.quiz.ques4.value;
     var q5=document.quiz.ques5.value;
     var result=document.getElementById('result');
   var quiz=document.getElementById("quiz");
     if (q1=="D") {c++}
    if (q2=="A") {c++}
    if (q3=="C") {c++}
    if (q4=="C") {c++}
     if (q5=="C") {c++}
     quiz.style.display="none";
     
    if(c<=3){
        result.textContent='Your result is '+c+'.It is not so good please try to work on yourself.'
    }
    else
    {
     result.textContent='Your result is '+c+'.It is awesome,keep it up!'
    }
}