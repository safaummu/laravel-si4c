<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

public function fakultas()
{
    return $this->belongsTo(Fakultas::class);
}