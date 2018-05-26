<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class BuzzController extends Controller
{
    /**
     * Allow a team to buzz in
     */
    public function buzzIn(Room $room)
    {
        // JUST FOR TESTING:
        $newRoom = new Room;
        $newRoom->name = "TESTING";
        $newRoom->description = "description";
        $newRoom->save();

        return response()->json([
            'room' => $newRoom
        ], 200);
    }
}
