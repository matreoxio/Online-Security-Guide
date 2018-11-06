<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class="row firstRow">
<div class="col-xs-12 contextHeader" id="contextHeader">
	<h1>Email Security Awareness</h1>
</div>
			
<!-- Content -->
<div class=" emailContent" id="content">
	<div class="col-xs-12 emailTutorial" id="emailTutorial">
		<h2>Quiz 1 of 4</h2>
		<progress id="emailQuizProgress" value="1" max="4"></progress>
		<!-- View Result, usually empty -->
		<div id="quizResultView"></div>
		
		<div id="emailResultHider">
			<img id="emailQuizImg" class="img-responsive center-block" src="../../images/emailAskLogin.png" alt="">
			<h4 id="emailQuizQuestion">"Why won’t you click the login link of the above email?"</h4>
			
	<!-- Form for quiz -->
	<!-- <form action="index.php" method="post" id="formEmailQuiz"> -->
		<div id="formEmailQuiz">
    		<input class="radioAns" type="radio" name="answer" value="wrong">
    		<label id="answer0">Because the colour of login is different from the rest of the text</label><br>

    		<input class="radioAns" type="radio" name="answer" value="wrong">
    		<label id="answer1">The login keyword is reserved only for programming</label><br>

    		<input class="radioAns" type="radio" name="answer" value="correct">
    		<label id="answer2">The sender may be attempting to steal your login information</label><br>
						
						<input class="radioAns" type="radio" name="answer" value="wrong">
						<label id="answer3">The login should be at the top of the message</label><br>
  		</div>
  		</div>
  			<input class="moreBtn" id="submitSelection" type="submit" value="Submit Selection">
	<!-- </form> -->
	</div>
	</div>
</div>