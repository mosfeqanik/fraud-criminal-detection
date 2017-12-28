<html >

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="container">
            <?php include("header.php"); ?>                 
	<div id="page-wrap">

        <h1>Results </h1>
        
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") 
                { $totalCorrect=$totalCorrect+10; }
            if ($answer1 == "B") 
                { $totalCorrect=$totalCorrect+20; }
            if ($answer1 == "C") 
                { $totalCorrect=$totalCorrect+15; }
            if ($answer1 == "D") 
                { $totalCorrect=$totalCorrect+10; }
            if ($answer2 == "A") 
                { $totalCorrect=$totalCorrect+20; }
            if ($answer2 == "B") 
                { $totalCorrect=$totalCorrect+15; }
            if ($answer2 == "C") 
                { $totalCorrect=$totalCorrect+5; }
            if ($answer2 == "D") 
                { $totalCorrect=$totalCorrect+0; }
            if ($answer3 == "A") 
                { $totalCorrect=$totalCorrect+20; }
            if ($answer3 == "B") 
                { $totalCorrect=$totalCorrect+0; }
            if ($answer3 == "C") 
                { $totalCorrect=$totalCorrect+20; }
            if ($answer3 == "D") 
                { $totalCorrect=$totalCorrect+0; }
            if ($answer4 == "A") 
                { $totalCorrect=$totalCorrect+20; }
            if ($answer4 == "B") 
                { $totalCorrect=$totalCorrect+0; }
            if ($answer4 == "C") 
                { $totalCorrect=$totalCorrect+10; }
            if ($answer4 == "D") 
                { $totalCorrect=$totalCorrect+15; }
            if ($answer5 == "A") 
                { $totalCorrect=$totalCorrect+20; }
            if ($answer5 == "B") 
                { $totalCorrect=$totalCorrect+0; }
            if ($answer5 == "C") 
                { $totalCorrect=$totalCorrect+15; }
            if ($answer5 == "D") 
                { $totalCorrect=$totalCorrect+10; }
            
            echo "<div id='results'>$totalCorrect % Criminal </div>";
        ?>
    </div>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <Br>
    <?php include("footer.php"); ?>
	</div>
	

</body>

</html>