<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCConfig extends Model
{
    protected $fillable =  ['cpu_id', 'gpu_id', 'mb_id','ram_id'];
    use HasFactory;

    protected $table = 'pc_configs';

    protected $fillable = [
        'cpu_id',
        'gpu_id',
        'mb_id',
        'ram_id',
        'drive_id',
        'psu_id',
        'case_id',
        'cooling_id',
        'desc',
        'benchmark',
        'price',
        'user_id',
        'is_verified',
        'share_url',
    ];
}
