<?php

$insert = false;
if(isset($_POST['name'])){

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect ($servername, $username, $password);

if(!$conn){
    die ("connection to this database failed due to" . mysqli_connect_error());
}
// else{
//     echo "done";
// }

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO `bike`.`service` (`name`, `email`, `description`, `date`) VALUES ('$name', '$email', '$message', CURRENT_TIMESTAMP());";


 // Execute the query
if($conn->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $conn->error";
}

// Close the database connection
$conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="discription" content="contact us for more details . Kahan Singh Farm , Jalbehra">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/489273648e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <header>

            <div class="logo">
                <a href="index.html"><img src="img/logo-roar-bikes.svg" alt="roar bikes logo "></a>
            </div>

            <nav>
                <div class="navbutton">
                    <a href="#">Book Online</a>
                    <div class="dropbox">
                        <div class="navbutton"><a href="#">Onsite Service</a></div>
                        <div class="navbutton"><a href="#">Part delivery</a></div>
                        <div class="navbutton"><a href="#">Request Callback</a></div>
                    </div>
                </div>

                <div class="navbutton">
                    <a href="#">About</a>
                </div>
                <div class="navbutton">
                    <a href="#">Contact</a>
                </div>
            </nav>
        </header>


        <div class="main2">
            <h1>Contact Us</h1>
            <p>Do You have any queries ? don't hesitate to contact-us</p>
            <?php
        if($insert == true){
        echo '<script>alert("Thanks for submitting your form.")</script>';
        }    
        ?>
            <form action="contact-us.php" method="post">

                <div class="inputwrapper">
                    <label for="name" class="newline">First Name</label>
                    <input type="text" name="name" id="name" placeholder="First Name">

                </div>

                <div class="inputwrapper">
                    <label for="email" class="newline">Email</label>
                    <input type="email" name="email" id="email" placeholder="saini@sample.com">

                </div>

                <div class="inputwrpper">

                    <textarea name="message" id="message" cols="80" rows="5"
                        placeholder="Tell us What do you think...."></textarea>
                </div>

                <!-- <div class="inputwrapper">
            <input type="checkbox" name="email-sub" id="email-sub" value="yes-sign-me-up" checked
            >
            <label for="email-sub">Sign up for email newsletter</label>

        </div> -->

                <!-- <div class="inputwrapper">
            <p>How would you like to contact-us</p>
            <input type="radio" name="contact-pref" id="phone" value="phone">
            <label for="phone" class="margin-right-a">Phone</label>

            <input type="radio" name="contact-pref" id="email2" value="email">
            <label for="email">Email</label>

        </div> -->

                <!-- <div class="inputwrapper">

            <select name="country" id="country">
                <option value="not-chosen">Choose country</option>
                <option value="india">india</option>
                <option value="australia">australia</option>
                <option value="canada">canada</option>
                
            </select>
        </div> -->


                <input type="submit" value="fire away" class="mybutton">
            </form>
        </div>


        <div class="cards">
            <div class="card1">
                <a href="#">
                    <i class="fa-solid fa-motorcycle"></i>
                    <h2>Book Online</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum voluptates provident inventore
                        placeat? Ut?</p>
                </a>
            </div>
            <div class="card2">
                <a href="#">
                    <i class="fa-solid fa-cog"></i>
                    <h2>Service Type</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum voluptates provident inventore
                        placeat? Ut?</p>
                </a>
            </div>
            <div class="card3">
                <a href="#">
                    <i class="fa-solid fa-phone"></i>
                    <h2>Call For Advice</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum voluptates provident inventore
                        placeat? Ut?</p>
                </a>
            </div>
        </div>

        <!-- <div class="testimonials">
        <div class="tbox">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, aspernatur est adipisci hic dolor veniam!
            </p>
            <p>sanny</p>
        </div>
        <div class="tbox">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, aspernatur est adipisci hic dolor veniam!
            </p>
            <p>sachin</p>
        </div>
        <div class="tbox">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, aspernatur est adipisci hic dolor veniam!
            </p>
            <p>saini</p>
        </div>
        <div class="tbox">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, aspernatur est adipisci hic dolor veniam!
            </p>
            <p>iamsainisachin</p>
        </div>
    </div> -->
    </div>


</body>

</html>