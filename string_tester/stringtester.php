<?php 
    //set default value of variables for initial page load
    if (!isset($name)) { $name = ''; } 
    if (!isset($email)) { $email = ''; } 
    if (!isset($phoneNumber)) { $phoneNumber = ''; } 
    


?> 
<!DOCTYPE html>
<html>
<head>
    <title>String Tester</title>
    
</head>

<body>
    <main>
    <h1>String Tester</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form method="post">

        <div id="data">
            <label>Name</label>
            <input type="text" name="name"
                   value="<?php echo htmlspecialchars($name); ?>">
            <br>

            <label>Email:</label>
            <input type="text" name="email"
                   value="<?php echo htmlspecialchars($email); ?>">
            <br>

            <label>Phone Number:</label>
            <input type="text" name="phoneNumber"
                   value="<?php echo htmlspecialchars($phoneNumber); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit"><br>

        </div>     

<br>

<br>
        
    </form>    
      
<?php 



// get the data from the form
$name = filter_input(INPUT_POST, 'name',
FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',
FILTER_SANITIZE_STRING);
$phoneNumber = filter_input(INPUT_POST, 'phoneNumber',
FILTER_SANITIZE_STRING);



// validate name
if ($name === FALSE ) {
$error_message = 'Name must be a filled up.'; 
} else if ( $email === FALSE )  {
$error_message = 'Email must be a filled up.'; 
} // validate phoneNumber
 else if ( $phoneNumber === FALSE ) {
$error_message = 'Phone must be a valid whole number.';
} else {
$error_message = ''; }





if ($name === false || $email === false || $phoneNumber === false) {
    echo "Invalid input. Please enter valid info.";
    exit;
}







?>

<form action="">

<div> 
        <p> Hello first! </p>
        <p> Thank you for entering the data: </p>
        <label>Name : </label>
        <span><?php echo htmlspecialchars($name); ?></span><br />

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label> Phone number:</label>
        <span><?php echo htmlspecialchars($phoneNumber); ?></span><br />

        <p> Area code:123 </p>
        <p> City:Vancouver </p>
        <br> 

        
        <p>This testing was done on <?php echo date('m/d/Y'); ?>.</p>
        </div>



</form>
  

<br>
<br>
<br>


    </main>
</body>
</html>