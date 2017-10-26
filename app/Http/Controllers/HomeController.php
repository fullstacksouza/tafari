<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Painel\Videos;
class HomeController extends Controller
{
    //
    public function index(Videos $video)
    {
        $videos = $video->paginate(4);
    	$home = 'current-menu-item';
    	$page = 'HOME';
    	return view('site.index',compact('home','page','videos'));
    }

    public function about()
    {
    	$about = 'current-menu-item';
    	$page = 'SOBRE';
    	return view('site.about',compact("about",'page'));
    }

    public function gallery()
    {
    	$gallery = 'current-menu-item';
    	$page = 'GALERIA';
    	return view('site.gallery',compact("gallery",'page'));	
    }

     public function downloads()
    {
    	$downloads = 'current-menu-item';
    	$page = 'DOWNLOADS';
    	return view('site.downloads',compact("downloads",'page'));	
    }

     public function appbook()
    {
    	$appbook = 'current-menu-item';
    	$page = 'AGENDA';
    	return view('site.appbook',compact("appbook",'page'));	
    }
    
    public function contact()
    {
    	$contact = 'current-menu-item';
    	$page = 'CONTATO';
    	return view('site.contact',compact("contact",'page'));	
    }
}
