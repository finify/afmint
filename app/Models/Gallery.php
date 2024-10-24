<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Project;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'heading',
        'subheading',
        'image',
        'image_caption',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
