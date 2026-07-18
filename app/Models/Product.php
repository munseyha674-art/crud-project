<?php // Product model finalized

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Fields that are allowed to be filled from request input
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];
}
