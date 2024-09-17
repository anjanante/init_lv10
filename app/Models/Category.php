<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Table associated with the model
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Attributes default values
     *
     * @var array
     */
    protected $attributes = [
        'label' => "",
    ];

    /**
     * mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
    ];
}
