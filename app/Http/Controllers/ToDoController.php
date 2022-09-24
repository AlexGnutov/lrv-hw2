<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $todos = ToDo::all();
        return view('ToDos.todos-index', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $values = [];
        return view('ToDos.todos-form', ['values' => $values]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $title = $request->title;
        $description = $request->description;

        if ($title && $description) {
            ToDo::create([
                'title' => $title,
                'description' => $description,
            ]);
            return redirect()->route('todo-index');
        }
        return redirect()->route('todo-form');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id): Application|Factory|View
    {
        $todo = ToDo::find($id);
        return view('ToDos.todos-one', ['todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id): Application|Factory|View
    {
        $todo = ToDo::find($id);
        return view('ToDos.todos-edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $todo = ToDo::find($id);
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        return redirect()->route('todo-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        ToDo::where('id', $id)->delete();
        return redirect()->route('todo-index');
    }
}
