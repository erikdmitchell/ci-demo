<?php
namespace erikdmitchell\ci_demo;

/**
 * First Class Test.
 *
 * @class    First_Class_Test
 * @package
 * @category Class
 * @author
 */
class First_Class_Test extends \PHPUnit\Framework\TestCase {

    /**
     * Test encoding string: string
     */
    public function testEncodeStringString() {
        $firstclass = new FirstClass();
        $encoded    = $firstclass->encodeString( 'string' );
        $this->assertSame( $encoded, '120rwp' );
    }

    /**
     * Test encoding empty string
     */
    public function testEncodeStringWithEmptyString() {
        $firstclass = new FirstClass();
        $encoded    = $firstclass->encodeString( '' );
        $this->assertSame( $encoded, '' );
    }

    /**
     * Test decoding empty string
     */
    public function testDecodeStringWithEmptyString() {
        $firstclass = new FirstClass();
        $decoded    = $firstclass->decodeString( '' );
        $this->assertSame( $decoded, '' );
    }

    /**
     * Test encoding upper case strings
     */
    public function testEncodeStringWithUppercaseString() {
        $firsclass = new FirstClass();
        $encoded   = $firsclass->encodeString( 'STRING' );
        $this->assertSame( $encoded, '120rwp' );
    }

    /**
     * Test decoding upper case strings
     */
    public function testDecodeStringWithUppercaseString() {
        $firsclass = new FirstClass();
        $decoded   = $firsclass->decodeString( '120RWP' );
        $this->assertSame( $decoded, 'string' );
    }

    /**
     * Test encoding with non existent characters
     */
    public function testEncodeStringWithNonExistentCharacter() {
        $firsclass = new FirstClass();
        $this->expectException( \Exception::class );
        $this->expectExceptionMessage( 'Please provide only numbers and alphanumerical characters' );
        $encoded = $firsclass->encodeString( '@#!' );
    }

    /**
     * Test decoding with non existent characters
     */
    public function testDecodeStringWithNonExistentCharacter() {
        $firsclass = new FirstClass();
        $this->expectException( \Exception::class );
        $this->expectExceptionMessage( 'Please provide only numbers and alphanumerical characters' );
        $decoded = $firsclass->decodeString( '@#!' );
    }

    /**
     * Test encoding numbers
     */
    public function testEncodeStringWithNumbers() {
        $firstclass = new FirstClass();
        $encoded    = $firstclass->encodeString( '456' );
        $this->assertSame( $encoded, 'def' );
    }

    /**
     * Test decoding numbers
     */
    public function testDecodeStringWithNumbers() {
        $firstclass = new FirstClass();
        $decoded    = $firstclass->decodeString( '456' );
        $this->assertSame( $decoded, 'vwx' );
    }
}
