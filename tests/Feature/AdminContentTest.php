<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\PersonDataService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminContentTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_update_and_delete_a_project(): void
    {
        $user = User::factory()->create(['is_admin' => true]);
        $payload = [
            'name' => 'New project',
            'description' => 'A project description.',
            'role' => 'Developer',
            'image' => '',
            'liveUrl' => '',
            'sourceCodeUrl' => '',
        ];

        $this->actingAs($user)
            ->post(route('admin.content.store', 'projects'), $payload)
            ->assertRedirect(route('admin.content.index', 'projects'));

        $items = app(PersonDataService::class)->collection('projects');
        $index = array_key_last($items);
        $this->assertSame('New project', $items[$index]['name']);

        $this->actingAs($user)
            ->put(route('admin.content.update', ['projects', $index]), [
                ...$payload,
                'name' => 'Updated project',
            ])
            ->assertRedirect(route('admin.content.index', 'projects'));

        $this->assertSame('Updated project', app(PersonDataService::class)->collection('projects')[$index]['name']);

        $this->actingAs($user)
            ->delete(route('admin.content.destroy', ['projects', $index]))
            ->assertRedirect(route('admin.content.index', 'projects'));
    }
}
