
 <h1>General Knowledge Test</h1>

<script type="text/javascript">

// pos = Current question user is on
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
// this is a multidimensional array with 10 inner array elements with 5 elements inside them
var questions = [
  ["Which password can be considered the most secure one?", "Adam", "1B98mu1", "Liverpool2018", "B"],
  ["What kind of information you shouldn't share online?", "Favorite singer", "Your name", "Home address", "C"],
  ["Why should you avoid public Wi-Fi?", "Criminals can use it to break into my device", "Its slow", "I shouldn't avoid public Wi-Fi", "A"],
  ["Why should you use 2-Step verification?", "What is that ?", "It makes it easier to manage my accounts", "It helps to improve the security of my online accounts", "C"],
  ["Why should you keep your software up to date?", "It allows me to access new features", "To fix any bugs and security vulnerabilities", "Because it's recommended", "B"],
  ["How many uniqe passwords should you have ?", "One", "As many as I can remember", "One for each account", "C"],
  ["What is a firewall?", "It's a wall on fire", "It helps to defend my system against online threats", "I can use it so scan my device for viruses", "B"],
  ["Why do you need antivirus software ?", "It protects my computer from viruses", "It protects my network from hackers", "It makes my computer run faster", "A"],
  ["A good password should: ", "Be easy to remmeber", "A mixture of letters and numbers", "All of the above", "C"],
  ["What information shouldn't be shared online ?", "National insurance number", "My travel plans", "All of the above", "C"]
  
  ];
// getElementById function  
function get(x){
  return document.getElementById(x);
}
function renderQuestion(){
  test = get("test");
  if(pos >= questions.length){
    test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
    get("test_status").innerHTML = "Test completed";
    // resets the variable to allow users to restart the test
    pos = 0;
    correct = 0;
    // stops rest of renderQuestion function running when test is completed
    return false;
  }
  get("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
  question = questions[pos][0];
  chA = questions[pos][1];
  chB = questions[pos][2];
  chC = questions[pos][3];
  test.innerHTML = "<h3>"+question+"</h3>";
  // the += appends to the data started on the line above
  test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
  test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
  test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br><br>";
  test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
}
function checkAnswer(){
  // use getElementsByName because we have an array which it will loop through
  choices = document.getElementsByName("choices");
  for(var i=0; i<choices.length; i++){
    if(choices[i].checked){
      choice = choices[i].value;
    }
  }
  // checks if answer matches the correct choice
  if(choice == questions[pos][4]){
    //each time there is a correct answer this value increases
    correct++;
  }
  // changes position of which character user is on
  pos++;
  // then the renderQuestion function runs again to go to next question
  renderQuestion();
}
window.addEventListener("load", renderQuestion, false);
</script> 
<!--Question count-->
<h2 id="test_status"></h2>
<!--Questions and answers-->
<div id="test"></div>
