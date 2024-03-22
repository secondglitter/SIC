<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Activity;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name_student', 'lastname_student', 'id_student', 'birthday', 'comment'];

    public function activities():BelongsToMany{
       return $this->belongsToMany(Activity::class, 'students_activities', 'students_id', 'units_id');
    }
}
