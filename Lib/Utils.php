<?php

namespace FacturaScripts\Plugins\Argentina\Lib;


use FacturaScripts\Core\Base\MiniLog;
use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Dinamic\Model\Provincia;
use FacturaScripts\Dinamic\Lib\Import\CSVImport;
use FacturaScripts\Dinamic\Model\IdentificadorFiscal;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\App\AppSettings;

class Utils
{

    public static function ChangeDefaultTax()
    {
        $codpais = AppSettings::get('default', 'codpais');
        if ($codpais != 'ARG') {
            $newminilog = new MiniLog();
            $newminilog->alert("You must change the country from default settings", $context = []);
        } else {
            $impuesto = new Impuesto();
            $setting_model = new AppSettings();
            $setting_model->set('default', 'codimpuesto', 'NONE');


            foreach ($impuesto->all() as $value) {
                $value->delete();
            }

            $database = new DataBase();
            $sql = CSVImport::importTableSQL('impuestos');
            if ($database->exec($sql)) {
                $setting_model->set('default', 'codimpuesto', 'IVA21');
                $setting_model->save();
            }

        }


    }

    public static function ChangeIdentifer()
    {
        $codpais = AppSettings::get('default', 'codpais');
        if ($codpais != 'ARG') {


        } else {
            $identifer = new IdentificadorFiscal();
            foreach ($identifer->all() as $value) {
                $value->delete();
            }
            $identifer->tipoidfiscal = 'DNI';
            $identifer->save();

            $identifer->tipoidfiscal = 'CUIT';
            $identifer->save();

            $identifer->tipoidfiscal = 'Pasaporte';
            $identifer->save();
        }


    }

    public static function ChangeState()
    {
        $codpais = AppSettings::get('default', 'codpais');
        if ($codpais != 'ARG') {


        } else {
            $state = new Provincia();
            foreach ($state->all() as $value) {
                $value->delete();
            }

            $database = new DataBase();
            $sql = CSVImport::importTableSQL('provincias');
            $database->exec($sql);
        }


    }

}