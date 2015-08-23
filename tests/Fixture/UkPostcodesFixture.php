<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UkPostcodesFixture
 *
 */
class UkPostcodesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'postcode' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'eastings' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'northings' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'latitude' => ['type' => 'decimal', 'length' => 12, 'precision' => 5, 'unsigned' => false, 'null' => false, 'default' => '0.00000', 'comment' => ''],
        'longitude' => ['type' => 'decimal', 'length' => 12, 'precision' => 5, 'unsigned' => false, 'null' => false, 'default' => '0.00000', 'comment' => ''],
        'town' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'region' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'country' => ['type' => 'string', 'length' => 3, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'country_string' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'x' => ['type' => 'index', 'columns' => ['eastings', 'northings'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['postcode'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'postcode' => '24637c07-f539-4efa-8c97-0548a2fcc499',
            'eastings' => 1,
            'northings' => 1,
            'latitude' => '',
            'longitude' => '',
            'town' => 'Lorem ipsum dolor sit amet',
            'region' => 'Lorem ipsum dolor sit amet',
            'country' => 'L',
            'country_string' => 'Lorem ipsum do'
        ],
    ];
}
