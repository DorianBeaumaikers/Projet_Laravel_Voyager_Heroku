<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, "works_has_tags");
    }
}
