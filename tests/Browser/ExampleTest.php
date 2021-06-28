<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'admin@admin.com')
                ->type('password', '123456789')
                ->click('.btn.btn-primary.bnt-block')
                ->assertSee('Bienvenido Administrador');
        });
    }

    public function testCreate()
    {
        $this->browse(function (Browser $browser) {
            $randNum = rand(1, 100);
            $email = 'user' . $randNum . '@gmail.com';
            $browser->visit('/admin/user-create')
                ->type('name', 'julito maraña')
                ->type('email', $email)
                ->type('phone', '374337' . $randNum)
                ->select('gender', 'Hombre')
                ->select('status', '1')
                ->type('password', '12345678')
                ->click('.btn.btn-success')
                ->assertSee($email);
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $randNum = rand(1, 100);
            $email = 'user' . $randNum . '@gmail.com';
            $browser->visit('/admin/user-update/4')
                ->type('name', 'chavelo')
                ->type('email', $email )
                ->type('phone', '374337' . $randNum)
                ->select('gender', 'Hombre')
                ->select('status', '1')
                ->type('password', '12345678')
                ->click('.btn.btn-primary')
                ->assertSee($email);
        });
    }

    public function testDelete(){
        $this->browse(function (Browser $browser){
            $id = 5;
            $user = User::query()->where('id',$id)->first();
            $browser->visit('/admin/user')
                ->click('#delete'.$user->id)
                ->waitForDialog()
                ->acceptDialog()
                ->assertDontSee($user->email);
        });
    }
}
