<?php
namespace erikdmitchell\ci_demo;

class FirstClassTest extends \PHPUnit\Framework\TestCase {

    /**
     * test encoding string: string
     */
    public function testEncodeStringString() {
        $firstclass = new FirstClass();
        $encoded    = $firstclass->encodeString( 'string' );
        $this->assertSame( $encoded, '120rwp' );
    }

    /**
     * test encoding empty string
     */
    public function testEncodeStringWithEmptyString() {
        $firstclass = new FirstClass();
        $encoded    = $firstclass->encodeString( '' );
        $this->assertSame( $encoded, '' );
    }

    /**
     * test decoding empty string
     */
    public function testDecodeStringWithEmptyString() {
        $firstclass = new FirstClass();
        $decoded    = $firstclass->decodeString( '' );
        $this->assertSame( $decoded, '' );
    }

    /**
     * test encoding upper case strings
     */
    public function testEncodeStringWithUppercaseString() {
        $firsclass = new FirstClass();
        $encoded   = $firsclass->encodeString( 'STRING' );
        $this->assertSame( $encoded, '120rwp' );
    }

    /**
     * test decoding upper case strings
     */
    public function testDecodeStringWithUppercaseString() {
        $firsclass = new FirstClass();
        $decoded   = $firsclass->decodeString( '120RWP' );
        $this->assertSame( $decoded, 'string' );
    }

    /**
     * test encoding with non existent characters
     */
    public function testEncodeStringWithNonExistentCharacter() {
        $firsclass = new FirstClass();
        $this->expectException( \Exception::class );
        $this->expectExceptionMessage( 'Please provide only numbers and alphanumerical characters' );
        $encoded = $firsclass->encodeString( '@#!' );
    }

    /**
     * test decoding with non existent characters
     */
    public function testDecodeStringWithNonExistentCharacter() {
        $firsclass = new FirstClass();
        $this->expectException( \Exception::class );
        $this->expectExceptionMessage( 'Please provide only numbers and alphanumerical characters' );
        $decoded = $firsclass->decodeString( '@#!' );
    }

    /**
     * test encoding numbers
     */
    public function testEncodeStringWithNumbers() {
        $firstclass = new FirstClass();
        $encoded    = $firstclass->encodeString( '456' );
        $this->assertSame( $encoded, 'def' );
    }

    /**
     * test decoding numbers
     */
    public function testDecodeStringWithNumbers() {
        $firstclass = new FirstClass();
        $decoded    = $firstclass->decodeString( '456' );
        $this->assertSame( $decoded, 'vwx' );
    }
}
