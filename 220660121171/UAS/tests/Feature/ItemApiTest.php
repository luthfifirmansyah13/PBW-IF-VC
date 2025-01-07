<?php

namespace Tests\Feature;

use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemApiTest extends TestCase
{
    use RefreshDatabase;

    // Test untuk mengambil semua produk
    public function test_it_can_fetch_all_items()
    {
        $item = Item::factory()->create();

        $response = $this->get('/api/items');
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $item->name]);
    }

    // Test untuk mengambil produk berdasarkan ID
    public function test_it_can_fetch_item_by_id()
    {
        $item = Item::factory()->create();

        $response = $this->get("/api/items/{$item->id}");
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => $item->name]);
    }

    // Test untuk menambah produk baru
    public function test_it_can_create_item()
    {
        $data = [
            'name' => 'New Item',
            'price' => 200,
            'description' => 'Description of new item'
        ];

        $response = $this->post('/api/items', $data);
        $response->assertStatus(201);
        $response->assertJsonFragment($data);
    }

    // Test untuk mengupdate produk
    public function test_it_can_update_item()
    {
        $item = Item::factory()->create();
        $updatedData = [
            'name' => 'Updated Item',
            'price' => 250,
            'description' => 'Updated description'
        ];

        $response = $this->put("/api/items/{$item->id}", $updatedData);
        $response->assertStatus(200);
        $response->assertJsonFragment($updatedData);
    }

    // Test untuk menghapus produk
    public function test_it_can_delete_item()
    {
        $item = Item::factory()->create();

        $response = $this->delete("/api/items/{$item->id}");
        $response->assertStatus(200);
        $response->assertJson(['message' => 'Item deleted']);
    }
}
