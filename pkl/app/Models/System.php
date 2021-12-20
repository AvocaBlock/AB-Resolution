<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    // protected $with =['faq'];
    public function faq(){
        return $this->hasMany(faq::class,'id');
    }
}
