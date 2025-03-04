<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lat = $_POST["lat"];
    $lng = $_POST["lng"];

    $kmlData = "<?xml version='1.0' encoding='UTF-8'?>\n";
    $kmlData .= "<kml xmlns='http://www.opengis.net/kml/2.2'>\n";
    $kmlData .= "<Placemark>\n";
    $kmlData .= "<name>Live Location</name>\n";
    $kmlData .= "<Point>\n";
    $kmlData .= "<coordinates>$lng,$lat,0</coordinates>\n";
    $kmlData .= "</Point>\n";
    $kmlData .= "</Placemark>\n";
    $kmlData .= "</kml>";

    file_put_contents("live_location.kml", $kmlData);
    echo "KML file updated!";
}
?>
