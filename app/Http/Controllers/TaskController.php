<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function landingpage()
    {
        return view('task.landingpage');
    }

    public function loginpage()
    {
        return view('task.loginpage');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }

    public function signup()
    {
        return view('task.signup');
    }

    public function createuser(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Log in the newly created user
        auth()->login($user);

        return redirect()->route('home')->withSuccess('Account created successfully');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('landing');
    }

    public function homepage()
    {
        return view('task.homepage');
    }

    public function index()
    {
        $user = auth()->user();
        $task = $user->task()->get();
        return view('task.index', ['task' => $task]);
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
    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'task' => 'required',
        ]);

        $task = new Task;
        $task->tasks = $request->task;
        $task->user_id = auth()->user()->id;
        $task->save();

        return back()->withSuccess('Task added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validate data
        $request->validate([
            'task' => 'required'
        ]);

        // Fetch the product from the database
        $task = Task::findOrFail($id);

        $task->tasks = $request->task;
        $task->save();

        return redirect()->route('records', ['task' => $task])->withSuccess('Task updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('records')->withSuccess('Task deleted');
    }
}
