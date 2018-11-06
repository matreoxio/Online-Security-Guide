<h1>General Knowledge Scenarios</h1>

<script type="text/javascript">

// pos = Current question user is on
var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
// this is a multidimensional array with 10 inner array elements with 5 elements inside them
var questions = [
  ["You receive an email from google support, the email reads: Your account has been compromised please send us your username and password to confirm that you are the owner of this account. What do you do ?", "I send them an email with my username and password as soon as possible", "Google would never ask me for my password so I delete the email", "I send them an email asking for more information", "B"],
  ["You receive an email from a person who claims to be your friend and the message that reads: Hello <Your Name> here are some of our old pictures. There is a folder attached to the email, what do you do ?", "Download the file to look at the pictures", 
  "Email the person asking to confirm their identity", "Download the file but check it with your antivirus software", "B"],
  ["You get a phone call from your bank, the person on the other end knows your name, address and D.O.B. Now they ask you to give them your card number and the 3 digit security code as your card was used in online fraud and they want to confirm that this is in fact your card and that they are talking to the person who is currently holding the card. What do you do ?", 
  "End the call and disregard it", "Provide the caller with the information that he is asking for", "End the call and call the bank directly to confirm that this is really them calling you","C"],
  ["You are browsing the internet and suddenly a pop-up appears on your screen and it reads: Your computer has been infected with viruses, click here to download an antivirus to protect your computer. What do you do ?", 
  "I close the pop-up and continue browsing", "I click on the pop-up to download the appropriate software", "I close the pop-up and scan my computer with my own antivirus", "A"],
  ["You are browsing the internet and suddenly a pop-up appears on your screen and it reads: You just won a trip to Dubain click here to accept your prize. What do you do ?",
  "I close the pop-up", "I click on the pop-up but I close it when I see how much personal information they are asking for ", "I provide all of the necessary information to get my prize ", "A"],
  ["You are browsing the internet and suddenly a pop-up appears on your screen and it reads: Your activity has been marked as illeagal and the appropraite authorities have been notified, pay £100 in the next 7 days or you will face criminal charges",
  "I pay the fine to avoid any further fines/criminal charges", "I ignore the pop-up and continue browsing", "I contact the local authorities", "B"],
  ["You receive a letter from HMRC, the letter reads: There was a system error and your income tax was miscalculated and you owe us £320, you have 30 days to pay or face further penalties. To pay use this account number and reference number:333 or call:00000000000. What do you do ?",
  "I call the number to enquire about this miscalculation", "I pay what I owe", "I go to the official HMRC website and call the provided number to enquire about this miscalculation", "C"],
  ["You receive a phone call from your bank from the fraud prevention devision, the caller asks you to prove your identity by providing your: full name, current address, cocial security number and D.O.B. WHat do you do ? ",
  "I provide all of the necesary information", "I disconnect and call my bank directly", "I ignore the call", "B"]
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
<h2 id="test_status"></h2>
<div id="test"></div>