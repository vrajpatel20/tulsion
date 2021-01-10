<?php
    require_once("connectInc.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM userdetail WHERE username='$username'";
    $rs=$conn->query($sql);
    if($rs->num_rows>0)
    {
        echo("<script type='text/javascript'>alert('username already exists') </script>".
        "<script>window.location.href='signup.html'</script>");
    }
    else
    {
        $sql="INSERT INTO userdetail VALUES(NULL,'$username','$password')";
        $rs=$conn->query($sql);
        
        if($rs==true)
        {
            echo("<script>window.location.href='login.html'</script>");
        }
        else
        {
            echo("<script>window.location.href='signup.html'</script>");
        }
    }
    
?>