<?php

namespace App;

class Prodi extends Model
{
    public function wisudawan()
    {
        return $this->hasMany(Wisudawan::class);
    }
}
