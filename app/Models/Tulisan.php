<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tulisan extends Model
{
    use HasFactory;

    protected $appends = ['old_date'];

    public function getOldDateAttribute(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
