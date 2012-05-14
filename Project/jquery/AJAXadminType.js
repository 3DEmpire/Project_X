function showButton(i)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
if(i=='p'){
xmlhttp.open("GET","http://127.0.0.1:8080/Project/xmls/Po4ivki.php",true);
}
if(i=='av'){
xmlhttp.open("GET","http://127.0.0.1:8080/Project/xmls/TripAV.php",true);
}
if(i=='sa'){
xmlhttp.open("GET","http://127.0.0.1:8080/Project/xmls/TripSA.php",true);
}
xmlhttp.send();
}