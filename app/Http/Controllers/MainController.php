<?php

namespace App\Http\Controllers;

use App\Repositories\CallRepository;

class MainController extends Controller
{
    /**
     * Call repository instance.
     *
     * @var \App\Repositories\CallRepository
     */
    private $callRepository;

    public function __construct(CallRepository $callRepository)
    {
        $this->callRepository = $callRepository;
    }

    public function index()
    {
        $calls = $this->callRepository->allUnResponds();

        return view('welcome', compact('calls'));
    }
}
