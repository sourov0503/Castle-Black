<?php
$connection = mysqli_connect('localhost','root','','castleblack','3306');
if(isset($_POST['book'])){
    $firstName=$_POST['first_name'];
    $lastName=$_POST['last_name'];
    $email=$_POST['Email'];
    $tableType=$_POST['table_type'];
    $gaustNumber =$_POST['guest_number'];
    $placement=$_POST['Placement'];
    $date=$_POST['Date'];
    $time=$_POST['Time'];
    $note=$_POST['Note'];

    $request = "insert into booking(firstName,lastName,email,tableType,
    guestNumber,placement,date,time,note) values ('$firstName'
    ,'$lastName','$email','$tableType ',
    '$gaustNumber','$placement','$date','$time','$note')";

    mysqli_query($connection,$request);
    header('location:booking.php');
}
?>