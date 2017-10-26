<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Painel\Painel;
class PainelController extends Controller
{
    //buscar quantidade de inscritos no canal
    public function countSubscribers(Painel $painel)
    {
    	$statistic = $painel->getSubscribers();

		$sta = json_decode($statistic,true);
		//dd($sta);
		return $sta;
		
    }

    public function index()
    {
    	return view('painel.index');
    }
}
