<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = ['job_post_id', 'first_name', 'last_name', 'form_Phone', 'form_Email', 'form_message', 'fileToUpload', 'slug'];

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobPost::class, 'job_post_id', 'id');
    }
}
