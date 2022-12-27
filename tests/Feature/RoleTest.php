<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanShowRolePage()
    {
        $user = User::role('admin')->get()->random();
        $this->actingAs($user);
        $this->get('/role')->assertOk();
    }

    public function testCannotShowRolePage()
    {
        $user = User::role('manager')->get()->random();
        $this->actingAs($user);
        $this->get('/role')->assertStatus(403);
    }

    public function testWihoutLogin()
    {
        // $user = User::role('manager')->get()->random();
        // $this->actingAs($user);
        $this->get('/role')->assertStatus(302);
    }
}
