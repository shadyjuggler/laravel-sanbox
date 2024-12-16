<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendeeResource;
use App\Http\Traits\CanLoadRelationships;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Models\Event;

class AttendeeController extends Controller
{
    use CanLoadRelationships;

    private $relations = ['user'];
   
    public function index(Event $event)
    {
        $attendees = $this->loadRelationships(
            $event->attendees()->latest()
        );
        
        return AttendeeResource::collection(
            $attendees->paginate()
        );
    }

    public function store(Request $request, Event $event)
    {   
        $attendee = $this->loadRelationships(
            $event->attendees()->create([
                'user_id' => 1
            ])
        );

        return new AttendeeResource($attendee);
    }

   
    public function show(Event $event, Attendee $attendee)
    {
        return new AttendeeResource(
            $this->loadRelationships($attendee)
        );
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

 
    public function destroy(string $event, Attendee $attendee)
    {
        $attendee->delete();

        return response(status: 204);
    }
}
