<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Assignment 1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="style/style.css" />
    <title>Enquiry_Processing</title>

    <link rel="icon" href="images/favcon.png" type="image/gif" sizes="16x16">
</head>

<body>

    <?php include ("include/header.php");?>
    <?php //include("include/createdb1.php") ?>
    <?php //include("include/createtb1.php") ?>
    
    <div class="ptextbox">
            <h1>Enquiry form processing </h1>
    </div>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "enquirydb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //take data from the form enquiry.php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $address = $_POST['saddress'];
    $citytown = $_POST['citytown'];
    $location = $_POST['location'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];

    $packagetype = $_POST['packagetype'];
    $package = $_POST['package'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO  enqdetails(firstname, lastname, email,address, citytown, state, postcode,phone,location,packagetype,package,notes)
    VALUES ('$fname','$lname' , '$email','$address','$citytown','$state','$postcode','$phone','$location','$packagetype','$package','$notes')";


    if (mysqli_query($conn, $sql)) {
        echo "<div class='enqp'>".
        "Enquiry form submitted successfully.\nWe will be getting to you back soon.\n Please feel free to explore."
        ."<br><br><a href='./index.php' class='enqbutton'>"."Back to Homepage"."</a>"."</div>";
        
    } else {
        echo "SQL errors - " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
    <?php include ("include/footer.php");?>



    <!-- This is the javascript needed html elements for the loding animation -->

    <div class="introo">
        <div class="introo-text">
            <h1 class="hide">
                <span class="text"> Enquiry form </span>
            </h1>
            <h1 class="hide">
                <span class="text"> Processing... </span>
            </h1>
        </div>
    </div>
    <div class="sliderr"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>

    <!-- This is the javascript needed html elements for the loding animation -->
    <script src="./script/enhancements.js"></script>

    <script src="./script/script.js"></script>

</body>

</html>
