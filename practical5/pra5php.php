<?php
    $fname = filter_input(INPUT_POST, 'fname');
    $mname = filter_input(INPUT_POST, 'mname');
    $lname = filter_input(INPUT_POST, 'lname');
    $prof = filter_input(INPUT_POST, 'prof');
    $dept_name = filter_input(INPUT_POST, 'dept_name');
    $gender = filter_input(INPUT_POST, 'gender');
    $clg_name = filter_input(INPUT_POST, 'clg_name');
    $group_name = filter_input(INPUT_POST, 'group_name');
    $mobile = filter_input(INPUT_POST, 'mobile');
    $E_mail = filter_input(INPUT_POST, 'E_mail');
    $City = filter_input(INPUT_POST, 'City');
    $State = filter_input(INPUT_POST, 'State');
    

    $host       = "localhost";
    $dbusername = "id12985030_abc";
    $dbpassword = "12345678dD";
    $dbname     = "id12985030_abc";
    
    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) 
    {
        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } 
    else 
    {
        $sql =  "INSERT INTO pra5table (fname,mname,lname,prof,dept_name,gender,clg_name,group_name,mobile,E_mail,City,State)
    	values ('$fname','$mname','$lname','$prof','$dept_name','$gender','$clg_name','$group_name','$mobile','$E_mail','$City','$State') ";
        
        if ($conn->query($sql)) 
        {
            echo "New record is inserted sucessfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>". $conn->error;
        }
        $conn->close();
    }
?>