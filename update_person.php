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


   ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Person ID</label>
    <input type="text" id="person_ID" name="Person_ID">

        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="Extension_Name" name="Extension_Name">

        <label>Sex</label><br>
        <select name="Sex" id="Sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="Birth_Date" name="Birth_Date">

        <label>Age</label><br>
        <input type="number" id="Age" name="Age">

        <label>Home Address</label><br>
        <input type="text" id="Home_Address" name="Home_Address">

        <label>Civil Status</label><br>
        <select name="Civil_Status" id="Civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="Nationality" name="Nationality">

        <label>Religion</label><br>
        <input type="text" id="Religion" name="Religion">

        <label>Boarding Address</label><br>
        <input type="text" id="Boarding_Address" name="Boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="Contact_Number" name="Contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="Email_Address" name="Email_Address">
<button type="submit"  name="update_person">update person</button>
</form>


<?php

if (array_key_exists('add_Student',$_POST))
{
    $Person_ID = isset($_POST['Person_ID']) ? mysqli_real_escape_string($con, $_POST['Person_ID']) : "";

    $Last_Name = mysqli_real_escape_string($con, $_POST['Last_Name']);
    $First_Name = mysqli_real_escape_string($con, $_POST['First_Name']);
    $Middle_Name = mysqli_real_escape_string($con, $_POST['Middle_Name']);
    $Extension_Name = mysqli_real_escape_string($con, $_POST['Extension_Name']);
    $Sex = mysqli_real_escape_string($con, $_POST['Sex']);
    $Birth_Date = mysqli_real_escape_string($con, $_POST['Birth_Date']);
    $Age = mysqli_real_escape_string($con, $_POST['Age']);
    $Home_Address = mysqli_real_escape_string($con, $_POST['Home_Address']);
    $Civil_Status = mysqli_real_escape_string($con, $_POST['Civil_Status']);
    $Nationality = mysqli_real_escape_string($con, $_POST['Nationality']);
    $Religion = mysqli_real_escape_string($con, $_POST['Religion']);
    $Boarding_Address = mysqli_real_escape_string($con, $_POST['Boarding_Address']);
    $Contact_Number = mysqli_real_escape_string($con, $_POST['Contact_Number']);
    $Email_Address = mysqli_real_escape_string($con, $_POST['Email_Address']);

    $updateAccountQuery = "UPDATE person SET Last_Name='$Last_Name', First_Name='$First_Name', Middle_Name='$Middle_Name', Extension_Name='$Extension_Name', Sex='$Sex', Birth_Date='$Birth_Date', Age='$Age',
     Home_Address='$Home_Address', Civil_Status='$Civil_Status', Nationality='$Nationality', Religion='$Religion', Boarding_Address='$Boarding_Address', Contact_Number='$Contact_Number', Email_Address='$Email_Address' WHERE Person_Id='$Person_ID'";
    $query_run = mysqli_query($con, $updateAccountQuery);

    if($query_run)
    {
        $_SESSION['message'] = "Person Updated Successfully";
        
    }
    else
    {
        $_SESSION['message'] = "Person Not Updated";
        header("Location: update_person.php"); 
        exit(0);
    }
}
