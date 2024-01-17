<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'price', 'category', 'materi', 'rank'
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'transactions');
    }
}
