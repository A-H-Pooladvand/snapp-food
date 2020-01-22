<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Call extends Model
{
    protected $guarded = ['id'];

    /**
     * Get employee who is responsible to answer to the call.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Employee::class, 'call_id');
    }
}
