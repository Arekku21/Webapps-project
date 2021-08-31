// Data transfer between webpages


function selectItem(item_id)
{
	sessionStorage.setItem("item_id", item_id);
	
	window.location.replace("enquiry.php");
	
}

function show()
{	
	if(sessionStorage.getItem("item_id") != null){
		document.getElementById("topic").value = sessionStorage.getItem("item_id");
	}
	
}


// Data transfer in same page

function autoFill()
{
	var items = document.getElementById("packagee").options;
	var itemSelected = document.getElementById("packagee").selectedIndex;
	if(items[itemSelected].text != "PlanIt Package"){
	document.getElementById("topic").value = items[itemSelected].text;
	}
	else{
		document.getElementById("topic").value = "";
	}
}



window.onload = function(){
		locations()
		packagetype()
		state()
		show()
}

//this is for the topic
function subjectcheck() {
    "use strict";
    var errormsg1 = "\nTopic cannot be empty\n"

    var check = document.getElementById("topic").value;

    if (check != "") {
        var dummy = ""
    } else {
        return errormsg1;
    }

    return ""
}
//this is for the first name
function namecheck() {
    "use strict";
    var errormsg1 = "\nFirst Name cannot be empty\n";
    var errormsg2 = "\nFirst Name must only be letters\n";
    var errormsg3 = "\n First Name must only be less than or equal to 25 characters\n";

    var pattern_1 = /^[A-Za-z]+$/;

    var check = document.getElementById("fname").value;

    if (check != "") {
        var dummy = ""
    } else {
        return errormsg1;
    }

    if (check.match(pattern_1)) {
        //to check pattern
        var dummy2 = ""
    } else {
        return errormsg2;
    }

    if (check.length <= 25) {
        var dummy = ''
    } else {
        return errormsg3
    }

    return "";
}
//this is for last name
function namecheck1() {
    "use strict";
    var errormsg1 = "\nLast Name cannot be empty\n";
    var errormsg2 = "\nLast Name must only be letters\n";
    var errormsg3 = "\n Last Name must only be less than or equal to 25 characters\n";

    var pattern_1 = /^[A-Za-z]+$/;

    var check = document.getElementById("lname").value;

    if (check != "") {
        var dummy = ""
    } else {
        return errormsg1;
    }

    if (check.match(pattern_1)) {
        //to check pattern
        var dummy2 = ""
    } else {
        return errormsg2;
    }

    if (check.length <= 25) {
        var dummy = ''
    } else {
        return errormsg3
    }
    return ""
}
//this is for email
function emailcheck() {
    "use strict";
    var errormsg1 = "\nEmail cannot be empty\n";
    var errormsg2 = "\nEmail must be valid\n";

    var pattern_1 = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;

    var check = document.getElementById("email").value;

    if (check == "") {

        return errormsg1;

    }

    if (check.match(pattern_1)) {
        return ""
    } else {
        return errormsg2;
    }

    return ""
}
//this is for phone no.
function phonenocheck() {
    "use strict";
    var errormsg1 = "\nPhone number cannot be empty\n";
    var errormsg2 = "\nPhone number must be valid\n";
    var errormsg3 = "\nPhone number must be 10 characters\n"

    var pattern_1 = /^[0-9]*$/gm;

    var check = document.getElementById("telno").value;

    if (check == "") {

        return errormsg1;

    }

    if (check.match(pattern_1)) {
        var dummy = ''
    } else {
        return errormsg2;
    }

    if (check.length == 10) {
        var dummy = ''
    } else {
        return errormsg3
    }

    return ""
}
//this is for the street address
function streetcheck() {
    "use strict";
    var errormsg1 = "\nStreet Address cannot be empty\n";
    var errormsg2 = "\nStreet Address must be equal or less than 35 characters\n";


    var check = document.getElementById("straddress").value;

    if (check != "") {
        var dummy = ""
    } else {
        return errormsg1;
    }

    if (check.length <= 35) {
        var dummy = ''
    } else {
        return errormsg2
    }
    return ""
}
//this is for city or town
function citycheck() {
    "use strict";
    var errormsg1 = "\nCity or Town cannot be empty\n";
    var errormsg2 = "\nCity or Town must be equal or less than 35 characters\n";


    var check = document.getElementById("citytown").value;

    if (check != "") {
        var dummy = ""
    } else {
        return errormsg1;
    }

    if (check.length <= 35) {
        var dummy = ''
    } else {
        return errormsg2
    }
    return ""
}
//this is for postcode
function postcodecheck() {
    "use strict";
    var errormsg1 = "\nPostcode cannot be empty\n";
    var errormsg2 = "\nPostcode must be valid\n";
    var errormsg3 = "\nPostcode must be 5 characters\n"

    var pattern_1 = /^[0-9]*$/gm;

    var check = document.getElementById("postcode").value;

    if (check == "") {

        return errormsg1;

    }

    if (check.match(pattern_1)) {
        var dummy = ''
    } else {
        return errormsg2;
    }

    if (check.length == 5) {
        var dummy = ''
    } else {
        return errormsg3
    }
    return ""

}
//this is the function for alert box
function validateForm() {
    "use strict";
    var check = ""
    var check = subjectcheck() + namecheck() + namecheck1() + emailcheck() + phonenocheck() + streetcheck() + citycheck() + postcodecheck();

    if (check == "") {
        return true;
    } else {
        alert(check);
        return false;
    }
}

function locations(){
	//This is the code for formulating Location
	var select = document.getElementById("locations");
	var options = ["Kuching", "Kuala Lumpur", "Sabah", "Langkawi"];

	for(var i = 0; i < options.length; i++){
		var opt = options[i];
		var el = document.createElement("option");
		el.text= opt;
		el.value= opt;
		select.appendChild(el);
}

}
//This is the code for formulating the Package Type
function packagetype(){
	var select2 = document.getElementById("packagetype");
	var options2 = ["Family Package", "Couple Package", "Honeymoon Package", "Best Seller Package", "Festival Package"];

	for(var i = 0; i < options2.length; i++){
		var opt = options2[i];
		var el = document.createElement("option");
		el.text= opt;
		el.value= opt;
		select2.appendChild(el);
}
	}
	
//This is the code for formulating states
function state(){
	var select2 = document.getElementById("state");
	var options2 = ["Johor", "Kedah", "Kuala Lumpur", "Kelantan", "labuan", "Malacca", "Negeri Sembilan", "Pahang", "Penang", "Perak", "Perlis", "Putrajaya", "Sabah", "Selangor", "Terengganu"];

	for(var i = 0; i < options2.length; i++){
		var opt = options2[i];
		var el = document.createElement("option");
		el.text= opt;
		el.value= opt;
		select2.appendChild(el);
}
	}

//This is the code for formulating states
function state(){
	var select3 = document.getElementById("state");
	var options3 = ["Johor", "Kedah", "Kuala Lumpur", "Kelantan", "labuan", "Malacca", "Negeri Sembilan", "Pahang", "Penang", "Perak", "Perlis", "Putrajaya", "Sabah", "Selangor", "Terengganu"];

	for(var i = 0; i < options3.length; i++){
		var opt = options3[i];
		var el = document.createElement("option");
		el.text= opt;
		el.value= opt;
		select3.appendChild(el);
}
	}
	
//This code is to create link using js in navigation bar (About us page)
	
var urlMenu = document.getElementById('aboutus');
urlMenu.onchange = function()
{
var userOption = this.options[this.selectedIndex];
if (userOption.value != "nothing")
{
window.open(userOption.value, "Alec Olivia Nigel Jonathan", "");
}

}


//This code is to create link using js in navigation bar (Location page)
var urlMenu = document.getElementById('places');
urlMenu.onchange = function()
{
var userOption = this.options[this.selectedIndex];
if (userOption.value != "nothing")
{
window.open(userOption.value, "KualaLumpur LangkawiIsland Sabah Kuching", "");
}

}
	
	






//highlighted active nav bar
var currentUrl = location.href.split("/");
var navArr = document.getElementsByClassName("main")[0].getElementsByTagName("a");
var i=0;

var currentPage = currentUrl[currentUrl.length-1];

for(i; i<navArr.length; i++)
{
	var activeNavLink = navArr[i].href.split("/");
	if(activeNavLink[activeNavLink.length-1] == currentPage)
	{
		navArr[i].className = "activee";
	}
}

































	

	
	

	