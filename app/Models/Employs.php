<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['create_by','first_name', 'surname', 'email', 'password', 'position', 'phone', 'salary', 'job_experience', 'education',
        'result', 'jub_summary', 'home_address', 'profile_image', 'nid_birth_certificate'];

}
