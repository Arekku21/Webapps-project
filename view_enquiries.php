<!DOCTYPE html>
<html>

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
   <div class="ptextbox">
            <h1>Dev Database Access</h1>
    </div>
    <?php include ("include/header.php");?>
    <?php
//needed basic infos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquirydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
    
// Check connection
if (!$conn) {
    die("SQL Connect unsuccesful -  " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname,email,address,citytown,state,postcode,phone,location,packagetype,package,notes FROM enqdetails";
    
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //table creation
    echo "<div class='viewh'>Table of records</div>";
    echo "<table class ='viewtable'>";
    echo "<tr class='viewtr'>"."<th class='viewth'>ID</th>"."<th class='viewth'>FirstName</th>"."<th class='viewth'>LastName</th>"."<th class='viewth'>Email</th>"."<th class='viewth'>Address</th>"."<th class='viewth'>City/Town</th>"."<th class='viewth'>State</th>"."<th class='viewth'>PostCode</th>"."<th class='viewth'>Phone</th>"."<th class='viewth'>Location</th>"."<th class='viewth'>Package Type</th>"."<th class='viewth'>Package</th>"."<th class='viewth'>Notes</th>"."</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='viewtr'>".
            "<td class='viewtd'>".$row["id"]."</td>".
            "<td class='viewtd'>".$row["firstname"]."</td>".
            "<td class='viewtd'>".$row["lastname"]."</td>".
            "<td class='viewtd'>".$row["email"]."</td>".
            "<td class='viewtd'>".$row["address"]."</td>".
            "<td class='viewtd'>".$row["citytown"]."</td>".
            "<td class='viewtd'>".$row["state"]."</td>".
            "<td class='viewtd'>".$row["postcode"]."</td>".
            "<td class='viewtd'>".$row["phone"]."</td>".
            "<td class='viewtd'>".$row["location"]."</td>".
            "<td class='viewtd'>".$row["packagetype"]."</td>".
            "<td class='viewtd'>".$row["package"]."</td>".
            "<td class='viewtd'>".$row["notes"]."</td>".
            "</tr>";    
    }
} else {
    echo "No results.";
}

echo "</table>";

mysqli_close($conn);
?>
    <?php include ("include/footer.php");?>



    <!-- This is the javascript needed html elements for the loding animation -->

    <div class="introo">
        <div class="introo-text">
            <h1 class="hide">
                <span class="text"> Dev Database </span>
            </h1>
            <h1 class="hide">
                <span class="text"> Access... </span>
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
