<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity.
 */
class Comment extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'title' => true,
		'body' => true,
		'user_id' => true,
		'status' => true,
		'post_id' => true,
		'user' => true,
		'post' => true,
	];

}
