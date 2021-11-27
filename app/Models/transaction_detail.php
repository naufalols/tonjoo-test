<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'transaction_category_id', 'name', 'value_idr'];
    public $timestamps = true;
}
