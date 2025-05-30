<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersOption extends Model
{
    use HasFactory;

    public function option()
    {
        return $this->belongsTo(MenuOption::class, 'option_id');
    }
}
