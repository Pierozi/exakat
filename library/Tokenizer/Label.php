<?php

namespace Tokenizer;

class Label extends TokenAuto {
    static public $operators = array('T_COLON');
    
    public function _check() {
        $this->conditions = array(-2 => array('filterOut' => array_merge(array('T_QUESTION','T_CASE', 'T_DOT', 'T_NS_SEPARATOR',
                                                                               'T_OBJECT_OPERATOR', 'T_DOUBLE_COLON', 'T_NEW', 'T_COLON'),
                                                                         Assignation::$operators, Addition::$operators, 
                                                                         Multiplication::$operators, Comparison::$operators,
                                                                         Logical::$operators)), 
                                  -1 => array('atom'      => 'Identifier'),
                                   0 => array('token'     => Label::$operators));
        
        $this->actions = array('transform'    => array(-1 => 'LABEL'),
                               'atom'         => 'Label',
                               'cleanIndex'   => true,
                               'makeSequence' => 'it');
        $this->checkAuto();

        return $this->checkRemaining();
    }
}

?>