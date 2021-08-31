<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Assignment 1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="style/style.css" />
    <title>Sabah</title>
    
    <link rel="icon" href="images/favcon.png" type="image/gif" sizes="16x16">
</head>
<body>
    <?php include ("include/header.php");?>

    <!--content starts here-->
    <div class="enhantextbox">
        <h1>SABAH</h1>
    </div>
    
    <div>
        <div class="heading2"></div>
        <div class="top">
            <img src="Images/Sabahs.jpg" alt="Sabah" />
        </div>
        
        <div class="FP">
		<br/>
	       <fieldset class="field">
            <legend class="legend">Family Packages</legend>
            <img src='Images/island_beach.jpg' alt="Island Beach"/> 
            <div class="para"><strong>Tunku Abdul Rahman National Park</strong><br/> Kids will love snorkelling with bold fish and paddling in the clear waters; the main beach on Manukan Island has lifeguards and picnic benches. A 1.5km trail takes mini-Robinson Crusoes right across the island.
            <br />
            <div class="enquire">
                <a onclick="selectItem('Tunku Abdul Rahman National Park')">Enquire</a>
            </div>
            </div>
            <hr />
            <br />
            <img src="Images/culture.jpg" alt="Culture"/> 
            <div class="para"><strong>Monsopiad Cultural Village</strong><br/>Sabahan life at Monsopiad Cultural Village, a “living museum” named after a fearsome, headhunting warrior who lived on this spot three centuries ago. Half-day tours from KK reveal traditional Kadazandusun dance, music, costumes and food, though kids might be more intrigued by the collection of 43 skulls, from those beheaded by the warrior himself.
            <br />
            <div class="enquire">    
                <a onclick="selectItem('Monsopiad Cultural Village')">Enquire</a>
            </div>
            </div>
            </fieldset>
	   </div>
        
        <div class="CP">
		<br/>
	       <fieldset class="field">
           <legend class="legend">Couple Packages</legend>
            <img src='Images/Floating.jpg' alt="Floating"/> 
            <div class="para"><strong>Floating coral bay pitas</strong><br/> What you will see is actually heaps of coral fragments that are believed to being washed away over time due to convergence of sea currents, forming a naturally low island.
            <br />
            <div class="enquire">
                <a onclick="selectItem('Floating coral bay pitas')">Enquire</a>
            </div>
            </div>
            <hr />
            <br />
            <img src="Images/cruise.jpg" alt="Cruise"/> 
            <div class="para"><strong>Bongawan River Cruise</strong><br/>Embark on a wildlife cruise and don't forget to keep your eyes peeled so that you won't miss any wildlife sightings. An evening cruise to see the amazing sight of fireflies lighting up the surrounding trees.
            <br />
            <div class="enquire">
                <a onclick="selectItem('Bongawan River Cruise')">Enquire</a>
            </div>
            </div>
            </fieldset>
	   </div>
        
        <div class="HP">
		<br/>
	       <fieldset class="field">
           <legend class="legend">Honeymoon Packages</legend>
            <img src='Images/gaya_island.jpg' alt="Gaya Island"/> 
            <div class="para"><strong>Gaya Island</strong><br/>With its youthful vibe and sun-dappled moments, this beachfront resort blends harmoniously with the natural environment featuring a collection of hillside villas with views that range from mangrove forests and the surrounding canopy to the outline of Mount Kinabalu. Villa interiors are contemporary and elegant, eco-luxury yet respectful of Sabahan elements. Discoveries, authentic experiences and a sense of intimacy with the natural world all prevail across the land and seascape of this resort offering travellers and families an escape that is distinctively Borneo.
            <br />
            <div class="enquire">   
                <a onclick="selectItem('Gaya Island')">Enquire</a>
            </div>
            </div>
            <hr />
            <br />
            <img src="Images/semporna.jpg" alt="Semporns"/> 
            <div class="para"><strong>Semporna Island</strong><br/>Situated on the south-eastern coast of the state of Sabah in Malaysia, these islands are nothing short of what one could describe as paradise on earth. Be it for the solo traveller in you or the diver in you, with pristine waters, great weather and clear skies, Semporna is a must-visit destination for anyone looking to enjoy a relaxed getaway. Known to have some of the most beautiful dive spots in the world, the Semporna Archipelago – which is just a short boat ride away is home to a number of dive centres.
            <br />
            <div class="enquire">
                <a onclick="selectItem('Semporna Island')">Enquire</a>
            </div>
            </div>
            </fieldset>
	   </div>
        
        <div class="BP">
		<br/>
	       <fieldset class="field">
           <legend class="legend">Bestseller Packages</legend>
            <img src='Images/Kapalai.jpg' alt="Kapalai"/> 
            <div class="para"><strong>Kapalai Island</strong><br/>Widely known as Malaysia’s version of the Maldives, Kapalai Island is not, in the true sense of the word, an island. It is in fact a picturesque, white sandbank at sea level formed as a result of hundreds of years of erosion. This idyllic, sun-steeped paradise sits in the middle of the Celebes Sea, with no land in sight. 
            <br />
            <div class="enquire">
                <a onclick="selectItem('Kapalai Island')">Enquire</a>
            </div>
            </div>
            <hr />
            <br />
            <img src="Images/Sipadan.jpg" alt="Sipadan"/> 
            <div class="para"><strong>Sipadan Island</strong><br/>From tropical birds that include sea eagles, sunbirds, starlings and wood pigeons, you are also going to stumble across exotic birds such as coconut crabs that scurry the island freely. While here be sure to consider getting your diving certificate as there is no better place to tick that off your bucket list than the Sipadan Islands itself.
            <br />
            <div class="enquire">    
                <a onclick="selectItem('Sipadan Island')">Enquire</a>
            </div>    
            </div>
            </fieldset>
	   </div>
        
        <div class="FP">
		<br/>
	       <fieldset class="field">
           <legend class="legend">Festival Packages</legend>
            <img src='images/corn.jpg' alt="Corns"/> 
            <div class="para"><strong>Pesta Jagung – Corn Festival</strong><br/>The Corn Festival is a 2-day celebration filled with corn-related activities such as corn industry exhibitions, corn competitions, traditional sports which may or may not involve corn and, the highlight of the event, the Maize Beauty Queen Pageant held on the second day, featuring local beauties decorated with corn-derived jewelry.  
            <br />
            <br />
            <div class="enquire">    
            <a onclick="selectItem('Pesta Jagung – Corn Festival')">Enquire</a>
            </div>
            </div>
            <hr />
            <br />
            <img src="images/harvest.jpg" alt=" Harvest"/> 
            <div class="para"><strong> Harvest Festival</strong><br/>Pesta Kaamatan has its roots in early rice cultivation. Animist Kadazan-Dusun and Murut indigenous tribes believed everything had a spirit. So they gave offerings and showed gratitude after a successful harvest. If they didn’t, disgruntled spirits might leave and the villagers would starve. Travel to Sabah to experiences the harvest festival
            <br />
            <br />
            <div class="enquire">    
            <a onclick="selectItem('Harvest Festival')">Enquire</a>
            </div>
            </div>
            </fieldset>
	   </div>
    </div>
	<br>
    
    <?php include ("include/footer.php");?>
	
	<script src="./script/script.js"></script>
	
</body>


</html>