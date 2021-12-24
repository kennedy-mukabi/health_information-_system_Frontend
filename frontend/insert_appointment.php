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
        $patient_name =  $_REQUEST['patient_name'];
        $age = $_REQUEST['age'];
        $doctor_name = $_REQUEST['doctor_name'];
        $department = $_REQUEST['department'];
        $appointment_date = $_REQUEST['appointment_date'];
        $appointment_time = $_REQUEST['appointment_time'];
        $ap_status = $_REQUEST['ap_status'];

       

          

        // Performing insert query execution

        // here our table name is college

        $sql = "INSERT INTO appointments  VALUES ('$id','$patient_name','$doctor_name','$department','$appointment_date' $appointment_time,

            '$age', '$ap_status')";

          

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