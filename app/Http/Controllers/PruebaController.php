<?php
// El espacio de trabajo se restringe a la zona de Controladores
namespace App\Http\Controllers;
// Se usa el archivo de Controller ya existente en la misma carpeta
use App\Http\Controllers\Controller;

class PruebaController extends Controller{
    public function prueba($variable){
        return 'Estoy en PruebaController y recibí a ' . $variable;
    }
}