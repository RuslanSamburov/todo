<?php

namespace Tests\Feature;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoTest extends TestCase
{
    public function test_create_task(): void
    {
        $response = $this->post('/', [
            'title' => 'Test',
            'description' => 'Tester',
            'status' => 'Progress',
        ]);

        $response->assertStatus(200);
    }

    public function test_update_task(): void
    {
        $response = $this->put('/' . Todo::all()->last()->id, [
            'title' => 'Test2',
            'description' => 'Tester1',
            'status' => 'Success',
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_task(): void
    {
        $response = $this->delete('/' . Todo::all()->last()->id);

        $response->assertStatus(200);
    }
}
