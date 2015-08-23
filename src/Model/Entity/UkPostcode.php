<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UkPostcode Entity.
 */
class UkPostcode extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'postcode' => false,
    ];
}
