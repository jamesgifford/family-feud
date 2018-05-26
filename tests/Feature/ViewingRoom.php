<?php

namespace Tests\Feature;

use App\Models\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function viewerCanViewRoom()
    {
        $room = factory(Room::class)->create();

        $response = $this->get('/room/' . $room->hash_id);

        $response->assertStatus(200);
    }
}
