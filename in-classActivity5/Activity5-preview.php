<?php 
if(empty($_GET['name']) == false) {
    echo $_GET['name'] . "<br>";
}
else {
    echo "Name: Not Provided" . "<br>";
}

if(empty($_GET['username']) == false) {
    echo $_GET['username'] . "<br>";
}
else {
    echo "Username: Not Provided" . "<br>";
}
if(empty($_GET['password']) == false) {
    echo $_GET['password'] . "<br>";
}
else {
    echo "Password: Not Provided" . "<br>";
}
if(empty($_GET['address']) == false) {
    echo $_GET['address'] . "<br>";
}
else {
    echo "Address: Not Provided" . "<br>";
}

if(empty($_GET['country']) == false) {
    echo $_GET['country'] . "<br>";
}
else {
    echo "Country: Not Provided" . "<br>";
}
if(empty($_GET['zip']) == false) {
    echo $_GET['zip'] . "<br>";
}
else {
    echo "Zip: Not Provided" . "<br>";
}
if(empty($_GET['email']) == false) {
    echo $_GET['email'] . "<br>";
}
else {
    echo "Email: Not Provided" . "<br>";
}

if(empty($_GET['sex']) == false ) {
    echo $_GET['sex'] . "<br>";
}
else {
    echo "Sex: Not Provided" . "<br>";
}

if(empty($_GET['language']) == false ) {
    
    for($i=0;$i<sizeof($_GET["language"]);$i++){
        echo $_GET['language'][$i] . "<br>";
    }
    
}
else {
    echo "Language: Not Provided" . "<br>";
}

if(empty($_GET['about']) == false ) {
    echo $_GET['about'] . "<br>";
}
else {
    echo "About: Not Provided" . "<br>";
}

?>