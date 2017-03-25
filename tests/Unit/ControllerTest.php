<?php

namespace Tests\Unit;

use Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDefaultControllerTest()
    {
        $this->get('/');
            if(Auth::guest() == true){
            $this->assertViewHas('Find your new job');
            }
//            else{
//            $this->see('FIND YOUR NEW JOB'); 
//            }
    }
}
