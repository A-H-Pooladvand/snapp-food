<?php

namespace App\Repositories;

use App\Call;

class CallRepository
{
    /**
     * Employee model instance.
     *
     * @var \App\Employee
     */
    private $model;

    public function __construct(Call $model)
    {
        $this->model = $model;
    }

    /**
     * Creates new call.
     *
     * @param  array  $fields
     * @return \App\Call|\Illuminate\Database\Eloquent\Model
     */
    public function create(array $fields)
    {
        return $this->model::create($fields);
    }

    /**
     * Find a call by given id.
     *
     * @param $id
     * @return \App\Call|\App\Call[]|\App\Employee|\App\Employee[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|mixed|null
     */
    public function findById($id)
    {
        return $this->model::find($id);
    }

    /**
     * Updates the given call by given fields.
     *
     * @param  \App\Call  $call
     * @param  array  $overrides
     * @return \App\Call
     */
    public function update(Call $call, array $overrides): Call
    {
        $call->update($overrides);

        return $call;
    }

    /**
     * Finds the first waiting call.
     *
     * @return \App\Call|\App\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|object|null
     */
    public function getWaitingCall()
    {
        return $this->model::oldest()->whereNull('responded_at')->where('status', 'waiting')->first();
    }

    public function allUnResponds()
    {
        return $this->model::whereNull('responded_at')->get();
    }
}
