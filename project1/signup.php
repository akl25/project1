<?php

$hostname = "sql2.njit.edu";
$username = "akl25";
$password = "9TCE4kP41";
$conn = NULL;
try 
{
    $conn = new PDO("mysql:host=$hostname;dbname=akl25",
    $username, $password);
}
catch(PDOException $e)
{
    // echo "Connection failed: " . $e->getMessage();
    http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage().'<br>');
}

// Runs SQL query and returns results (if valid)
function runQuery($query) {
    global $conn;
    try {
        $q = $conn->prepare($query);
        $q->execute();
        $results = $q->fetchAll();
        $q->closeCursor();
        return $results;    
    } catch (PDOException $e) {
        http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage()."<br>");
    }     
}

function http_error($message) 
{
    header("Content-type: text/plain");
    die($message);
}

$fname = $_POST["inputFirstName"];
$lname = $_POST["inputLastName"];
$email = $_POST["inputEmail"];
$password = $_POST["inputPassword"];
$phone = $_POST["inputPhoneNum"];
$birthday = $_POST["inputBirthday"];
$gender = $_POST["inputFirstName"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Alex Lee">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	 <!-- Bootstrap core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/signup.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <form class="signup-form">
    	<h2 class="signup-heading-form">Please register by entering your personal information</h2>
        <label for="inputFirstName">First Name:</label>
        <input type="text" class="form-control" id="inputFirstName" placeholder="Enter First Name" name="inputFirstName" required />

        <label for="inputLastName">Last Name:</label>
        <input type="text" class="form-control" id="inputLastName" placeholder="Enter Last Name" name="inputLastName" required />

        <label for="inputEmail">Email:</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email Address" name="inputEmail" required />

        <label for="inputPassword">Password:</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Enter Password" name="inputPassword" required />

        <label for="inputPhoneNum">Phone Number:</label>
        <input type="text" class="form-control" id="inputPhoneNum" placeholder="Enter Phone Number (ex. 123-456-7890)" name="inputPhoneNum" required />

        <label for="inputBirthday">Birthday:</label>
        <input type="date" class="form-control" id="inputBirthday" placeholder="Enter Birthday (mm/dd/yyyy)" name="inputBirthday" required />

        <div class="gender-radio">
        <label class="gender-label">Gender (Choose an option):</label><br>
        	<label for="male"><input type="radio" name="gender" id="male" value="male" required>Male</label>
        	<label for="female"><input type="radio" name="gender" id="female" value="female" required>Female</label>
            <label for="other"><input type="radio" name="gender" id="other" value="other" required>Other</label>
        </div>

        <button class="btn-lg btn-primary btn-block" type="submit" id="submitButton">Complete Registration</button>
    </form>

</div> <!-- /container -->

<img src="http://rs402.pbsrc.com/albums/pp101/alexis621rose/gifs/poptartcat2plz.gif~c200" class="img-cat" alt="Nyan Cat">

</body>
</html>