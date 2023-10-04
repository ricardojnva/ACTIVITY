<?php
include("db_config.php");

$Person_Id = "Person_Id";
$Last_Name = "Last_Name";
$First_Name = "First_Name";
$Middle_Name = "Middle_Name";
$Extension_Name = "Extension_Name";
$Sex = "Sex";
$Birth_Date = "Birth_Date";
$Age = "Age";
$Home_Address = "Home_Address";
$Civil_Status = "Civil_Status";
$Religion = "Religion";
$Nationality = "Nationality";
$Boarding_Address = "Boarding_Address";
$Contact_Number = "Contact_Number";
$Email_Address = "Email_Address";


if (array_key_exists('search_user', $_POST)) {
    $Person_Id = $_POST['Person_Id'];

    $SearchUserAccountQuery = "SELECT * FROM `person` WHERE `Person_Id` = '$Person_Id'";

    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    
    while ($row = mysqli_fetch_object($result)) {
   
    $Last_Name = $row->Last_Name;
    $First_Name = $row->First_Name;
    $Middle_Name = $row->First_Name;
    $Extension_Name = $row->Extension_Name;
    $Sex = $row->Sex;
    $Birth_Date= $row->Birth_Date;
    $Age = $row->Age;
    $Home_Address = $row->Home_Address;
    $Civil_Status = $row->Civil_Status;
    $Religion = $row->Religion;
    $Nationality = $row->Nationality;
    $Boarding_Address = $row->Boarding_Address;
    $Contact_Number = $row->Contact_Number;
    $Email_Address = $row->Email_Address;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Person_Id" name="Person_Id">
        <label for="Person_Id">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>
    <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $Last_Name ?>">
    <label for="Last_Name">Last_Name</label><br>

    <input type="text" id="First_Name" name="First_Name" value="<?php echo $First_Name ?>">
    <label for="First_Name">First_Name</label><br>
    
    <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $Middle_Name ?>">
    <label for="Middle_Name">Middle_Name</label><br>

    <input type="text" id="Extension_Name" name="Extension_Name" value="<?php echo $Extension_Name ?>">
    <label for="Extension_Name">Extension_Name</label><br>

    <input type="text" id="Sex" name="Sex" value="<?php echo $Sex ?>">
    <label for="sex">Sex</label><br>

    <input type="text" id="Birth_Date" name="Birth_Date" value="<?php echo $Birth_Date ?>">
    <label for="Birth_Date">Birth_Date</label><br>

    <input type="text" id="Age" name="Age" value="<?php echo $Age ?>">
    <label for="age">Age</label><br>

    <input type="text" id="Home" name="Home_Address" value="<?php echo $Home_Address ?>">
    <label for="home">Home_Address</label><br>

    <input type="text" id="Civil_Status" name="Civil_Status" value="<?php echo $Civil_Status ?>">
    <label for="Civil_Status">Civil_Status</label><br>

    <input type="text" id="Nationality" name="Nationality" value="<?php echo $Nationality ?>">
    <label for="Nationality">Nationality</label><br>

    <input type="text" id="Religion" name="Religion" value="<?php echo $Religion ?>">
    <label for="Religion">Religion</label><br>

    <input type="text" id="Boarding_Address" name="Boarding_Address" value="<?php echo $Boarding_Address ?>">
    <label for="Boarding_Address">boarding_address</label><br>
    
    <input type="text" id="Contact_Number" name="Contact_Number" value="<?php echo $Contact_Number ?>">
    <label for="Contact_Number">Contact_Number</label><br>

    <input type="text" id="Email_Address" name="Email_Address" value="<?php echo $Email_Address ?>">
    <label for="Email_Address">Email_Address</label><br>


</body>
</html>