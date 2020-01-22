<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    protected $guarded = ['id'];

    /**
     * Get call of employee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function call(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Call::class, 'call_id');
    }
}
