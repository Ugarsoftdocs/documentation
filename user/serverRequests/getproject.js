
var myObj = "";

function fetchdata(id) {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("democ").innerHTML = myObj;
    }
}
xmlhttp.open("GET", "../user/Notification/inviteUsers.php?id="+id, true);
xmlhttp.send();
}