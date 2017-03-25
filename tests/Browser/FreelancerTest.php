<?php


namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FreelancerTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testNewFreelancer()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'Freelancer')
                    ->type('email', 'freelancer@email.com') 
                    ->type('password', '12345678') 
                    ->type('password_confirmation', '12345678')                    
                    ->radio('type', 'freelancer')
                    ->press('Sign up')
                    ->select('tech', 'java')
                    ->select('location', 'glasgow') 
                    ->type('wage', '5') 
                    ->type('phonenumber', '01234567890')                    
                    ->type('startdate', '2017-03-13')
                    ->type('enddate', '2017-03-20')
                    ->type('description', 'Description')
                    ->press('Sign up')
                    
                    ->assertPathIs('/home');
        });
    }
    
    public function testSetPreferencesRoute()
    {
        $this->browse(function (Browser $browser3) {
            $browser3->visit('/setpreferences')
                    ->assertPathIs('/setpreferences');
        });
    }
    
    public function testCreateJobRoute()
    {
        $this->browse(function (Browser $browser4) {
            $browser4->visit('/createjob')
                    ->assertPathIs('/createjob');
        });
    }
    
    public function testSetProfileRoute()
    {
        $this->browse(function (Browser $browser5) {
            $browser5->visit('/setprofile')
                    ->assertPathIs('/setprofile');
        });
    }
    
        public function testUsersFreelancersRoute()
    {
        $this->browse(function (Browser $browser7) {
            $browser7->visit('/users/employers')
                    ->assertPathIs('/users/freelancers');
        });
    }
    
        public function testJobsRoute()
    {
        $this->browse(function (Browser $browser8) {
            $browser8->visit('/jobs')
                    ->assertPathIs('/jobs');
        });
    }
}
