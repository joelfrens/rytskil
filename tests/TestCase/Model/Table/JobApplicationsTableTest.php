<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobApplicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobApplicationsTable Test Case
 */
class JobApplicationsTableTest extends TestCase
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JobApplications') ? [] : ['className' => 'App\Model\Table\JobApplicationsTable'];
        $this->JobApplications = TableRegistry::get('JobApplications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobApplications);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
