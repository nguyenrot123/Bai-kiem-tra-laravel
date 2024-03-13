<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hanghoa1 extends Model
{
    use HasFactory;
    protected $table = 'hanghoa';
    public $timestamps = false;
    protected $fillable = [
        'tenhang','donvitinh','sl_nhap','gianhap','giaban'
    ];
}
