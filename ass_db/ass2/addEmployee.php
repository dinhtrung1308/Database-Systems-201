<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add new employee infor</h1>
    <form action="addEmployee.php" style="margin-left: 40%;" method="post">
		<label for="EID">ID:</label><br>
        <input type="text" name="EID"  placeholder="John"><br><br>
	
        <label for="EName">First name:</label><br>
        <input type="text" name="EName"  placeholder="John"><br><br>


        <label for="DOB">Date of Birth:</label><br>
        <input type="date" name="DOB" ><br><br>

        <label for="EPhone">Phone number:</label><br>
        <input type="number" name="EPhone" placeholder="0825001927"><br><br>

        <label for="EAddress">Address:</label><br>
        <input type="text" name="EAddress" placeholder="12 Ly Thuong Kiet, Quan 10, Thanh pho Ho Chi Minh"><br><br>
		
		<label for="Salary">Salary:</label><br>
        <input type="text" name="Salary" placeholder="185"><br><br>	
		
		<label for="BID">BID:</label><br>
        <input type="text" name="BID" placeholder="185"><br><br>	
		
        <label for="Gender">Gender:</label>
        <select name="Gender" name="Gender">
            <option value=1 selected>1</option>
            <option value=0>0</option>
			
		
        </select><br><br>
        
        

        <input name="submit" type="submit" value="Submit">
    </form> 
</body>
</html>

<?php
error_reporting(0);

require("connection.php");


if (!isset($_POST['submit'])) {
    // echo '<script>alert("This ID is  valid")</script>';
    exit;
}

$EID = isset($_POST['EID']) ? $_POST['EID'] : '';
$EName = isset($_POST['EName']) ? $_POST['EName'] : '';
$DOB = isset($_POST['DOB']) ? $_POST['DOB']: '2000-01-01';
$EPhone = isset($_POST['EPhone']) ? $_POST['EPhone']: '';
$EAddress = isset($_POST['EAddress']) ? $_POST['EAddress']: '';
$Gender = isset($_POST['Gender']) ? $_POST['Gender']: 1;
$Salary = isset($_POST['Salary']) ? $_POST['Salary']: 1;
$BID = isset($_POST['BID']) ? $_POST['BID'] : '';


$sql = "INSERT INTO EMPLOYEE (EID, EName, Gender, EAddress, EPhone, Salary, DOB, BID)
VALUES ('$EID', '$EName', '$Gender', '$EAddress', '$EPhone', '$Salary', '$DOB', '$BID');";

if (mysqli_multi_query($conn, $sql)) {
    echo '<script>alert("Add employee successful")</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>

