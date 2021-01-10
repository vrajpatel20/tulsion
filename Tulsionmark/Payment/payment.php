<?php
    require('config.php');

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        if($pincode=='390021'){
            $sql = "INSERT INTO payment VALUES(null,'$name','$phone','$address','$pincode')";
            $rs=$conn->query($sql);
            if($rs==true)
            {
                echo("<script type='text/javascript'>alert('Your Order Successfully Place') </script>");
                echo("<script>window.location.href='payment.php'</script>");
            }
            else{
                echo "Failed";
            }
        }else{
                echo("<script type='text/javascript'>alert('You are not eligible') </script>");
                echo("<script>window.location.href='payment.php'</script>");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>
    <nav class="navbarp">
        <div class="logop">
            <a href="payment.html">
                <img src="./tulsi.png" alt="">
            </a>
        </div>
    </nav>
    <h3 id="final">Your's final steps for order</h3>
    <section class="form">
        <div class="form1">
            <form action="payment.php" method="POST">
                <tr>
                    <td>
                        Name
                    </td><br><br>
                    <td>
                        <input type="text" placeholder="Name" name="name" id="name" required>
                    </td>

                </tr><br><br>
                <tr>
                    <td>
                        Phone no.
                    </td><br><br>
                    <td>
                        <input type="text" placeholder="Phone" name="phone" id="phone" required>
                    </td>

                </tr>
                <br><br>
                <tr>
                    <td>
                        Address
                    </td><br><br>
                    <td>
                        <textarea type="text" name="address" id="address" cols="22" rows="4" placeholder="address"
                            required></textarea>
                    </td>
                </tr><br><br>
                <tr>
                    <td>
                        Pin code
                    </td><br><br>
                    <td>
                        <input type="text" name="pincode" id="pincode" required>
                    </td>
                </tr>
                <br><br><br>
                <h4>please keep your total cash handy on delivery</h4><br>
                <input type="submit" name="submit" id="submit" value="Make Payment">
        </div>
        </form>
    </section>
    <footer class="copyright">copyright@tulsionmark | All rights reserved</footer>
</body>

</html>