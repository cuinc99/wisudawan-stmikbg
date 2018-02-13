<?php

namespace App;

class Angkatan extends Model
{
    public function wisudawan()
    {
        return $this->hasMany(Wisudawan::class);
    }
}
