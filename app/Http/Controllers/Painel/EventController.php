<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Calendar;
use App\Painel\Event;
use Faker\Generator as Faker;
class EventController extends Controller
{
    //listando eventos
    public function index(Event $event,Faker $faker)
    {
    	$events = [];
    	$data = $event->all();

    	if ($data->count())
    	{
    		foreach ($data as $key => $value) {
    			$events[] = Calendar::event
    			(
    				$value->title,
    				false,
    				new \DateTime($value->start_date),
    				new \DateTime($value->end_date),
    				$value->id,
    				[
    					'color' => $faker->hexcolor(),
    					'url' => '#',
    				]

    			);
    		}
    	}
    	$calendar = Calendar::addEvents($events)->setOptions([' locale' => 'pt'])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
        	'eventClick' => 'function(calEvent, jsEvent, view) {
        	document.getElementById("date").value = moment(calEvent.start).format("YYYY-MM-DD");
        	document.getElementById("title").value = calEvent.title;
        	showModal(calEvent);
      

    	}','dayClick' =>"function(date, jsEvent, view) {
    		 document.getElementById('event_add').reset();
    		 document.getElementById('button_remove').style.display = 'none';
    		 document.getElementById('button_update').style.display = 'none';
    		 document.getElementById('buttonS').style.display = 'inline';
    	document.getElementById('date').value = date.format();

        $('#myModal').modal();

    	}"]);
    	return view("painel.calendar",compact('calendar'));
    }

    //adicionando eventos
    public function addEvent(Request $request,Event $event)
    {	
    	 $validatedData = $request->validate([
        'title' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
    ]);
    	 if (!$validatedData) {
    	  return "erro";
    	 }
    	$event->title =$request->title;
    	$event->start_date = new \DateTime($request->start_date);
    	$event->end_date = new \DateTime($request->end_date);
    	$event->save();
    	return redirect("admin/agenda");
    }

    public function deleteEvent(Request $request,Event $event)
    {
    	$evento = $event->findOrFail($request->id);
    	//dd($event);
    	$evento->delete();
    	//return redirect("admin/agenda");
    }

    public function updateEvent(Request $request,Event $event)
    {
    	$evento = $event->findOrFail($request->id);
    	//dd($event);
    	$evento->title = $request->title;
    	$evento->start_date = $request->start_date;
    	$evento->end_date = $request->end_date;
    	$evento->save();
    	//return redirect("admin/agenda");
    }
    
}
