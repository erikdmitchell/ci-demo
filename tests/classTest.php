<?php
    
namespace erikdmitchell\ci_demo;

class CI_Demo_Test extends \PHPUnit\Framework\TestCase {

    public function test_make_awesome() {
        $ci_demo=new CI_Demo();
        
        $awesome=$ci_demo->make_awesome("string");
        
        $this->assertSame($awesome, "string AWESOME");
    }
    
}