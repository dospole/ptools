<?php
/*
    "require": {
        "weotch/phpthumb": "1.0.4"
    },
    "autoload": {
        "classmap": [""]
    },
 */
class PThumb
{
	/**
	 * PhpThumbFactory::create
	 * @param string $filename
	 * @param array $options
	 * @param string $isDataStream
	 * @return GdThumb
	 */
	static function init($filename = null, $options = array(), $isDataStream = false) {
		return PhpThumbFactory::create($filename, $options, $isDataStream);
	}
}
