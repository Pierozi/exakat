<?php

namespace Test;

include_once(dirname(dirname(dirname(__DIR__))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class Extensions_Extdate extends Analyzer {
    /* 6 methods */

    public function testExtensions_Extdate01()  { $this->generic_test('Extensions_Extdate.01'); }
    public function testExtensions_Extdate02()  { $this->generic_test('Extensions_Extdate.02'); }
    public function testExtensions_Extdate03()  { $this->generic_test('Extensions_Extdate.03'); }
    public function testExtensions_Extdate04()  { $this->generic_test('Extensions_Extdate.04'); }
    public function testExtensions_Extdate05()  { $this->generic_test('Extensions_Extdate.05'); }
    public function testExtensions_Extdate06()  { $this->generic_test('Extensions_Extdate.06'); }
}
?>