<?php


namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmployerTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testNewEmployer()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->press('Sign Up')
                    ->type('name', 'Employer')
                    ->type('email', 'employer@email.com') 
                    ->type('password', '12345678') 
                    ->type('password_confirmation', '12345678')                    
                    ->radio('type', 'employer')
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
                    ->type('email', 'cal@email.com')
                    ->type('password', '12345678')
                    ->press('Sign in')
                    ->assertPathIs('/setpreferences');
        });
    }
    
    public function testCreateJobRoute()
    {
        $this->browse(function (Browser $browser4) {
            $browser4->visit('/createjob')
                    ->type('email', 'cal@email.com')
                    ->type('password', '12345678')
                    ->press('Sign in')
                    ->assertPathIs('/createjob');
        });
    }
    
    public function testSetProfileRoute()
    {
        $this->browse(function (Browser $browser5) {
            $browser5->visit('/setprofile')
                    ->type('email', 'cal@email.com')
                    ->type('password', '12345678')
                    ->press('Sign in')
                    ->assertPathIs('/setprofile');
        });
    }
    
        public function testUsersFreelancersRoute()
    {
        $this->browse(function (Browser $browser7) {
            $browser7->visit('/users/freelancers')
                    ->type('email', 'cal@email.com')
                    ->type('password', '12345678')
                    ->press('Sign in')
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
