<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Arrays_ArrayBracketConsistence extends Analyzer {
    /* 2 methods */

    public function testArrays_ArrayBracketConsistence01()  { $this->generic_test('Arrays/ArrayBracketConsistence.01'); }
    public function testArrays_ArrayBracketConsistence02()  { $this->generic_test('Arrays/ArrayBracketConsistence.02'); }
}
?>