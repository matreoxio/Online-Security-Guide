$(document).ready(function(){
	/* holds selected answer */
	var selectedAnswer = "RR"; // corrent selected answer
	var userTotalValue = 0; //current user score
	var currentQIndex = 0; //global index for questions
	var	currentTIndex	= 1; //global index for tutorial
	
	/**Listen for buttons and call apprioriate functions
		*	based on the the tested case value (the element's id) 
		*	of a switch statment
		* all buttons have the same class
 */
	$(".moreBtn").on("click", function(){
		var clickedBtnID = $(this).attr("id");//clicked button
		switch(clickedBtnID){
			case "viewExample":
				$(".viewExample").toggle();// change button name
				toggleDisplayName(this, "Expand Example", "Close Example")
				break;
			case "nextTip": //next tutorial tip
				changeTutorialContent();
				break;
			case "submitSelection":
				nextQuizContent();// next quiz
				break;
		}
	});
	
	/* iterate and change tutorial content from Array */
	function changeTutorialContent(){
		var iterVal = currentTIndex % 5;
		$("#moreExample").attr("src", moreExamples[iterVal])
		$("#emailTutHeading").html(arrHeaders[iterVal])
		$("#emailTutContent").html(imageArr[iterVal] + arrContent[iterVal]);
		currentTIndex++;
		console.log(currentTIndex);
	}
	
	/** Toggle Element display name 
	*@para element is any dome element
	*	@para str1 is first toggle string
	* @para str2 is second toggle string
	* change Dome value directly
	*/
	function toggleDisplayName(element, str1, str2){
		var elementID = $(element).attr("id");
		if($("#"+elementID).val() == str1){
			$("#" +elementID).val(str2);
		}else{
			$("#"+elementID).val(str1);
		}
	}
	/*Load Next quiz content from Array */
	function nextQuizContent(){
		accumSelection(currentQIndex);
		currentQIndex++;
		if(currentQIndex < 4){//max quiz is 4
			if(currentQIndex == 3) {
			$("#submitSelection").attr("value", "Submit and View Result");
		}
			displayQuesAns();
			adjustProgrssBar(currentQIndex + 1);
			$(".emailTutorial h2").text("Quiz " + (currentQIndex + 1) + " of 4");
		}else if(currentQIndex == 4) {
			//accumSelection(currentQIndex);
			displayEmailQuizResul();
			$(".emailTutorial h2").text("Quiz Result");
			$("#submitSelection").attr("value", "Retake Quiz");
		}else if(currentQIndex == 5){
			$("#quizResultView").hide();
			$("#emailResultHider").show();
			$("#submitSelection").attr("value", "Submit Selection");
			currentQIndex = -1;
			userTotalValue= 0;
			nextQuizContent();
		}
	}
	
	/* Display question and answer options */
		function displayQuesAns(){
			//next question
		$("#emailQuizQuestion").html(questionArr[currentQIndex]);
		//display all answers
		displayEmailQuizAns(answerArr[currentQIndex]);
		//show image if available
		if (questionImg[currentQIndex] == " "){
			$("#emailQuizImg").attr("src", "#");
			$("#emailQuizImg").css("display", "hide");
		}else{
			$("#emailQuizImg").attr("src", questionImg[currentQIndex]);
		}
	}
	
	/* Itirate Answer array and display answer elements */
	function displayEmailQuizAns(currMultArr){
		for(i=0; i< currMultArr.length; i++){
			var answerEQuiz = "#answer" + i;
			$(answerEQuiz).html(currMultArr[i]);
		}
		$(".radioAns").prop("checked", false);
	}
	
	/*Store selection */
	$(".radioAns").on("click", function(){
		selectedAnswer = $(this).next("label").text();
	});
	
	
	/* accumulate selection */
	function accumSelection(number){
		if(selectedAnswer == ansValueArr[number]){
			userTotalValue++;
		}
	}
	
	/* function Display result */
	function displayEmailQuizResul(){
		$("#emailResultHider").hide();
		$("#quizResultView").show();
		var percentScore = (userTotalValue / 4) * 100;
		$("#quizResultView").html("<h1>You Scored: " + percentScore + "%</h1>"); 
	}
	
/*Adjust progress bar */
	function adjustProgrssBar(currVal){
		$("#emailQuizProgress").attr("value", currVal);
	}
	
 
/* Tutorial Data */
var arrHeaders = ["Never click suspicious email attachments or links on the email's content.", "Never respond to emails that are enticing you to perform some operations.", "Spams are to be trashed", "Be wary of emails seemingly from friends but with message that does not realate to them", "Right click and select view massage headings; or just hover over sender's details to view the actual email address."];
	
var arrContent = ["Email attachments may carry malware payloads that may be delivered by clicking or opening the attachments. In the same way, a link in the email's may be directed to a malicious website from which the malware may be downloaded.", 
"Cybercriminals are continuously researching and using social engineering to entice victims to transmit sensitive financial data which they would then use later to perform financial transaction to the detriments of the victims.", 
"Email providers such as Hotmail and Gmail often do a good job in identifying some spams (some of which are malicious) and place them in the spam folders. Therefore be wary of opening any email that is received in the spam folter as they may contain malware: trash them.",  
"Remember display names of senders and links could be fake. For example an auto-generated email such as <a href='#'> xacd251vzxs65@fake.com </a> may be displayed as <a href='#'>s.John@noFake.com</a> and may therefore lure you to open the email. If that happens, read the message and make sure it identifies to the sender. For example a message coming from a respectable company will be suspicious if it does not has the company’s information at the end of the email.", 
"Identifying the actual sender of an email may help indicate that an email is malicious. One way to do this is to view the email source from which the actual sender could be reveal. However, and easy and fast method is to hover over the sender address and view the pop window that displays the actual email of the sender."];

var imageArr = ["<img class='img-rounded mainEmailImg imgOnText' id='topicImg'  src='../../images/email_attachment.png' alt='Emial Aware Pic'>", "<img class='img-rounded mainEmailImg imgOnText' id='topicImg'  src='../../images/malware_stop.png' alt='Emial Aware Pic'>", "<img class='img-rounded mainEmailImg imgOnText' id='topicImg'  src='../../images/junk_email.jpg' alt='Emial Aware Pic'>", "<img class='img-rounded mainEmailImg imgOnText' id='topicImg'  src='../../images/malware_friends.png' alt='Emial Aware Pic'>", "<img class='img-rounded mainEmailImg imgOnText' id='topicImg'  src='../../images/spyware.png' alt='Emial Aware Pic'>"];
	
var moreExamples = [
	"../../images/emailAskLogin.png",
	"../../images/HMRevenue.jpg",
	"../../images/emailSpam.png",
	"../../images/email_friend_scam.gif",
	"../../images/amazon_headLink.jpg",
];
	
	/* QUIZ data */
	
	//Questions
	var questionArr =["Why won’t you click the login link of the above email?", "How can you view the actual email address of the sender?", "What makes the above email NOT trustworthy?", "What is the best way to treat emails that arrive in the spam folder?"
	];
	
	//Answers
	var answerArr= [
		["Because the colour of login is different from the rest of the text",
			"The login keyword is reserved only for programming",
			"The sender may be attempting to steal your login information",
			"The login should be at the top of the message"
		],
		["The sender’s address is always included at the end of the email massage",
			"Hover the pointer over the displayed email and actual email is displayed",
			"Call the sender and ask for her emai","The actual email cannot be viewed, it is top secret"
		],
		["The email address of the sender is not complete",
			"The email content does not reflects the sender",
			"The sender’s phone number is not included",
			"Everything is find, the email is genuine and trustworthy"			
		],
		["Open, read and reply to the spam email",
			"Move the spam email from spam to inbox folder",
			"Delete the spam email without opening it",
			"Shutdown the computer and the spam will be gone",
		]
	];
	
	/* Correct Answers*/
	var ansValueArr = [ answerArr[0][2], answerArr[1][1], answerArr[2][1], answerArr[3][2],	
	];
	
	//images for questions
	var questionImg = [
"../../images/emailAskLogin.png",
	" ",
	"../../images/email_friend_scam.gif",
	" "
];
	
});
