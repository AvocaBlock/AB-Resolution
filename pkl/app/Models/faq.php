<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with =['system'];
    public function System(){
        return $this->belongsTo(System::class,'s_id');
    }
}
