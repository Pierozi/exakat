<?php

namespace Tokenizer;

class _As extends TokenAuto {
    static public $operators = array('T_AS');

    protected $phpversion = "5.4+";

    public function _check() {
        $this->conditions = array( -1 => array('atom'  => 'Staticconstant'), 
                                    0 => array('token' => _As::$operators,
                                               'atom'  => 'none'),
                                    1 => array('token' => 'T_STRING')
        );
        
        $this->actions = array('makeEdge'     => array(  1 => 'RIGHT',
                                                        -1 => 'LEFT'),
                               'atom'         => 'As',
                               'cleanIndex'   => true,
                               'makeSequence' => 'it' );
        $this->checkAuto();
        
        return $this->checkRemaining();
    } 
    
    public function fullcode() {
        return <<<GREMLIN

fullcode.fullcode = fullcode.out("LEFT").next().code + " as " + fullcode.out("RIGHT").next().code;

GREMLIN;
    }
}
?>