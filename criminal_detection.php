<html >

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Criminal detection</title>
	
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="container">
            <?php include("header.php"); ?>                 
	<div id="page-wrap">

		<h1>Please Give Information</h1>
		
		<form action="grade1.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>What is person's crime ?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" checked="A" />
                        <label for="question-1-answers-A">A) stealing </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Murder</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) fraud</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) kidnapping</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>what is The amount of cases on criminal?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" checked="A" />
                        <label for="question-2-answers-A">A) 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 0</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>what is the statement of criminal?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" checked="A" />
                        <label for="question-3-answers-A">A) I am the criminal </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) I am not the criminal </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) I was pressurized</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) i am the Witness</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>what is the police statement?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" checked="A" />
                        <label for="question-4-answers-A">A) He is the criminal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) He is not the criminal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) He may not be the criminal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) He may  be the criminal</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>what is the lawyer's statement?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" checked="A" />
                        <label for="question-5-answers-A">A)He is the criminal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)He is not the criminal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)He may not be the criminal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) He may be the criminal</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
    <?php include("footer.php"); ?>
    </div>
	
	

</body>

</html>