<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $link = mysqli_connect("localhost", "root", "", "assignment3_2020600");

    if($link === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT INTO `formdata`(`Name`, `Email`, `Feedback`) VALUES ('$name','$email','$feedback')";
    
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    }
    else{
        echo "ERROR: Could not submit information.";
    }

    mysqli_close($link);
?>

