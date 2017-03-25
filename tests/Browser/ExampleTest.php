<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testWelcomeRoute()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertPathIs('/');
        });
    }
    
//    public function testLoginRoute()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/login')
//                    ->assertPathIs('/login');
//        });
//    }
//    
//    public function testRegisterRoute()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/register')
//                    ->assertPathIs('/register');
//        });
//    }
//    
//    public function testHomeRoute()
//    {
//        $this->browse(function (Browser $browser2) {
//            $browser2->visit('/home')
//                    ->type('email', 'cal@email.com')
//                    ->type('password', '12345678')
//                    ->press('Sign in')
//                    ->assertPathIs('/home')
//                    ->visit('/logout');
//        });
//    }
//    
//    public function testSetPreferencesRoute()
//    {
//        $this->browse(function (Browser $browser3) {
//            $browser3->visit('/setpreferences')
//                    ->type('email', 'cal@email.com')
//                    ->type('password', '12345678')
//                    ->press('Sign in')
//                    ->assertPathIs('/setpreferences');
//        });
//    }
//    
//    public function testCreateJobRoute()
//    {
//        $this->browse(function (Browser $browser4) {
//            $browser4->visit('/createjob')
//                    ->type('email', 'cal@email.com')
//                    ->type('password', '12345678')
//                    ->press('Sign in')
//                    ->assertPathIs('/createjob');
//        });
//    }
//    
//    public function testSetProfileRoute()
//    {
//        $this->browse(function (Browser $browser5) {
//            $browser5->visit('/setprofile')
//                    ->type('email', 'cal@email.com')
//                    ->type('password', '12345678')
//                    ->press('Sign in')
//                    ->assertPathIs('/setprofile');
//        });
//    }
//    
//    public function testUsersEmployersRoute()
//    {
//        $this->browse(function (Browser $browser6) {
//            $browser6->visit('/users/employers')
//                    ->type('email', 'test@email.com')
//                    ->type('password', '12345678')
//                    ->press('Sign in')
//                    ->assertPathIs('/users/employers');
//        });
//    }
//    
//    public function testUsersFreelancersRoute()
//    {
//        $this->browse(function (Browser $browser7) {
//            $browser7->visit('/users/freelancers')
//                    ->type('email', 'cal@email.com')
//                    ->type('password', '12345678')
//                    ->press('Sign in')
//                    ->assertPathIs('/users/freelancers');
//        });
//    }
//    
//    public function testJobsRoute()
//    {
//        $this->browse(function (Browser $browser8) {
//            $browser8->visit('/jobs')
//                    ->assertPathIs('/jobs');
//        });
//    }
//    
}
