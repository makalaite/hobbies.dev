<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.28
 * Time: 11:37
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'count'];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4();
        });
    }
}