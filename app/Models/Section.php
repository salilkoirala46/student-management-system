<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name','class_id'];

    public function students()
    {
        return $this->hasMany(Student::class); // a section can have many students
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id'); // section will belong to one particular class, class_id is a foreign key
    }
}
