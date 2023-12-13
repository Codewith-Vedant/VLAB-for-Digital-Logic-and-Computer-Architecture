<?php
    include('db.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);

        
        
        $sql = "Select * from students where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_username = mysqli_num_rows($result);  

        $sql = "Select * from students where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        
        $sql = "Select * from students where password='$password'";
        $result = mysqli_query($conn, $sql);        
        $count_password = mysqli_num_rows($result);

        $sql = "Select * from students where department='$department'";
        $result = mysqli_query($conn, $sql);        
        $count_department = mysqli_num_rows($result);

        if($count_username == 0 && $count_email==0){  
                $sql = "INSERT INTO students(username, email, department, password) VALUES('$username', '$email','$department','$password')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    header("Location: Login.php");
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "Signup.php";
                    </script>';
            }      
        }  
    ?>