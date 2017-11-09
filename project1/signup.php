<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Alex Lee">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup Page</title>
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

        <label for="inputPhoneNum">Phone Number:</label>
        <input type="text" class="form-control" id="inputPhoneNum" placeholder="Enter Phone Number (ex. 123-456-7890)" name="inputPhoneNum" required />

        <label for="inputBirthday">Birthday:</label>
        <input type="date" class="form-control" id="inputBirthday" placeholder="Enter Birthday (mm/dd/yyyy)" name="inputBirthday" required />

        <div class="gender-radio">
        <label class="gender-label">Gender (Choose an option):</label><br>
        	<label><input type="radio" name="optradio" required>Male</label><br>
        	<label><input type="radio" name="optradio" required>Female</label>
        </div>

        <button class="btn-lg btn-primary btn-block" type="submit" id="submitButton">Complete Registration</button>
    </form>

</div> <!-- /container -->

<img src="http://rs402.pbsrc.com/albums/pp101/alexis621rose/gifs/poptartcat2plz.gif~c200" class="img-cat" alt="Nyan Cat">

</body>
</html>