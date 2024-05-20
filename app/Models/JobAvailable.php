<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAvailable extends Model
{
    protected $table = 'jobs_available';

    protected $fillable = [
        'sendApply_ID',
        'companyName',
        'companyJobPosition',
        'companyJobLocation',
        'sendapply_sendApply_ID',
        'job_salary',
        'description_text',
    ];
}