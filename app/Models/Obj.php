<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Traits\RelatesToTeams;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Obj extends Model
{
    use HasFactory, RelatesToTeams, HasRecursiveRelationships;

    public $table = 'objects';

    protected $fillable = [
        'parent_id'
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    public function objectable()
    {
        return $this->morphTo();
    }
}
