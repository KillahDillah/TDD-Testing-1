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

        // $response->assetJsonStructure();

        // Check the JSON format
    }

    public function testGetSingleItem()
    {
        
        $item_id = factory(\App\Item::class)->make()->id;

        $response = $this->get('/api/items/'.$item_id); // pass in id

        $response->assertStatus(200);

        // $response->assetJsonStructure();

    }

    public function testUpdateSingleItem()
    {
        $item = factory(\App\Item::class)->make([
            'name' => 'Clean',
            'id' => '1234'
        ]);    //create new data, bring in data I specify

        $response = $this->get('/api/items/'.$item->id);

        // $response->assertStatus(200);
        // $response = assertSee($item); // how to test if item is being returned?
        //should it be assertViewHas or some other variation to see if 'name' field is returned 

        $response = $this->put('/api/items/'.$item->id, [
            'name' => 'Shop',
        ]);

        $response = $this->get('/api/items/'.$item->id);
        
        // $response->assertStatus(200); //what status code should be placed here? not always a 200

        $response->assertJsonStructure([
            'name',
            'description',
            'code',
            'status'

        ]); // assertJsonStructure?
    }

    public function testPostNewItem()  //  create new entry in DB, place all data in necessary locations,make axios call to verify data is there
    {
        $item = factory(\App\Item::class)->make();
        
        $response = $this->get('/api/items/'.$item->id);
        
        $response->assertSee($item->description);

    }

    public function testDeleteItem() 
    {

        $item_id = factory(\App\Item::class)->make()->id;

        $response = $this->delete('/api/items/'.$item_id);

        $response->assertStatus(404);

        // $response->assetJsonStructure();
    }

       
// Load a list of stuff
// Load a single item
// Put and update
// Post a new one
// Delete
// Open a page www.myapp.com/lists

}
