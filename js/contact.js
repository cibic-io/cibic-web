var xhttp = new XMLHttpRequest();

xhttp.open("POST", "demo_post2.asp", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("fname=Henry&lname=Ford");

request.onload = function() {
  // Begin accessing JSON data here
}

// Send request
request.send()