<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_list_get_with_values()
    {
        $response = $this->get('users');
        $response->assertOk();
    }

    public function test_script_alert_does_not_fire_modal()
    {
        $response = $this->get('/alert');
        $this->assertStringNotContainsString('<script>alert', $response->content());
    }

    public function test_loop_shows_table_or_empty()
    {
        $response = $this->get('/table');
        $this->assertStringContainsString('No content', $response->content());
    }

    public function test_rows_styled_with_number()
    {
        $users = User::factory(4)->create();
        $response = $this->get('/rows');
        $content = $response->content();




        $this->assertEquals(2, substr_count($content, 'bg-red-100'));

        $this->assertStringContainsString('<td class="font-bold">'.$users[0]->email.'</td>',
            str_replace(' ', '', $content));


        $this->assertStringContainsString('<td class="font-bold">' . $users[0]->email . '</td>', $content);
    }

    public function test_authenticated()
    {
        $response = $this->get('/authenticated');
        $response->assertSee('No, I am not logged in.');

        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/authenticated');
        $response->assertDontSee('No, I am not logged in.');
    }

    public function test_include_row()
    {
        $user = User::factory()->create();
        $response = $this->get('/include');
        $this->assertStringContainsString($user->email, $response->content());
    }

    public function test_meta_title()
    {
        $response = $this->get('/');
        $response->assertSee('Blade Test');
    }

    public function test_layout()
    {
        $response = $this->get('/layout');
        $response->assertOk();
        $response->assertSee('Please change layout');
    }
}
