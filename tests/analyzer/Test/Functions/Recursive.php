<?php

namespace Test;

include_once(dirname(dirname(dirname(dirname(__DIR__)))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');
spl_autoload_register('Autoload::autoload_library');

class Functions_Recursive extends Analyzer {
    /* 4 methods */

    public function testFunctions_Recursive01()  { $this->generic_test('Functions_Recursive.01'); }
    public function testFunctions_Recursive02()  { $this->generic_test('Functions_Recursive.02'); }
    public function testFunctions_Recursive03()  { $this->generic_test('Functions_Recursive.03'); }
    public function testFunctions_Recursive04()  { $this->generic_test('Functions/Recursive.04'); }
}
?>