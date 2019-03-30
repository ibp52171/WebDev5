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
                    for($j = 0; $j < 7; $j++)    {
                        echo($tempArray[$j]);
                    }
                    echo("\n");
                    break;
                }
            }
        }
    }
}
?>