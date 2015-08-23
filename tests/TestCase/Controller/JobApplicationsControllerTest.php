<?php
namespace App\Test\TestCase\Controller;

use App\Controller\JobApplicationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\JobApplicationsController Test Case
 */
class JobApplicationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_applications',
        'app.jobs',
        'app.agencies',
        'app.uk_postcodes',
        'app.job_types',
        'app.comments',
        'app.users',
        'app.countries',
        'app.user_cvs'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
