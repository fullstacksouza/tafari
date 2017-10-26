<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Youtube;
class YoutubeController extends Controller
{
    //
    public function upload(Request $request)
    {
    	$file = $request->file('video');
    
    	$video = Youtube::upload('teste.mkv',[
    'title'       => 'Teste upload de videos',
    'description' => 'Teste de uploads de videos',
    'tags'	      => ['foo', 'bar', 'baz'],
    'category_id' => 10
]);

return $video->getVideoId();
    }
}
