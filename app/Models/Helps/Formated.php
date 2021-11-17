<?php

namespace App\Models\Helps;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Formated extends Model
{
    public function dateFormated($date)
    {
        // formatar date 
        $myDateTime = DateTime::createFromFormat('Y-m-d', $date);
        $formattedweddingdate = $myDateTime->format('Y/m/d');
        $dateFormated = str_replace('/', '-', $formattedweddingdate);
        return $dateFormated;
    }

    public function moneyFormated($value)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $data = str_replace($source, $replace, $value);
        return $data;
    }

    public function limpar_texto($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }
}
