<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{

    public function __construct(){

    $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = $request->user()->tasks;
        // dd($tasks);
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $request->user()->tasks()->save($task);

        return redirect()->back();

    
        // dd($request->user()->tasks());

        // $request->user()->tasks()->create([
         
        //  'name' => $request->name,

        // ]);


        
        // return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // if ($request->user()->can('destroy', $task)) {
        //     $task->delete();
        //     return redirect()->back();
        // }else{
        //     abort(401);
        // }

        // Gate::authorize('delete', $task);
        $task->delete();
        return redirect()->back();
    }
}
