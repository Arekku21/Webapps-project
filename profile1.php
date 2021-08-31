<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Meet our members</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <link rel="icon" href="./images/favcon.png" type="image/gif" sizes="16x16">

</head>

<body class="alecbody">

    <?php include ("include/header.php");?>

    <div class="atextbox">
        <h1>Team Members</h1>
    </div>

    <div class="amain">
        <div class="apicholder">
            <img src="./images/alec.png" alt="Alec picture">
        </div>

        <div class="aholder1">
            <p>Alec Vince, 19</p>
            <p>Developer Team</p>
            <p>101220553</p>
            <p>Swinburne University of Technology Sarawak (SUTS)</p>
            <p>Bachelor of Computer Science</p>
        </div>

        <div>
            <table class="atable">
                <tr>
                    <th colspan="5">Table of Contribution</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Webpage</td>
                    <td>Enhancements.php</td>
                    <td>A webpage part of the website of Plan It.</td>
                    <td>
                        <a href="./enhancements.php" class="p2button1">Enhancements</a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Webpage</td>
                    <td>Profile1,2,3,4.php</td>
                    <td>The general layout and code of the individual webpage</td>
                    <td>
                        <a href="./profile1.php" class="p2button1">Profile 1</a>
                        <a href="./profile2.php" class="p2button1">Profile 2</a>
                        <a href="./profile3.php" class="p2button1">Profile 3</a>

                        <a href="./profile4.php" class="p2button1">Profile 4</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Webpage</td>
                    <td>About us.php</td>
                    <td>The general about us webpage.</td>
                    <td><a href="./aboutus.php" class="p2button1">About Us</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Webpage</td>
                    <td>Location.php</td>
                    <td>The general overview of our companies offered locations.</td>
                    <td><a href="./locations.php" class="p2button1">Locations</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Webpage</td>
                    <td>Product4.php</td>
                    <td>Worked on the webpage using the layout given</td>
                    <td><a href="./product4.php" class="p2button1">Product 4</a></td>
                </tr>
            </table>
        </div>

        <div class="amainholder2">
            <aside class="aaboutmehead">
                <h2>About Me </h2>
            </aside>
            <div class="aholder2">
                <div class="aaboutme">
                    <div>
                       <strong>Hi my name is Alec Vince from the Philppines.</strong>
                        <ol>
                            <li>I am part of the Web Developer Team of Plan it. </li>
                            <li>The one thing that I want to share is one of my many Spotify playlist of my favourite songs !</li>
                        </ol>

                    </div>
                </div>
                <div class="aholder3">
                    <a id="spotifylink"></a>
                        <iframe src="https://open.spotify.com/embed/playlist/1Jbuydp0fcBF0UXHkH7hdC" width="300" height="380" allow="encrypted-media"></iframe>
                    
                </div>
            </div>

        </div>



    </div>

    <?php include ("include/footer.php");?>

</body>

</html>
