<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Enhancements</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <link rel="icon" href="./images/favcon.png" type="image/gif" sizes="16x16">
</head>

<body class="p2body">
    <?php include ("include/header.php");?>
    

    <!--content starts here-->
    <div class="enhantextbox">
        <h1>Enhancements</h1>
    </div>

    <div class="p2main">

        <article class="p2tableholder">
            <img class="p2tablepic" src="./images/PlanIt%20logo2.png" alt="Plan it logo">

            <table class="p2table">
                <tr>
                    <th colspan="6" rowspan="1"> PLAN IT Website Enhancements</th>
                </tr>

                <tr class="p2tableheader2">
                    <td>Number</td>
                    <td>Enhancement Name</td>
                    <td>Explantion</td>
                    <td>Techinique</td>
                    <td>Developers involved</td>
                    <td>Hyperlinks</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>CSS Transitions</td>
                    <td>Adds more depth and a more proffessional look to the website.</td>
                    <td>Using the pseudoclass of like hover or active, we are able to implement different kinds of transitions.</td>
                    <td>
                        Nigel, Olivia, Jonathan, Alec
                    </td>
                    <td><a href="./index.php" class="p2button1">Home</a>

                        <a href="./aboutus.php#teamlink" class="p2button1">About Us</a>

                        <a href="./profile1.php" class="p2button1">Profile 1</a>

                        <a href="./profile2.php" class="p2button1">Profile 2</a>

                        <a href="./profile3.php" class="p2button1">Profile 3</a>

                        <a href="./profile4.php" class="p2button1">
                            Profile 4
                        </a>

                        <a href="./locations.php" class="p2button1">Locations</a>

                        <a href="./enhancements.php" class="p2button1">Enhancements</a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Favcon</td>
                    <td>It adds more depth to the website. Make the website much more attactive in the tabs of a web browser.</td>
                    <td>Our logo was first resized to 16 x 16 pixels size. Then using the fav-icon code we have implemented it to all the webpages.</td>
                    <td>
                        Nigel, Olivia, Jonathan, Alec
                    </td>
                    <td><a href="./index.php" class="p2button1">Homepage</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Spotify Embed</td>
                    <td>
                        Adds a more personal touch to the members page allowing more connection to the customers while also alowing a showcase of creativity.
                    </td>
                    <td>

                        Using the iframe emebed content of Spotify it is implemented in the page.
                        It is then put into place using flexbox technique.

                    </td>
                    <td>
                        Nigel, Olivia, Jonathan, Alec
                    </td>
                    <td>

                        <a href="./profile1.php#spotifylink" class="p2button1">Profile1</a>

                        <a href="./profile4.php#spotifylink" class="p2button1">Profile 4</a>

                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>CSS FlexBox</td>
                    <td>It allows a more dynamic and flexible way to arrange webpage contents. It allows easy resizing if needed. </td>
                    <td>By having a container div with the css code of "Display: flex" it will fix stuff within a flex box. Then using flex properties such as align-contents and justify-content it is very easy to put where the div and items will be.</td>
                    <td>
                        Nigel, Olivia, Jonathan, Alec
                    </td>
                    <td><a href="./aboutus.php#teamlink" class="p2button1">About Us</a></td>
                </tr>

            </table>

        </article>

    </div>

    <?php include ("include/footer.php");?>
		<!-- This is the javascript needed html elements for the loding animation -->
	
	<div class="introo">
      <div class="introo-text">
        <h1 class="hide">
          <span class="text">  Our   </span>
        </h1>
        <h1 class="hide">
          <span class="text">    Enhancement</span>
        </h1>
      </div>
    </div>
    <div class="sliderr"></div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
	
	 <!-- This is the javascript needed html elements for the loding animation -->
	  <script src="./script/enhancements.js"></script>
    
    <script src="./script/script.js"></script>
	
</body>


</html>
