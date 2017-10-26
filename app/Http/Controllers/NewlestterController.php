<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Mail;
class NewlestterController extends Controller
{
    //cadastrar no newlestter
    public function subscriber(Subscriber $subscriber, Request $request)
    {
    	//VERIFICANDO SE JA EXISTE O EMAIL NO BANCO DE DADO
    	$subs = $subscriber->where('email',$request->email)->first();
    	if ($subs) {
    			return redirect()->back()->with('msg','Email já está cadastrado');
    	}
    
    	$subscriber->email = $request->email;
    
    	$subscriber->save();

      return redirect()->back()->with('msg','Obrigado por se inscrever! Agora você vai ficar sabendo de todas as novidades do meu trabalho!');
    } 

    public function sendNewlestter(Subscriber $subscribers)
    {
    	$subscriber =  $subscribers->all()->paginate(15);

   		foreach ($subscriber as $subs) {
   			$data = array('name' => $subs->name,'token'=>$subs->token);
   			Mail::send('layouts.email.new_song',$data,function($msg) use ($subs){
   				$msg->from('contato@podomane.com.br','Newlestter')
   				->subject("teste");
   				$msg->to($subs->email);

   			});
   		}
    	}

    	public function unsubscriberForm()
    	{
    		return view ('site.unsubscriber');
    	}

    public function unsubscriber(Request $request,Subscriber $subscriber)
    {
    
    $subs = $subscriber->where('email',$request->email)->first();
 	if ($subs) {
 		$subs->delete();
 		return redirect('/')->with('msg','Inscrição cancelada com sucesso');
 	} else{
 	
 		return redirect()->back()->with('msg','Email nao encontrado');
 	}
    
    
   
    }
    	
}
