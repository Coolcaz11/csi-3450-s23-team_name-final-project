<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <h1>Sky Sights</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">:)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only ">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="aboutus.html ">About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="charters.html">Charters</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="staffdirectory.html">Staff Directory</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="licenses.html">License + Certification</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="erm.html ">Project Model ERM</a>
                </li>


            </ul>

        </div>
    </nav>
</head>


<body>
    <h1>Staff Directory</h1>

    <div id="staff-search-container">
	<form method="get" action="EMP.php">
        <label class="search" for="staff-search">Search for an employee:</label>
        <input type="text" id="search-input" name="emp" placeholder="Enter employee name...">
		<br>
        <p><input type="submit" name="submit" value="Submit"></p>
    </form>
    </div>

    <div id="staff-results">
        <!-- results displayed here -->
    </div>

</body>

</html>

<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "final";


$con = mysqli_connect($server, $user, $pw, $db);
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit;
}
$result = mysqli_query($con,"SELECT * FROM `employees` WHERE EMP_FNAME='$_GET[emp]'
 OR EMP_LNAME='$_GET[emp]';");
if($result)
{
while ($row = mysqli_fetch_array($result))
{
echo $row['EMP_FNAME'] . "   " . $row['EMP_LNAME'] .
 "<br>Date of birth:" . $row['EMP_DOB'] . "<br>Phone number:" . $row['EMP_PHONE'];
echo "<br>";
}
}
else
{
echo "Error";

}



mysqli_close($con);

?>