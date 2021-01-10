<?php
    error_reporting(0);
    require_once("connectInc.php");
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql = "SELECT * FROM userdetail WHERE username='$user' AND password='$pass'";
    $rs=$conn->query($sql);
    $rows_returned=$rs->num_rows;
    if($rows_returned>0)
    {
        session_start();
        $_SESSION['user']=$user;
        header('location:logout.php');
    }
    else
    {
        echo("<script type='text/javascript'>alert('Invalid User') </script>".
                "<script>window.location.href='login.html'</script>");
    }
?>