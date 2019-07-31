<?php

namespace FacturaScripts\Plugins\Argentina;

use FacturaScripts\Core\Base\MiniLog;
use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Core\App\AppSettings;

class Init extends InitClass
{

    public function init()
    {
        /// código a ejecutar cada vez que carga FacturaScripts (si este plugin está activado).
    }

    public function update()
    {
        $codpais = AppSettings::get('default', 'codpais');
        if ($codpais != 'ARG') {
            $newminilog = new MiniLog();
            $newminilog->alert("You must change the country from default settings", $context = []);
        } else {
            Lib\Utils::ChangeDefaultTax();
            Lib\Utils::ChangeIdentifer();
            Lib\Utils::ChangeState();
        }

    }
}
