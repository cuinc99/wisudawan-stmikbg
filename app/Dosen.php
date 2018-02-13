<?php

namespace App;

class Dosen extends Model
{
    public function wisudawan()
    {
        return $this->hasMany(Wisudawan::class);
    }
}
