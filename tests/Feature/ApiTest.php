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

        $response->assetJsonStructure();

        // Check the JSON format

        
    }

    public function testGetSingleItem()
    {
        
        $item_id = factory(App\Item::class)->make()->id;

        $response = $this->get('/api/items/'.$item_id); // pass in id

        $response->assertStatus(200);

        $response->assetJsonStructure();

    }

    public function testUpdate()
    {
        create, update, check to see if it matches API

        $response->assertStatus(200);

        $response->assetJsonStructure();
    }

    public function testPostNewItem()
    {
        204
    }

    public function testDeleteItem()
    {
        $item_id = factory(App\Item::class)->make()->id;

        $response = $this->delete('/api/items/'.$item_id);

        $response->assertStatus(200);

        $response->assetJsonStructure();
    }

       
// Load a list of stuff
// Load a single item
// Put and update
// Post a new one
// Delete
// Open a page www.myapp.com/lists

}
