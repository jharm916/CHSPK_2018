<?php

$username = 'porterbay';

if(isset($_POST['username'])) {
    $username = $_POST['username'];
}

$clientId = 'eoCbFY2BkPn80KS34if8OY1oXYyGQkwy';

//https://soundcloud.com/porterbay/sets/black-confetti
// build our API URL // . $username . "/sets/black-confetti"
//"http://api.soundcloud.com/users/31390458/sets/black-confetti/tracks.json?"


$url = "http://api.soundcloud.com/users/31390458/tracks.json?"
 . "&client_id=eoCbFY2BkPn80KS34if8OY1oXYyGQkwy";

$tracks_json = file_get_contents($url);
$tracks = json_decode($tracks_json);

foreach ($tracks as $track) {
 
    echo $track->id . "
";
}

?>
