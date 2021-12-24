<!DOCTYPE html>

<html>

  

<head>

    <title>Insert Page page</title>

</head>

  

<body>

    <center>

        <?php

  

        $conn = mysqli_connect("localhost", "root", "", "e-clinic");

          

        // Check connection

        if($conn === false){

            die("ERROR: Could not connect. " 

                . mysqli_connect_error());

        }

          

        // Taking all 5 values from the form data(input)
        $id = $_REQUEST['id'];
        $username =  $_REQUEST['username'];
        $age = $_REQUEST['age'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $sickness = $_REQUEST['sickness'];

       

          

        // Performing insert query execution

        // here our table name is college

        $sql = "INSERT INTO patients  VALUES ('$id','$username', 

            '$age','$address','$phone','$email','$sickness')";

          

        if(mysqli_query($conn, $sql)){

            echo "<h3>data stored in a database successfully." 

                . " Please browse your localhost php my admin" 

                . " to view the updated data</h3>"; 

  

            echo nl2br("\n$first_name\n $last_name\n "

                . "$gender\n $address\n $email");

        } else{

            echo "ERROR: Hush! Sorry $sql. " 

                . mysqli_error($conn);

        }

          

        // Close connection

        mysqli_close($conn);

        ?>

    </center>

</body>

  

</html>