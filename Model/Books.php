<?php

class Books 
{
public $query;

//TODO ADD books to your collection
//TODO search for books in api
    //TODO validate the query
    //TODO run the query in the api
    //TODO get the data in json
    //TODO click the book to add to your owned books

function __construct (string $query)
{
    $this->query = $query;
}


require_once './vendor/autoload.php';
require_once 'Model/config.php';


// instantiate the Google API Client
$client = new Google_Client();
$client->setApplicationName("MVC");
$client->setDeveloperKey($config['APIKeyBooks']);

// get an instance of the Google Books client
$service = new Google_Service_Books($client);

// set options for your request
$optParams = [];

// make the API call to retrieve some search results
$results = $service->volumes->listVolumes($this->query, $optParams);

foreach ( $results as $item ) {
    echo $item['volumeInfo']['title'], "<br /> \n";
    echo '<a href="' . $item['volumeInfo']['previewLink'] . '">' . $item['volumeInfo']['previewLink'] . '</a>';
    echo '<pre>';
    // useful for debugging and checking which fields actually are in each item of the response
    var_dump( $item );
    echo '</pre>';
}
}

