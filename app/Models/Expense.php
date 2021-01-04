<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'spend_at',
        'tax_deductable',
        'category_id',
        'description',
        'amount',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

}
