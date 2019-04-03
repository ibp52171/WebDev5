<!DOCTYPE html>
<html>
    <head>
            <title>Matches</title>
            <meta charset="utf-8" />
            <link href="heart.gif" type="image/gif" rel="shortcut icon" />
            <link href="match.css" type="text/css" rel="stylesheet" />
            <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
    </head>
	<body>
		<div id="bannerarea">
			<img src="match.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
        <?php
error_reporting(0);
$imageArray;
$name = $_GET['name'];
echo("<h1> Matches for " . $name . "</h1>");
if(empty($name)) {
    exit("Please enter a name");
}
$txtFile = file_get_contents("singles.txt");
$users = explode("\n", $txtFile);
$matching_user;
foreach($users as $user => $data){
    $tempArray = explode(",", $data);
    if($tempArray[0] === $name){
        $matching_user = $tempArray;
        break;
    }
}
if($matching_user[0] != $name){
    exit("The entered name is not registered. Please try again...");
}
else{
    foreach($users as $user => $data){
        $tempArray = explode(",", $data);
        if(($matching_user[1] != $tempArray[1]) && ($matching_user[2] >= $tempArray[5] && $matching_user[2] <= $tempArray[6]) && ($tempArray[2] >= $matching_user[5] && $tempArray[2] <= $matching_user[6]) && ($matching_user[4] === $tempArray[4]))
        {
            $comp1 = str_split($matching_user[3]);
            $comp2 = str_split($tempArray[3]);
            for($i = 0; $i < 4; $i++){
                if($comp1[$i] === $comp2[$i]){
                    $name1=explode(" ", $tempArray[0]);
                        $image;
                        if(sizeof($name1)>1){
                            $image="Images/" . strtolower($name1[0]) . "_" . strtolower($name1[1]) . ".jpg";
                        }
                        else{
                            $image="Images/" . strtolower($name1[0]) . ".jpg";
                        }
                        $gender=$tempArray[1];
                        $personality=$tempArray[3];
                        $opSystem=$tempArray[4];
                        $age=$tempArray[2];
                        echo(" <div class= \"match\">
                        <p><img src=" . $image . "> $name1[0] $name1[1]</p>
                        <ul>
                        <li>
                            <strong>Gender:  " . $gender . "</strong>
                        </li>
                        <li>
                            <strong>Age: " . $age . "</strong>
                            
                        </li>
                        <li>
                            <strong>Personality Type: " . $personality . "</strong>
                            
                        </li>
                        <li>
                            <strong>OS: " . $opSystem . "</strong>
                            </li>
                        </ul>
                    </div>");
                    break;
                }
            }
        }
    }
}
?>
</body>
    <ul class="match">

    </ul>
</html> 
</html>
