<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Arrays_NonConstantArray extends Analyzer {
    /* 4 methods */

    public function testArrays_NonConstantArray01()  { $this->generic_test('Arrays_NonConstantArray.01'); }
    public function testArrays_NonConstantArray02()  { $this->generic_test('Arrays_NonConstantArray.02'); }
    public function testArrays_NonConstantArray03()  { $this->generic_test('Arrays/NonConstantArray.03'); }
    public function testArrays_NonConstantArray04()  { $this->generic_test('Arrays/NonConstantArray.04'); }
}
?>