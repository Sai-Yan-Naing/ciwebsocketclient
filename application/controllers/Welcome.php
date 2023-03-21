<?php


require_once FCPATH . '/vendor/autoload.php';
use Textalk\Websocket\Client;

class Welcome extends CI_Controller {
	private $client;
	public function __construct()
	{
		$this->client = new WebSocket\Client("ws://localhost:8081");
	}

    public function index()
    {
        // Connect to the WebSocket server
        

        // Send a message to the server
        $this->client->send("Hello, world!");

        // Close the connection
        $this->client->close();
    }
}
