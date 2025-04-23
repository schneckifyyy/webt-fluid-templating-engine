<?php
require_once 'vendor/autoload.php';

use Adamogris\WebtFluidTemplatingEngine\Model\Entity\Hotel;
use TYPO3Fluid\Fluid\View\TemplateView;
use TYPO3Fluid\Fluid\View\TemplatePaths;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContext;

// Determine the requested page (default to "index")
$page = $_GET['page'] ?? 'index';

// Example data for the homepage
$hotels = [
    new Hotel("Seaside Paradise", "Located in the heart of the city, Hotel Paradise offers breathtaking views and world-class amenities.", "../images/hotelParadise.jpg"),
    new Hotel("Ocean View Resort", "Wake up to the sound of the waves at Ocean View Resort, where luxury meets the tranquility of the sea.", "../images/OceanViewResort.jpg"),
    new Hotel("Mountain Escape Lodge", "Surrounded by stunning mountains, this lodge is the perfect getaway for those seeking adventure and relaxation.", "../images/mountainsEscapeLodge.jpg")
];

// Setup Fluid
$paths = new TemplatePaths();
$paths->setTemplateRootPaths([__DIR__ . '/src/templates']);
$paths->setLayoutRootPaths([__DIR__ . '/src/layouts']);
$paths->setPartialRootPaths([__DIR__ . '/src/partials']);

$context = new RenderingContext();
$context->setTemplatePaths($paths);

$view = new TemplateView();
$view->setRenderingContext($context);

// Assign global variables
$view->assign('hotels', $hotels);
$view->assign('page', $page);

// Render the page (e.g., index.html, about.html, contact.html)
echo $view->render($page);
