<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "project_leader",
        "starting_date",
        "priority"
    ];

    public function Type() {
        return $this -> belongsTo(Type :: class);
    }
}
