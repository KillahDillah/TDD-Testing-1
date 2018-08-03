<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{


    public function testGetList()
    {
        $response = $this->get('/api/items');

        $response->assertStatus(200);

    }

    public function testGetSingleItem()
    {
        $item_id = factory(\App\Item::class)->make()->id;

        $response = $this->get('/api/items/'.$item_id); // pass in id

        $response->assertStatus(200);

    }

    public function testUpdateSingleItem()
    {
        $item = factory(\App\Item::class)->make([
            'name' => 'Clean',
            'id' => '1',
        ]);    //create new data, bring in data I specify
        
        $response = $this->get('/api/items/'.$item->id);

        $response->assertStatus(200);

        $response = $this->put('/api/items/'.$item->id, [
            'name' => 'Shop',
            'id' => '1',
        ]);   
             
        $response->assertStatus(200); //what status code should be placed here? not always a 200

        $response->assertJsonStructure([
            'name',
            'id',
        ]); // assertJsonStructure?
    }

    public function testPostNewItem()  //  create new entry in DB, place all data in necessary locations,make axios call to verify data is there
    {
        $item = factory(\App\Item::class)->make();
        
        $response = $this->get('/api/items/'.$item->id);

        $response->assertStatus(200);

    }
}
