<?php

namespace App\Painel;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Painel extends Model
{
    //
    public function getSubscribers()
    {
    	$client = new Client();
    	$api_key = config("youtube.api_key");
    	$username = config("youtube.username");

    	$url = "https://www.googleapis.com/youtube/v3/channels";
    	$response = $client->request("GET",$url,
    		['query'=>[
    			'part'=> 'statistics',
    			'forUsername'=>$username,
    			'key' => $api_key,
    		]]);

    	$contents = $response->getBody()->getContents();

    	 
    	return (string) $contents;
    }

}
