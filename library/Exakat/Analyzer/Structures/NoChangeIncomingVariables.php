<?php
/*
 * Copyright 2012-2017 Damien Seguy – Exakat Ltd <contact(at)exakat.io>
 * This file is part of Exakat.
 *
 * Exakat is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Exakat is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Exakat.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://exakat.io/>.
 *
*/


namespace Exakat\Analyzer\Structures;

use Exakat\Analyzer\Analyzer;

class NoChangeIncomingVariables extends Analyzer {
    public function dependsOn() {
        return array('Variables/IsModified',
                     'Arrays/IsModified');
    }
    
    public function analyze() {
        $incomingVariables = array('$_GET','$_POST','$_REQUEST','$_FILES',
                                   '$_ENV', '$_SERVER',
                                   '$PHP_SELF','$HTTP_RAW_POST_DATA');
        //'$_COOKIE', '$_SESSION' : those are OK

        $this->atomIs('Variable')
             ->hasNoIn('VARIABLE') // avoid double counting Arrays
             ->codeIs($incomingVariables)
             ->analyzerIs('Variables/IsModified');
        $this->prepareQuery();

        $this->atomIs('Array')
             ->analyzerIs('Arrays/IsModified')
             ->outIsIE('VARIABLE')
             ->codeIs($incomingVariables)
             ->back('first');
        $this->prepareQuery();
    }
}

?>