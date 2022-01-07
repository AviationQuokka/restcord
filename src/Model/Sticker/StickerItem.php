<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Model\Sticker;

/**
 * StickerItem Model
 */
class StickerItem {

	/**
	 * type of sticker format
	 *
	 * @var int
	 */
	public $format_type;

	/**
	 * id of the sticker
	 *
	 * @var int
	 */
	public $id;

	/**
	 * name of the sticker
	 *
	 * @var string
	 */
	public $name;

	/**
	 * @param array $content
	 */
	public function __construct(array $content = null) {
		if (null === $content) {
		    return;
		}
		                    
		foreach ($content as $key => $value) {
		    $key = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));
		    if (property_exists($this, $key)) {
		        $this->{$key} = $value;
		    }
		}
	}
}