<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        "title",
        "ISBN",
        "pub_year",
        "avaliable",
        "authorid",
        "delete_at",
    ];


    public function Author() {
        return $this->belongsTo(Author::class);
    }

    public function scopeSearch($query, $search)
    {
        if ($search && $search != "") {
            return $query->where("title", "like", "%$search%");
        }
        return $query;
    }
}
