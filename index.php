<?php
require_once 'vendor/autoload.php';
use Adamogris\WebtViewsInMvc\Model\Entity\Hotel;

$hotels = [
    new Hotel("Seaside Paradise", "Located in the heart of the city, Hotel Paradise offers breathtaking views and world-class amenities.", "src/images/hotelParadise.jpg"),
    new Hotel("Ocean View Resort", "Wake up to the sound of the waves at Ocean View Resort, where luxury meets the tranquility of the sea.", "src/images/OceanViewResort.jpg"),
    new Hotel("Mountain Escape Lodge", "Surrounded by stunning mountains, this lodge is the perfect getaway for those seeking adventure and relaxation.", "src/images/mountainsEscapeLodge.jpg")
];

// Read the template
$template = file_get_contents('src/templates/index.html');

// Extract the loop block
preg_match('/{{HOTEL_LOOP}}(.*?){{HOTEL_LOOP_END}}/s', $template, $matches);
$hotelTemplate = $matches[1] ?? '';

$hotelHtml = '';

foreach ($hotels as $hotel) {
    $hotelEntry = str_replace("{{HOTEL_NAME}}", $hotel->getName(), $hotelTemplate);
    $hotelEntry = str_replace("{{HOTEL_DESCRIPTION}}", $hotel->getDescription(), $hotelEntry);
    $hotelEntry = str_replace("{{HOTEL_IMAGE}}", $hotel->getImgPath(), $hotelEntry);
    $hotelHtml .= $hotelEntry;
}

// Replace the loop block in the template
$template = preg_replace('/{{HOTEL_LOOP}}(.*?){{HOTEL_LOOP_END}}/s', $hotelHtml, $template);

echo $template;
?>
