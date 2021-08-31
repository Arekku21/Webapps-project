<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Assignment 1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="style/style.css" />
    <title>Enquiry</title>

    <link rel="icon" href="./images/favcon.png" type="image/gif" sizes="16x16">


</head>

<body>
			
    <?php include ("include/header.php");?>



    <!--content starts here-->
    <div class="enhantextbox">
        <h1>Send us a message!</h1>
    </div>

    <main>
        <section>

            <div class="content_box">

                <br />
                <form action="./enquiry_process.php" method="POST" onsubmit="return validateForm()" id="survey">
                    <div>

                        <fieldset class="fieldset3">
                            <legend>Enquiry Topic</legend>
                            <label for="topic">Topic:</label>
                            <input type="text" name="topic" id="topic" placeholder="Plan It Package">
                        </fieldset>

                        <br />


                        <fieldset class="fieldset">
                            <legend>Personal Details</legend>
                            <p><label>First Name: <input type="text" name="fname" id="fname" placeholder="John" /></label></p>
                            <p><label>Last Name: <input type="text" name="lname" id="lname" placeholder="Doe" /></label></p>
                            <p><label>Email: <input type="email" name="email" id="email" placeholder="example@email.com" /></label></p>
                            <p><label>Phone number: <input type="tel" name="phone" placeholder="12345 67890" id="telno" /></label></p>
                        </fieldset>

                        <br />
                        <fieldset class="fieldset2">
                            <legend>Address</legend>
                            <label>Street Address: <input id="straddress" type="text" name="saddress" placeholder="Generic Street" /></label>
                            <p><label>City/Town: <input id="citytown" type="text" name="citytown" placeholder="Kuching" /></label></p>
                            <label for="state">State:</label>
                            <select name="state" id="state">
                                <option value="">State</option>
                            </select>
                            <p><label>Postcode: <input type="text" id="postcode" name="postcode" /></label></p>
                        </fieldset>
                        <br />

                        <fieldset class="fieldset4">
                            <legend>Package Type</legend>

                            <label for="location">Destination</label>
                            <select name="location" id="locations">
                                <option value="">Location</option>
                            </select>

                            <label for="packagetype">Package Type</label>
                            <select name="packagetype" id="packagetype">
                                <option value="">Package Type</option>
                            </select>

                            <label for="package">Package</label>
                            <select name="package" id="packagee" onchange="autoFill()">
                                <optgroup label="Kuching Packages">
                                    <option value="Kuching Cat Museum">Kuching Cat Museum</option>

                                    <option value="Sarawak Museum">Sarawak Museum</option>
                                    <option value="Kuching Waterfront">Kuching Waterfront</option>
                                    <option value="Bako National Park">Bako National Park</option>
                                    <option value="DBKU Orchid Garden">DBKU Orchid Garden</option>
                                    <option value="Damai Beach Resort">Damai Beach Resort</option>
                                    <option value="Sarawak Cultural Village">Sarawak Cultural Village</option>
                                    <option value="Matang Wildlife Centre">Matang Wildlife Centre</option>
                                    <option value="Tua Pek Kong Temple">Tua Pek Kong Temple</option>
                                    <option value="The Brooke Gallery at Fort Margherita">The Brooke Gallery at Fort Margherita</option>
                                </optgroup>
                                <optgroup label="Kuala Lumpur Packages">
                                    <option value="Sunway Lagoon">Sunway Lagoon</option>
                                    <option value="Aquaria KLCC">Aquaria KLCC</option>
                                    <option value="Mandarin Oriental Hotel">Mandarin Oriental Hotel</option>
                                    <option value="Shangri La Hotel">Shangri La Hotel</option>
                                    <option value="The Majestic Hotel Kuala Lumpur">The Majestic Hotel Kuala Lumpur</option>
                                    <option value="The St.Regis Kuala Lumpur">The St.Regis Kuala Lumpur</option>
                                    <option value="Resort World Genting">Resort World Genting</option>
                                    <option value="Cameron Highlands">Cameron Highlands</option>
                                    <option value="Batu Caves">Batu Caves</option>
                                    <option value="Kuan Yin Temple">Kuan Yin Temple</option>
                                </optgroup>

                                <optgroup label="Sabah Packages">
                                    <option value="Tunku Abdul Rahman National Park">Tunku Abdul Rahman National Park</option>
                                    <option value="Monsopiad Cultural Village">Monsopiad Cultural Village</option>
                                    <option value="Floating coral bay pitas">Floating coral bay pitas</option>
                                    <option value="Bongawan River Cruise">Bongawan River Cruise</option>
                                    <option value="Gaya Island">Gaya Island</option>
                                    <option value="Semporna Island">Semporna Island</option>
                                    <option value="Kapalai Island">Kapalai Island</option>
                                    <option value="Sipadan Island">Sipadan Island</option>
                                    <option value="Pesta Jagung – Corn Festival">Pesta Jagung – Corn Festival</option>
                                    <option value="Harvest Festival">Harvest Festival</option>
                                </optgroup>

                                <optgroup label="Langkawi Packages">
                                    <option value="The Langkawi Sky Bridge">The Langkawi Sky Bridge</option>
                                    <option value="Underwater World Langkawi">Underwater World Langkawi</option>
                                    <option value="The Ritz-Carlton Langkawi">The Ritz-Carlton Langkawi</option>
                                    <option value="The Datai Langkawi">The Datai Langkawi</option>
                                    <option value="The St. Regis Langkawi">The St. Regis Langkawi</option>
                                    <option value="Casa Del Mar Langkawi">Casa Del Mar Langkawi</option>
                                    <option value="Berjaya Langkawi Resort">Berjaya Langkawi Resort</option>
                                    <option value="The Temple Tree">The Temple Tree</option>
                                    <option value="Langkawi International Water Festival">Langkawi International Water Festival</option>
                                    <option value="Tour De Langkawi">Tour De Langkawi</option>
                                </optgroup>
                            </select>

                            <label for="notes">Notes</label>
                            <textarea name="notes" id="notes" class="contact-form-text" placeholder="Enter your message here.."></textarea>
                        </fieldset>

                        <input id="submitbtn" class="enqsubmit" type="submit" value="Submit" />

                        <input type="reset" class="enqsubmit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <br />
    <br />
    <?php include ("include/footer.php");?>
    <!-- This is the javascript needed html elements for the loding animation -->

    <div class="introo">
        <div class="introo-text">
            <h1 class="hide">
                <span class="text"> Any issue? </span>
            </h1>
            <h1 class="hide">
                <span class="text"> Contact Us</span>
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
