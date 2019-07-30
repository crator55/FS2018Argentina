<?php

namespace FacturaScripts\Plugins\Argentina\Lib;


use FacturaScripts\Dinamic\Model\Provincia;
use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Dinamic\Model\IdentificadorFiscal;
use FacturaScripts\Dinamic\Lib\Import\CSVImport;

class Utils
{


    public static function ChangeDefaultTax()
    {


        $impuesto = new Impuesto();


        foreach ($impuesto->all() as $value) {


            $value->delete();


        }
        $impuesto->codimpuesto = 'AR0';
        $impuesto->descripcion = 'AR 0%';
        $impuesto->iva = '0';
        $impuesto->recargo = '0';
        $impuesto->save();
        $impuesto->codimpuesto = 'AR5';
        $impuesto->descripcion = 'AR 5%';
        $impuesto->iva = '5';
        $impuesto->recargo = '0';
        $impuesto->save();
        $impuesto->codimpuesto = 'AR105';
        $impuesto->descripcion = 'AR 10,5%';
        $impuesto->iva = '10.5';
        $impuesto->recargo = '0';
        $impuesto->save();
        $impuesto->codimpuesto = 'AR27';
        $impuesto->descripcion = 'AR 27%';
        $impuesto->iva = '27';
        $impuesto->recargo = '0';
        $impuesto->save();
        $impuesto->codimpuesto = 'AR21';
        $impuesto->descripcion = 'AR 21%';
        $impuesto->iva = '21';
        $impuesto->recargo = '0';
        $impuesto->save();
    }

    public static function ChangeIdentifer()
    {

        $identifer = new IdentificadorFiscal();
        foreach ($identifer->all() as $value) {
            $value->delete();
        }
        $identifer->tipoidfiscal = 'CUIT';
        $identifer->save();

        $identifer->tipoidfiscal = 'DNI';
        $identifer->save();

        $identifer->tipoidfiscal = 'Pasaporte';
        $identifer->save();


    }

    public static function ChangeState()
    {
        $state = new Provincia();
        foreach ($state->all() as $value) {
            $value->delete();
        }


        $state->idprovincia = 1;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Buenos Aires';
        $state->codisoprov = 'BA';
        $state->save();
        $state->idprovincia = 2;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Catamarca';
        $state->codisoprov = 'CA';
        $state->save();
        $state->idprovincia = 3;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Chaco';
        $state->codisoprov = 'CH';
        $state->save();
        $state->idprovincia = 4;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Chubut';
        $state->codisoprov = 'CT';
        $state->save();
        $state->idprovincia = 5;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Córdoba';
        $state->codisoprov = 'CB';
        $state->save();
        $state->idprovincia = 6;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Corrientes';
        $state->codisoprov = 'CR';
        $state->save();
        $state->idprovincia = 7;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Entre Ríos';
        $state->codisoprov = 'ER';
        $state->save();
        $state->idprovincia = 8;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Formosa';
        $state->codisoprov = 'FO';
        $state->save();
        $state->idprovincia = 9;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Jujuy';
        $state->codisoprov = 'JY';
        $state->save();
        $state->idprovincia = 10;
        $state->codisoprov = 'ARG';
        $state->provincia = 'La Pampa';
        $state->codisoprov = 'LP';
        $state->save();
        $state->idprovincia = 11;
        $state->codisoprov = 'ARG';
        $state->provincia = 'La Rioja';
        $state->codisoprov = 'LR';
        $state->save();
        $state->idprovincia = 12;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Mendoza';
        $state->codisoprov = 'MZ';
        $state->save();
        $state->idprovincia = 13;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Misiones';
        $state->codisoprov = 'MI';
        $state->save();
        $state->idprovincia = 14;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Neuquén';
        $state->codisoprov = 'NQ';
        $state->save();
        $state->idprovincia = 15;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Río Negro';
        $state->codisoprov = 'RN';
        $state->save();
        $state->idprovincia = 16;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Salta';
        $state->codisoprov = 'SA';
        $state->save();
        $state->idprovincia = 17;
        $state->codisoprov = 'ARG';
        $state->provincia = 'San Juan';
        $state->codisoprov = 'SJ';
        $state->save();
        $state->idprovincia = 18;
        $state->codisoprov = 'ARG';
        $state->provincia = 'San Luis';
        $state->codisoprov = 'SL';
        $state->save();
        $state->idprovincia = 19;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Santa Cruz';
        $state->codisoprov = 'SC';
        $state->save();
        $state->idprovincia = 20;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Santa Fe';
        $state->codisoprov = 'SF';
        $state->save();
        $state->idprovincia = 21;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Santiago del Estero';
        $state->codisoprov = 'SE';
        $state->save();
        $state->idprovincia = 22;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Tierra del Fuego,Antártida e Isla del Atlántico Sur';
        $state->codisoprov = 'TF';
        $state->save();
        $state->idprovincia = 23;
        $state->codisoprov = 'ARG';
        $state->provincia = 'Tucumán';
        $state->codisoprov = 'TUC';
        $state->save();

    }
}
