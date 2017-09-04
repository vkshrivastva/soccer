<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SoccerTest extends TestCase
{
	use DatabaseMigrations;

	/**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        putenv('DB_DATABASE=soccer_testing');
        $app = require __DIR__ . '/../../bootstrap/app.php';

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }
/**
 * This function will setup the application with the testdatabase 'soccer_testing' and will run migration 
 * to create required table structures and then seed the database for some test data to test
 * [setUp description]
 */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function tearDown()
    {
        // Artisan::call('migrate:fresh');
        // parent::tearDown();
    }	


	public function testTableTeamData(){
	   	$this->assertDatabaseHas('teams', [
	        'id' => 1
	    ]);

	   	$this->assertDatabaseHas('players', [
	        'id' => 1
	    ]);
	}


    /**
     * [testTeamList to test the application runnning or not]
     * @return [type] [description]
     */
    public function testTeamList(){
    	$response=$this->get('/');
    	$this->assertEquals(200, $response->status());
    	$response->assertSeeText('Soccer Team DashBoard');
        $response->assertViewHas('teams');

        $response->assertViewHas('players');
        $response->assertViewHas('reqTeamId');
    }

    public function testTeamPlayerList(){
    	$this->assertEquals(200, $response->status());
    	$response->assertSeeText('Soccer Team DashBoard');
        $response->assertViewHas('teams');

        $response->assertViewHas('players');
        $response->assertViewHas('reqTeamId');
    }
    
}
