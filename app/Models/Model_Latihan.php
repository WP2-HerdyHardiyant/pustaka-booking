
<?php

namespace App\Controllers;

use CodeIgniter\Model;

class Model_Latihan extends Model
{

    public function jumlah($n1, $n2)
    {
        return $n1 + $n2;
    }
}