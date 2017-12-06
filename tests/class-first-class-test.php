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
class First_Class_Test extends WP_UnitTestCase {
    /**
     * Test encoding string: string
     */
    public function testEncodeStringString() {
        $firstclass = new First_Class();
        $encoded    = $firstclass->encode_string( 'string' );
        $this->assertSame( $encoded, '120rwp' );
    }

    /**
     * Test encoding empty string
     */
    public function testEncodeStringWithEmptyString() {
        $firstclass = new First_Class();
        $encoded    = $firstclass->encode_string( '' );
        $this->assertSame( $encoded, '' );
    }

    /**
     * Test decoding empty string
     */
    public function testDecodeStringWithEmptyString() {
        $firstclass = new First_Class();
        $decoded    = $firstclass->decode_string( '' );
        $this->assertSame( $decoded, '' );
    }

    /**
     * Test encoding upper case strings
     */
    public function testEncodeStringWithUppercaseString() {
        $firsclass = new First_Class();
        $encoded   = $firsclass->encodeString( 'STRING' );
        $this->assertSame( $encoded, '120rwp' );
    }

    /**
     * Test decoding upper case strings
     */
    public function testDecodeStringWithUppercaseString() {
        $firsclass = new First_Class();
        $decoded   = $firsclass->decodeString( '120RWP' );
        $this->assertSame( $decoded, 'string' );
    }

    /**
     * Test encoding with non existent characters
     */
    public function testEncodeStringWithNonExistentCharacter() {
        $firsclass = new First_Class();
        $this->expectException( \Exception::class );
        $this->expectExceptionMessage( 'Please provide only numbers and alphanumerical characters' );
        $encoded = $firsclass->encodeString( '@#!' );
    }

    /**
     * Test decoding with non existent characters
     */
    public function testDecodeStringWithNonExistentCharacter() {
        $firsclass = new First_Class();
        $this->expectException( \Exception::class );
        $this->expectExceptionMessage( 'Please provide only numbers and alphanumerical characters' );
        $decoded = $firsclass->decodeString( '@#!' );
    }

    /**
     * Test encoding numbers
     */
    public function testEncodeStringWithNumbers() {
        $firstclass = new First_Class();
        $encoded    = $firstclass->encode_string( '456' );
        $this->assertSame( $encoded, 'def' );
    }

    /**
     * Test decoding numbers
     */
    public function testDecodeStringWithNumbers() {
        $firstclass = new First_Class();
        $decoded    = $firstclass->decode_string( '456' );
        $this->assertSame( $decoded, 'vwx' );
    }
}
