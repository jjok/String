<?php

namespace jjok\String;

/**
 * Useful string functions.
 * @package jjok\String
 * @author Jonathan Jefferies (jjok)
 */
class String {

	/**
	 * Convert a string to camelcase.
	 * @param string $string The string to be converted.
	 * @return string The string in camelcase
	 */
	public static function camelise($string) {
		return lcfirst(self::capitalise($string));
	}

	/**
	 * Capitalise a string.
	 * 
	 * <p>Removes any hypens and underscores separating words.</p>
	 * @param string $string The string to be converted.
	 * @return string The capitalised string.
	 */
	public static function capitalise($string) {
		$string = str_replace(array('-', '_'), ' ', $string);

		return str_replace(' ', '', ucwords($string));
	}

	/**
	 * Hyphenate a camelcase string.
	 * @param string $string The string to be converted.
	 * @return string The hyphenated string.
	 */
	public static function hyphenate($string) {
		$string = preg_replace('#(?<=[a-z])([A-Z])#', '-$0', $string);
		
		return strtolower(str_replace(' ', '-', $string));
	}
}
