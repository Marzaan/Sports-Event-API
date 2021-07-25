<?php

namespace App\Http\Controllers;

use App\Models\EventsModel;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function singleEvent($id){
        $event = EventsModel::where('id',$id)->get();
        return $event;
    }
    public function getEvents(){
        $events = EventsModel::where('status',"Enable")->orderBy('id','desc')->get();
        return $events;
    }
    public function featuredEvents(){
        $events = EventsModel::where('featured',"Yes")->get();
        return $events;
    }
    public function eventsByCategory($category){
        $events = EventsModel::where('category',$category)->get();
        return $events;
    }
    public function searchEvents($query){
        $events = EventsModel::where('event', 'like', '%'.$query.'%')
            ->orWhere('description', 'like', '%'.$query.'%')
            ->orWhere('category', 'like', '%'.$query.'%')
            ->orWhere('date', 'like', '%'.$query.'%')
            ->orderBy('id', 'asc')
            ->get();
        return $events;
    }
    public function createEvent(Request $request){
        $category = $request->input('category');
        $event = $request->input('event');
        $description = $request->input('description');
        $date = $request->input('date');
        $imagePath = $request->file('image')->store('public');
        $imageName = explode("/", $imagePath)[1];
        $imageURL = "http://".$_SERVER['HTTP_HOST']."/storage/".$imageName;
        $status = $request->input('status');
        $feature = "No";
        if($request->input('featured')=="on"){
            $feature = "Yes";
        }
        $result = EventsModel::insert([
            'category'=> $category,
            'event'=> $event,
            'description'=> $description,
            'date'=> $date,
            'image'=> $imageURL,
            'status'=> $status,
            'featured' => $feature
        ]);
        return $result;
    }
    public function updateEvent(Request $request, $id)
    {
        $event = EventsModel::find($id);

        if(!empty($request->input('category'))){
            $event->category = $request->input('category');
        }
        if(!empty($request->input('event'))){
            $event->event = $request->input('event');
        }
        if(!empty($request->input('description'))){
            $event->description = $request->input('description');
        }
        if(!empty($request->input('date'))){
            $event->date = $request->input('date');
        }
        if(!empty($request->file('image'))){
            $imagePath = $request->file('image')->store('public');
            $imageName = explode("/", $imagePath)[1];
            $imageURL = "http://".$_SERVER['HTTP_HOST']."/storage/".$imageName;
            $event->image = $imageURL;
        }
        if(!empty($request->input('status'))){
            $event->status = $request->input('status');
        }
        if(!empty($request->input('featured'))){
            $feature = "No";
            if($request->input('featured')=="on"){
                $feature = "Yes";
            }
            $event->featured = $feature;
        }
        $event->save();
        return $event;
    }
    public function deleteEvent($id)
    {
        $event = EventsModel::find($id);
        $event->delete();
        return $event;
    }
    public function featuredEvent($id)
    {
        $event = EventsModel::find($id);
        $event->featured = "Yes";

        $event->save();
        return $event;
    }
}
