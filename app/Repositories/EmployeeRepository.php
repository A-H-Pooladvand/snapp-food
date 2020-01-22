<?php

namespace App\Repositories;

use App\Call;
use App\Employee;

class EmployeeRepository
{
    /**
     * Employee model instance.
     *
     * @var \App\Employee
     */
    private $model;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

    /**
     * Fetches the first employee who is free to respond to call.
     *
     * @return \App\Employee|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|object|null
     */
    public function firstFreeToRespond()
    {
        return $this->model::whereNull('call_id')->orderBy('priority')->first();
    }

    /**
     * Assign call to the given employee.
     *
     * @param  \App\Employee  $employee
     * @param  \App\Call  $call
     * @return \App\Employee
     */
    public function assignCall(Employee $employee, Call $call): Employee
    {
        $employee->update([
            'call_id' => $call->id,
        ]);

        return $employee;
    }

    /**
     * Updates given employee.
     *
     * @param  \App\Employee  $employee
     * @param  array  $overrides
     * @return \App\Employee
     */
    public function update(Employee $employee, array $overrides)
    {
        $employee->update($overrides);

        return $employee;
    }

    /**
     * Free up an employee to respond another call.
     *
     * @param  \App\Employee  $employee
     * @return \App\Employee
     */
    public function freeToRespond(Employee $employee): Employee
    {
        return $this->update($employee, ['call_id' => null]);
    }

    public function assignWaitingCall(Call $call)
    {
        $employee = $this->firstFreeToRespond();

        if (null === $employee) {
            return false;
        }

        $call->update(['status' => 'none']);

        $this->assignCall($employee, $call);

        return $employee;
    }
}
