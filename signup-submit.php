<!DOCTYPE html>
<html>
    <head>
            <title>Signup-Submit</title>
            <meta charset="utf-8" />
            <link href="heart.gif" type="image/gif" rel="shortcut icon" />
            <link href="match.css" type="text/css" rel="stylesheet" />
            <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
    </head>
    <?php
    $name = $_POST['matchname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $personality = $_POST['personality'];
    if(!preg_match('/[IE]{1}[NS]{1}[FT]{1}[JP]{1}/', $personality)) {
        exit("Personality invalid");
    }
    $operatingSystem = $_POST['operating-system'];
    $min = $_POST['min'];
    $max = $_POST['max'];
    if($min > $max) {
        exit("Minimum age cannot exceed maximum age");

    }
    if(empty($name) or empty($age) or empty($personality) or empty($min) or empty($max)) {
        exit("Please fill out all required fields");
    }

    if($gender === "male"){
        $gender = 'M';
    }
    else{
        $gender = "F";
    }

    if($operatingSystem === "mac"){
        $operatingSystem = "Mac OS X";
    }
    elseif($operatingSystem === "windows"){
        $operatingSystem = "Windows";
    }
    else{
        $operatingSystem = "Linux";
    }

    $append_string = $name . ',' . $gender . ',' . $age . ',' . $personality . ',' . $operatingSystem . ',' . $min . ',' . $max . "\n"; 
    file_put_contents("singles.txt", $append_string, FILE_APPEND | LOCK_EX);
    ?>
		<div id="bannerarea">
			<img src="match.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
            <h1>Thank you!</h1>
            <p>Welcome to Match, <?php echo($name)?>!</p>
            <p>Now <a href="matches.php">Login to see your matches!</a></p>
            <div>
            <p>
                This page is for single nerds to meet and date each other!  Type in your personal information and wait for the geek love to begin!  Thank you for using our site.
            </p>
            <p>
                Results and page (C) Copyright Match Inc.
            </p>
            <ul>
                <li>
                    <a href="index.php">
                        <img src="back.gif" alt="icon" />
                        Back to front page
                    </a>
                </li>
            </ul>
        </div>
    </body>
</html>