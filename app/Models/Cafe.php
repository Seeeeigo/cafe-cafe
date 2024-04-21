<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    const UPDATED_AT = null;
    
    // テーブル名
    protected $table = 'contacts';

    // 可変項目
    protected $fillable = 
    [
        'name',
        'kana',
        'tel',
        'email',
        'body'
    ];
}
