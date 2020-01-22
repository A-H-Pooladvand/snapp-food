<?php

namespace App\Http\Controllers\Call\Respond;

use App\Http\Controllers\Controller;
use App\Repositories\CallRepository;
use App\Repositories\EmployeeRepository;

class RespondController extends Controller
{
    /**
     * Call repository instance
     *
     * @var \App\Repositories\CallRepository
     */
    private $callRepository;

    /**
     * Employee repository instance.
     *
     * @var \App\Repositories\EmployeeRepository
     */
    private $employeeRepository;

    public function __construct(CallRepository $callRepository, EmployeeRepository $employeeRepository)
    {
        $this->callRepository = $callRepository;
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * Respond to a call.
     *
     * @param  string  $callId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($callId)
    {
        $call = $this->callRepository->findById($callId);

        /** @var \App\Employee $employee */
        $employee = $call->employee()->first();

        $this->callRepository->update($call, [
            'responded_at' => now()->toDateTimeString(),
            'status' => 'done'
        ]);

        //$employee->call_id = null;
        //$employee->save();

        $this->employeeRepository->freeToRespond($employee);

        $call = $this->callRepository->getWaitingCall();

        if ($call) {
            $this->employeeRepository->assignWaitingCall($call);
        }

        return back();
    }
}
