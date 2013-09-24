<?php

require_once 'src/jjok/String/String.php';

use jjok\String\String;

class StringTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @covers jjok\String\String::camelise
	 */
	public function testStringCanBeCamelised() {
		$this->assertSame('', String::camelise(''));
		$this->assertSame('', String::camelise(' '));
		$this->assertSame('', String::camelise('-'));
		$this->assertSame('1234567890', String::camelise('1234567890'));
		$this->assertSame('qwertyuiop', String::camelise('qwertyuiop'));
		$this->assertSame('qWERTYUIOP', String::camelise('QWERTYUIOP'));
		$this->assertSame('aHyphenatedString', String::camelise('a-hyphenated-string'));
		$this->assertSame('anHyphenatedString', String::camelise('an-hyphenated-string'));
		$this->assertSame('camelCaseString', String::camelise('CamelCaseString'));
		$this->assertSame('someCamelCaseString', String::camelise('someCamelCaseString'));
		$this->assertSame('aStringWithSpaces', String::camelise('a string with spaces'));
	}
	
	/**
	 * @covers jjok\String\String::capitalise
	 */
	public function testStringCanBeCapitalised() {
		$this->assertSame('', String::capitalise(''));
		$this->assertSame('', String::capitalise(' '));
		$this->assertSame('', String::capitalise('-'));
		$this->assertSame('1234567890', String::capitalise('1234567890'));
		$this->assertSame('Qwertyuiop', String::capitalise('qwertyuiop'));
		$this->assertSame('QWERTYUIOP', String::capitalise('QWERTYUIOP'));
		$this->assertSame('AHyphenatedString', String::capitalise('a-hyphenated-string'));
		$this->assertSame('AnHyphenatedString', String::capitalise('an-hyphenated-string'));
		$this->assertSame('CamelCaseString', String::capitalise('CamelCaseString'));
		$this->assertSame('SomeCamelCaseString', String::capitalise('someCamelCaseString'));
		$this->assertSame('AStringWithSpaces', String::capitalise('a string with spaces'));
	}
	
	/**
	 * @covers jjok\String\String::hyphenate
	 */
	public function testStringCanBeHyphenated() {
		$this->assertSame('', String::hyphenate(''));
		$this->assertSame('-', String::hyphenate(' '));
		$this->assertSame('-', String::hyphenate('-'));
		$this->assertSame('1234567890', String::hyphenate('1234567890'));
		$this->assertSame('qwertyuiop', String::hyphenate('qwertyuiop'));
		$this->assertSame('qwertyuiop', String::hyphenate('QWERTYUIOP'));
		$this->assertSame('camel-case-string', String::hyphenate('CamelCaseString'));
		$this->assertSame('some-camel-case-string', String::hyphenate('someCamelCaseString'));
		$this->assertSame('a-hyphenated-string', String::hyphenate('a-hyphenated-string'));
		$this->assertSame('an-hyphenated-string', String::hyphenate('an-hyphenated-string'));
		$this->assertSame('a-string-with-spaces', String::hyphenate('a string with spaces'));
	}
}
