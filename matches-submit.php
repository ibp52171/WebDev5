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
$name = $_GET['name'];
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
    echo("The entered name is not registered. Please try again...");
}
else{
    foreach($users as $user => $data){
        $tempArray = explode(",", $data);
        if(($matching_user[1] != $tempArray[1]) && ($matching_user[2] >= $tempArray[5] && $matching_user[2] <= $tempArray[6]) && ($tempArray[2] >= $matching_user[5] && $tempArray[2] <= $matching_user[6]) && ($matching_user[4] === $tempArray[4])){
            // $comp1 = explode("", $matching_user[3]);
            $comp1 = str_split($matching_user[3]);
            // $comp2 = explode("", $tempArray[3]);
            $comp2 = str_split($tempArray[3]);
            for($i = 0; $i < 4; $i++){
                if($comp1[$i] === $comp2[$i]){
                    // for($j = 0; $j < 7; $j++)    {
                    //     echo($tempArray[$j]);
                    // }
                    $name1=explode(" ", $tempArray[0]);
                        $image;
                        if(sizeof($name1)>1){
                            $image="Images/" . strtolower($name1[0]) . "_" . strtolower($name1[1]) . ".jpg";
                        }
                        else{
                            $image="Images/" . strtolower($name1[0]) . ".jpg";
                        }
                        // echo("<ul class=\"match\">");
                        // echo("<img src=" . $image . ">");
                        // echo("</ul>");
                        echo("<ul class=\"match\">
                        <li class=\"match\">
                        <img src=" . $image . ">
                        </li>
                        <li class=\"match\">
                        <?php echo(\"$name\" ?>
                        </li>
                        <li class=\"match\">
                            <strong>Name:</strong>
                        </li>
                        <li class=\"match\">
                            <strong>Gender:</strong>
                        </li>
                        <li class=\"match\">
                            <strong>Age:</strong>
                            
                        </li>
                        <li class=\"match\">
                            <strong>Personality Type:</strong>
                            
                        </li>
                        <li class=\"match\">
                            <strong>OS:</strong>
                            </li>
                        </ul>");
                    echo("\n");
                    break;
                }
            }
        }
    }
}
?>
</html>
