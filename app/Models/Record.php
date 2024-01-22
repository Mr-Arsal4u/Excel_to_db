<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'Email', 'Address', 'file_id'];


    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }

}
