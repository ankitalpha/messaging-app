<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortlistedProperty extends Model
{
    use HasFactory;

    protected $table = 'shortlisted_property';

    public function property()
    {
        return $this->belongsTo(UserProperty::class);
    }
}
