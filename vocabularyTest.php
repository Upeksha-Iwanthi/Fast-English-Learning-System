 <!DOCTYPE html>
  <html>
    <head>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/quiz-1.js"></script>
	  
	  <!menu bar>
	<nav>
    <div class="nav-wrapper">
      
      <ul id="nav-mobile" class="left hide-on-med-and-down">
	    <li><a href="home.php">Logo</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
		<li><a href="index.html">logout</a></li>
		</ul>
	  
	 <ul class="right hide-on-med-and-down">
		<li><a href="testvocabulary.html"><i class="material-icons">search</i></a></li>
       
        <li><a href="testvocabulary.html"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  
  <div class="card-panel  purple lighten-3"><h6>Test Your Vocabulary!</h6></div>
  
   <ul>
    <a class="waves-effect waves-light btn" href="wordlist.php"> New Words</a>
	<a class="waves-effect waves-light btn" href="Lw.php">Learnt Words</a>
	<a class="waves-effect waves-light btn" href="vocabularyTest.php">Test your vocabulary</a>
	<a class="waves-effect waves-light btn" href="pr.php">Progress</a>
   </ul>
   
   <?php $count = 10; ?>	
   
    <div class="col s12 m7">
    <h2 class="header"></h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://thumb7.shutterstock.com/display_pic_with_logo/193903/363890669/stock-photo-learn-english-young-businesswoman-holding-chalkboard-vertical-image-363890669.jpg">
      </div>
      <div class="card-stacked pink lighten-2">
        <div class="card-content pink lighten-2">
          <p><h5>You can answer the following questions to test your vocabulary knowledge.</h5></p>
        </div>
        <div class="card-action pink lighten-2">
          
		  <p class="question">1. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q1" value="a" id="q1a"><label for="q1a">Answer 1</label><br/>          
			<input class="with-gap" type="radio" name="q1" value="b" id="q1b"><label for="q1b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q1" value="c" id="q1c"><label for="q1c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q1" value="d" id="q1d"><label for="q1d">Answer 4</label><br/>       
			</ul>        


			<p class="question">2. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q2" value="a" id="q2a"><label for="q2a">Answer 1</label><br/>           
			<input class="with-gap" type="radio" name="q2" value="b" id="q2b"><label for="q2b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q2" value="c" id="q2c"><label for="q2c">Answer 3</label><br/>           
			<input class="with-gap" type="radio" name="q2" value="d" id="q2d"><label for="q2d">Answer 4</label><br/>       
			</ul>        

			<p class="question">3. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q3" value="a" id="q3a"><label for="q3a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q3" value="b" id="q3b"><label for="q3b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q3" value="c" id="q3c"><label for="q3c">Answer 3</label><br/>           
			<input class="with-gap" type="radio" name="q3" value="d" id="q3d"><label for="q3d">Answer 4</label><br/>       
			</ul>        

			<p class="question">4. What is the answer to this question?</p>        

			<ul class="answers">           
			<input class="with-gap" type="radio" name="q4" value="a" id="q4a"><label for="q4a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q4" value="b" id="q4b"><label for="q4b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q4" value="c" id="q4c"><label for="q4c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q4" value="d" id="q4d"><label for="q4d">Answer 4</label><br/>        
			</ul>        

			<p class="question">5. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q5" value="a" id="q5a"><label for="q5a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q5" value="b" id="q5b"><label for="q5b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q5" value="c" id="q5c"><label for="q5c">Answer 3</label><br/>           
			<input class="with-gap" type="radio" name="q5" value="d" id="q5d"><label for="q5d">Answer 4</label><br/>        
			</ul>        

			<p class="question">6. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q6" value="a" id="q6a"><label for="q6a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q6" value="b" id="q6b"><label for="q6b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q6" value="c" id="q6c"><label for="q6c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q6" value="d" id="q6d"><label for="q6d">Answer 4</label><br/>        
			</ul>       

			<p class="question">7. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q7" value="a" id="q7a"><label for="q7a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q7" value="b" id="q7b"><label for="q7b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q7" value="c" id="q7c"><label for="q7c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q7" value="d" id="q7d"><label for="q7d">Answer 4</label><br/>        
			</ul>        

			<p class="question">8. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q8" value="a" id="q8a"><label for="q8a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q8" value="b" id="q8b"><label for="q8b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q8" value="c" id="q8c"><label for="q8c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q8" value="d" id="q8d"><label for="q8d">Answer 4</label><br/>       
			</ul>        

			<p class="question">9. What is the answer to this question?</p>        

			<ul class="answers">            
			<input class="with-gap" type="radio" name="q9" value="a" id="q9a"><label for="q9a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q9" value="b" id="q9b"><label for="q9b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q9" value="c" id="q9c"><label for="q9c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q9" value="d" id="q9d"><label for="q9d">Answer 4</label><br/>        
			</ul>        

			<p class="question">10. What is the answer to this question?</p>        

			<ul class="answers">           
			<input class="with-gap" type="radio" name="q10" value="a" id="q10a"><label for="q10a">Answer 1</label><br/>            
			<input class="with-gap" type="radio" name="q10" value="b" id="q10b"><label for="q10b">Answer 2</label><br/>            
			<input class="with-gap" type="radio" name="q10" value="c" id="q10c"><label for="q10c">Answer 3</label><br/>            
			<input class="with-gap" type="radio" name="q10" value="d" id="q10d"><label for="q10d">Answer 4</label><br/>        
			</ul>        

			<br/>
			<div id="results">            
			Show me the answers!       
			</div>                

			<div id="category1">            
			<p>              
			<strong>Question 1:</strong> The correct answer is the <strong>Answer 1</strong>.</p>        
			</div>        

			<div id="category2">            
			<p>              
			<strong>Question 2:</strong> The correct answer is <strong>Answer 2</strong>.</p>        
			</div>        

			<div id="category3">            
			<p>                
			<strong>Question 3:</strong> The correct answer is <strong>Answer 3</strong>.</p>        
			</div>        

			<div id="category4">            
			<p>               
			<strong>Question 4:</strong> The correct answer is <strong>Answer 4</strong>.</p>        
			</div>        

			<div id="category5">            
			<p>                
			<strong>Question 5:</strong> The correct answer is <strong>Answer 1</strong>.</p>        
			</div>        

			<div id="category6">            
			<p>                
			<strong>Question 6:</strong> The correct answer is <strong>Answer 2</strong>.</p>        
			</div>        

			<div id="category7">            
			<p>                
			<strong>Question 7:</strong> The correct answer is <strong>Answer 3</strong>.</p>        
			</div>        

			<div id="category8">            
			<p>               
			<strong>Question 8:</strong> The correct answer is <strong>Answer 4</strong>.</p>        
			</div>        

			<div id="category9">           
			<p>               
			<strong>Question 9:</strong> The correct answer is <strong>Answer 1</strong>.</p>        
			</div>        

			<div id="category10">            
			<p>                
			<strong>Question 10:</strong> The correct answer is <strong>Answer 2</strong>.</p>        
			</div>        

			<div id="category11">            
			<p>                
			You answered them all right!</p>        
			</div>
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>
  </div>
	
	<!..add footer..>
	<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">FEL</h5>
                <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Coverage</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Bug</a></li><br><br><br>
				<li><h5 class="white-text">Help</h5></li>
                
                  <li><a class="grey-text text-lighten-3" href="#!">Help Center</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Get Started</a></li>
				
				
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">About</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terms and Services</a></li><br><br>
				  <li><h5 class="white-text">Connect</h5></li>
                
                  <li><a class="grey-text text-lighten-3" href="#!">Face Book</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
				
				  
                </ul>
              </div>
			  
			 
			  
			  
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

	
	  
	  
	
	<script>
		

$(document).ready(function() 
{    $("#results").click(function() {                

if (!$("input[@name=q1]:checked").val() ||            
!$("input[@name=q2]:checked").val() ||            
!$("input[@name=q3]:checked").val() ||            
!$("input[@name=q4]:checked").val() ||            
!$("input[@name=q5]:checked").val() ||            
!$("input[@name=q6]:checked").val() ||            
!$("input[@name=q7]:checked").val() ||            
!$("input[@name=q8]:checked").val() ||            
!$("input[@name=q9]:checked").val() ||            
!$("input[@name=q10]:checked").val()            
) {            
alert("You're not done yet!");        
}        

else {            
var cat1name = "1";            
var cat2name = "2";            
var cat3name = "3";            
var cat4name = "4";            
var cat5name = "5";            
var cat6name = "6";            
var cat7name = "7";            
var cat8name = "8";            
var cat9name = "9";            
var cat10name = "10";            
var cat11name = "None";            
            

var cat1 = ($("input[@name=q1]:checked").val() != "a"); 
           
var cat2 = ($("input[@name=q2]:checked").val() != "b");  

var cat3 = ($("input[@name=q3]:checked").val() != "c");  

var cat4 = ($("input[@name=q4]:checked").val() != "d");  

var cat5 = ($("input[@name=q5]:checked").val() != "a"); 

var cat6 = ($("input[@name=q6]:checked").val() != "b");  

var cat7 = ($("input[@name=q7]:checked").val() != "c"); 

var cat8 = ($("input[@name=q8]:checked").val() != "d");  

var cat9 = ($("input[@name=q9]:checked").val() != "a"); 

var cat10 = ($("input[@name=q10]:checked").val() != "b");  

var cat11 = (!cat1 && !cat2 && !cat3 && !cat4 && !cat5 && !cat6 && !cat7 && !cat8 && !cat9 && !cat10); var categories = [];                        

var count= <?php echo $count ?>;

if (cat1) { categories.push(cat1name)  };            
if (cat2) { categories.push(cat2name) };            
if (cat3) { categories.push(cat3name) };            
if (cat4) { categories.push(cat4name) };            
if (cat5) { categories.push(cat5name) };            
if (cat6) { categories.push(cat6name) };            
if (cat7) { categories.push(cat7name) };            
if (cat8) { categories.push(cat8name) };            
if (cat9) { categories.push(cat9name)};            
if (cat10) { categories.push(cat10name) };            
if (cat11) { categories.push(cat11name) };   

// send numberOfBadges variable to page badgeCount.php
$.post('http://localhost/materialize2.0/quizResult.php', { "count" : count});                     

var catStr = 'You answered the following questions incorrectly: ' + categories.join(', ') + '';                     
$("#categorylist").text(catStr);                        
$("#categorylist").show("slow");            

if (cat1) { $("#category1").show("slow"); };            
if (cat2) { $("#category2").show("slow"); };            
if (cat3) { $("#category3").show("slow"); };            
if (cat4) { $("#category4").show("slow"); };            
if (cat5) { $("#category5").show("slow"); };            
if (cat6) { $("#category6").show("slow"); };            
if (cat7) { $("#category7").show("slow"); };            
if (cat8) { $("#category8").show("slow"); };            
if (cat9) { $("#category9").show("slow"); };            
if (cat10) { $("#category10").show("slow"); };            
if (cat11) { $("#category11").show("slow"); };
{ $("#closing").show("slow"); };
}
    });}
	
		
	
	
	);
	
	
	
	
	
	
	</script>  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </body>
  </html>
        