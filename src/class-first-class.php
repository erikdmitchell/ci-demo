<?php

namespace erikdmitchell\ci_demo;

/**
 * First Class.
 *
 * @class    First_Class
 * @package
 * @category Class
 * @author
 */
class First_Class {

    /**
     * Encode a string
     *
     * @access public
     * @param string $string the string to encode.
     * @return string
     */
    public function encode_string( $string = '' ) {
        $string = strtolower( $string );
        $src    = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $dst    = 'jklmnopqrstuvwxyz0123456789abcdefghi';
        $length = strlen( $string );

        for ( $i = 0; $i < $legnth; $i++ ) {
            $pos = strpos( $src, $string[ $i ] );
            if ( false === $pos ) {
                return 'Please provide only numbers and alphanumerical characters';
            }
            $string[ $i ] = $dst[ $pos ];
        }

        return $string;
    }

    /**
     * Decode a string
     *
     * @access public
     * @param mixed $string the string to decode.
     * @return string
     */
    public function decode_string( $string = '' ) {
        $string = strtolower( $string );
        $src    = 'jklmnopqrstuvwxyz0123456789abcdefghi ';
        $dst    = 'abcdefghijklmnopqrstuvwxyz0123456789 ';
        $length = strlen( $string );

        for ( $i = 0; $i < $length; $i++ ) {
            $pos = strpos( $src, $string[ $i ] );
            if ( false === $pos ) {
                return 'Please provide only numbers and alphanumerical characters';
            }
            $string[ $i ] = $dst[ $pos ];
        }

        return $string;
    }
}
