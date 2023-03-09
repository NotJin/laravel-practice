<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = [
        "name",
        "delete_at",
    ];


    public function Books() {
        return $this->hasMany(Book::class);
    }
}
