<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meet our members</title>

    <meta charset="UTF-8">
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
            <img src="./images/joan.png" alt="Jon picture">
        </div>

        <div class="aholder1">
            <p class="aintro">Jonathan Embas, 24</p>
            <p>Developer Team</p>
            <p>101213430</p>
            <p>Swinburne University of Technology Sarawak (SUTS)</p>
            <p>Bachelor of Information and Communication Technology</p>
        </div>

        <div>
            <table class="atable">
                <tr>
                    <th colspan="5">Table of Contribution</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Webpage</td>
                    <td>enquiry.php</td>
                    <td>Enquiry form for Plan It</td>
                    <td><a href="./enquiry.php" class="p2button1">Enquiry</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Webpage</td>
                    <td>disclaimer.php</td>
                    <td>Disclaimer page for Plan It</td>
                    <td><a href="./disclaimer.php" class="p2button1">Disclaimer</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Webpage</td>
                    <td>product.php</td>
                    <td>Worked on the webpage using the layout given</td>
                    <td><a href="./product2.php" class="p2button1">Product 2</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="amainholder2">
            <div class="aaboutmehead">
                <h2>About Me </h2>
            </div>
            <div class="aholder2">
                <div class="aaboutme">
                    <div>
                        <strong>Hi my name is Jonathan Embas from Kuching</strong>
                        <ol>
                            <li>I am part of the Web Developer Team of Plan it. </li>
                            <li>I love listening to music and so the one thing that I want to share is my Spotify playlist of the songs I am currently jamming to ! </li>
                        </ol>
                    </div>
                </div>
                <div class="aholder3">
                    <a id="spotifylink"></a>
                    <iframe src="https://open.spotify.com/embed/playlist/35sI5LivanjdEjkdPxladw" width="300" height="380" allow="encrypted-media"></iframe>
                </div>
            </div>

        </div>

    </div>

    <?php include ("include/footer.php");?>

</body>

</html>
