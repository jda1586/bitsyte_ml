<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Compensation
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserWalletLog[] $log
 * @mixin \Eloquent
 */
class Compensation extends Model
{
    protected $fillable = ['key', 'name', 'inputs', 'params', 'code', 'frequency', 'status'];

    public function log()
    {
        return $this->morphMany(UserWalletLog::class, 'transaction');
    }
}
