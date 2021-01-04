
/*
var wp = "http://localhost/stadt/wordpress/earthquake/";
var addr = "http://localhost/stadt/pages/01_home_page_portal/01_home_page_portal.html"; 


$.ajax({
	type: 'HEAD',
    url: wp,
    cache: false, 
    //dataType: "text"
    success: function(data){
        if(data === "SUCCESS"){
            document.location.href = "http://localhost/stadt/pages/01_home_page_portal/01_home_page_portal.html";
        } else {
        	//document.location.href = "http://localhost/stadt/wordpress/earthquake/";
        }
    }
});
*/


// Creates an object which can read files from the server
var reader = new XMLHttpRequest();
var checkFor = "http://localhost/stadt/wordpress/earthquake/";


// Opens the file and specifies the method (get)
// Asynchronous is true
reader.open('get', checkFor, true);

//check each time the ready state changes
//to see if the object is ready
reader.onreadystatechange = checkReadyState;


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

/*
function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}

 */

function checkReadyState() {

    var user = getCookie("username");

    if (reader.readyState === 4) {

        if (user != "" && user != null) {
            alert("Welcome again " + user);
        }

        else {
            //check to see whether request for the file failed or succeeded
            if ((reader.status === 200) || (reader.status === 0) || (user == null)  ) {
                user = prompt("Please enter your name:", "");
                setCookie("username", user, 365);
                //page exists -- redirect to the checked
                //checked for page
                document.location.href = checkFor;

            }
            //does nothing and quits the function
            //if the url does not exist
            return;

        }

    }//end of if (reader.readyState === 4)

}// end of checkReadyState()

// Sends the request for the file data to the server
// Use null for "get" mode
reader.send(null);






