<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory;
    protected $fillable=['students_id', 'activities_id', 'grade' ];

    public function students():BelongsToMany{
        return $this->belongsToMany(Activity::class);
     }
}
