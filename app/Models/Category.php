<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'name'=> 'Hiển thị',
            'class'=> 'btn-warning'
        ],
        0 => [
            'name'=> 'Không hiển thị',
            'class'=> 'btn-primary'
        ]
    ];
    public function getStatus()
    {
        return array_get($this->status,$this->c_active,'[N\A]');
    }
}
