<?php

namespace App\Http\Controllers\Call;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Repositories\CallRepository;
use App\Repositories\EmployeeRepository;

class CallController extends Controller
{
    /**
     * Employee repository instance.
     *
     * @var \App\Repositories\EmployeeRepository
     */
    private $employeeRepository;

    /**
     * Call repository instance.
     *
     * @var \App\Repositories\CallRepository
     */
    private $callRepository;

    public function __construct(CallRepository $callRepository, EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
        $this->callRepository = $callRepository;
    }

    /**
     * Register a new call.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $employee = $this->employeeRepository->firstFreeToRespond();

        if (null === $employee) {
            $this->callRepository->create([
                'status' => 'waiting',
                'call_no'    => Str::random(40),
            ]);

            return back();
        }

        $call = $this->callRepository->create([
            'call_no' => Str::random(40),
        ]);

        $this->employeeRepository->assignCall($employee, $call);

        return back();
    }
}
