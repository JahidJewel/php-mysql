<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Tester</title>
</head>
<body>
    <h1>Palindrome Tester</h1>
    <form action="" method = 'post'>
        <label for="tester"> Enter your Word: </label>
        <input type="text" id = "tester" name = "tester" required>
        <br><br>

        <button type = "reset">Reset</button>
        <button type = "submit">Submit</button>
    </form>

<?php
if($_SERVER["REQUEST_METHOD"]) =="POST" {
    $tester = $_POST['tester'];




    $reversed = strrev($tester);

if($tester == $reversed){
    echo "<p>" .htmlspecialchars($tester) " is a perfect palindrome" "</p>";
    echo "<p>" .htmlspecialchars($tester) " is a standard palindrome" "</p>";
}

}



?>




</body>
</html>