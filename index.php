<?php
require_once 'vendor/autoload.php';
use Adamogris\WebtFluidTemplatingEngine\Model\Entity\Hotel;
use TYPO3Fluid\Fluid\View\TemplateView;
use TYPO3Fluid\Fluid\View\TemplatePaths;

$hotels = [
    new Hotel("Seaside Paradise", "Located in the heart of the city, Hotel Paradise offers breathtaking views and world-class amenities.", "src/images/hotelParadise.jpg"),
    new Hotel("Ocean View Resort", "Wake up to the sound of the waves at Ocean View Resort, where luxury meets the tranquility of the sea.", "src/images/OceanViewResort.jpg"),
    new Hotel("Mountain Escape Lodge", "Surrounded by stunning mountains, this lodge is the perfect getaway for those seeking adventure and relaxation.", "src/images/mountainsEscapeLodge.jpg")
];


// Create a new Fluid view
$view = new TemplateView();

// Define template paths
$view->setTemplateRootPaths([__DIR__ . '/src/templates']); // Adjusted to match your structure

// Assign variables
$view->assign('name', 'Adam');

// Render the template
echo $view->render('index');
?>
