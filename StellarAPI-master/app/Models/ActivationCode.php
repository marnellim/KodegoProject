<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Constants;

class ActivationCode extends Model
{
    use HasFactory;
    protected $table = 'activation_codes';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = [];

    public static function boot(){
        parent::boot();
        $creationCallback = function ($model) {
            if (empty($model->{$model->getKeyName()}))
                $model->{$model->getKeyName()} = Constants::getUniqueId(new self());
        };
        static::creating($creationCallback);
    }
}
