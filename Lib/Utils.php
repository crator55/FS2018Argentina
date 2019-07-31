<?php

namespace FacturaScripts\Plugins\Argentina\Lib;



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

    public static function ChangeIdentifer()
    {

        $identifer = new IdentificadorFiscal();
        foreach ($identifer->all() as $value) {
            $value->delete();
        }
        $identFiscal = new IdentificadorFiscal();
        $identFiscal->tipoidfiscal = 'DNI';
        $identFiscal->save();

        $identFiscal->tipoidfiscal = 'CUIT';
        $identFiscal->save();

        $identFiscal->tipoidfiscal = 'Pasaporte';
        $identFiscal->save();


    }

    public static function ChangeState()
    {


        $state = new Provincia();
        foreach ($state->all() as $value) {
            $value->delete();
        }

        $database = new DataBase();
        $sql = CSVImport::importTableSQL('provincias');
        $database->exec($sql);


    }

}