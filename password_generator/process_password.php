<?php

//check if the form was submitted
if ($_SERVER ["REQUEST_METHOD"] == "POST"){


    //retrieve all the inputs

    $word1 = $_POST['Word1'];
    $word2 = $_POST['Word2'];
    $word3 = $_POST['Word3'];
    $word4 = $_POST['Word4'];

}

//checking if all the fields were filled

if(empty($word1) || empty($word2) || empty($word3) || empty($word4))
{
    die("All four words are required");
}


// taking all of the inputs as one string

$words = [$word1,$word2, $word3, $word4];

//checking if all the words are letters and withing the range
foreach($words as $word){
    if(!ctype_alpha($word)){
        die("All four words should only contain letters");
    }

    if(strlen ($word) <4 || strlen ($word) >7){
        die("All four words should be within 4 to 7 charecters long");
    }

}

//Generate passwords

$passwords = [];
foreach($words as $word){
    $uppercase = strtoupper($word); // making them uppercase
    $shuffle = str_shuffle ($uppercase); // suffle the words
    $passwords = $shuffle;
}


//printing the values
echo "<h1>Suggeested Passwords:</h1>" ; 

foreach($passwords as $password){
    echo "<li>$password</li>" ; 
}

else{
    echo "Invalid Request Method";
}


?>