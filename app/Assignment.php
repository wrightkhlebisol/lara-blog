<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    public function complete()
    {
        $this->completed = 1;
        $this->save();
    }

    public function incomplete()
    {
        $this->completed = 0;
        $this->save();
    }
}
