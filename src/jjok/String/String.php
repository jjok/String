<?php

/**
 * Copyright (c) 2013 Jonathan Jefferies
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */

namespace jjok\String;

/**
 * Useful string functions.
 * @package jjok\String
 * @version 1.0.0
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
