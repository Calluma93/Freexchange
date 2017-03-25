<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ControllerTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testDefaultController()
    {
        $this->browse(function (Browser $browser1, $browser2, $browser3, $browser4) {
            $browser1->visit('/')
                     ->assertSee('Being a Freelancer is stressful enough, let us find you your new perfect job!');
            $browser2->loginAs(User::find(1))
                     ->visit('/home')
                     ->assertPathIs('/home');
            $browser3->loginAs(User::find(1))
                     ->visit('/')
                     ->assertPathIs('/home');
            $browser4->visit('/home')
                     ->assertPathIs('/login');
            
        });
    }
    
     public function testJobCreateForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/createjob')
                    ->type('title', 'Job')
                    ->select('tech', 'java') 
                    ->type('location', 'edinburgh') 
                    ->type('wage', '10')                    
                    ->type('description', 'Job Description')                                      
                    ->type('startdate', '2017-03-13')
                    ->type('enddate', '2017-03-20')                   
                    ->press('Create Job')
                    
                    ->assertPathIs('/home');
        });
    }
}