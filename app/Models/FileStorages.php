<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileStorages extends Model
{
    use HasFactory;
    protected $table = 'file_storages';
    protected $fillable = [
        'filename',
        'path',
        'date',
        'user_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}