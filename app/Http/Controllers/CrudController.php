<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Index page showing all user data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $allUser = Crud::all();
        return view('index', compact('allUser'));
    }

    /**
     * Creating an new user page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store user data to database
     *
     * @param Request $request
     * @param Crud $crud
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Crud $crud)
    {
        //return $request->all();

        //$crud = new Crud;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:cruds'
        ]);

        $crud->create($request->all());

        \Session::flash('Success_message', 'User Added Successfully!');

        return back();
    }

    /**
     * Showing single user data page
     *
     * @param Crud $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Crud $user)
    {
        return view('show', compact('user'));
    }

    /**
     * Edit page for user data.
     *
     * @param Crud $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Crud $user)
    {
        return view('edit', compact('user'));
    }

    /**
     * Updating the user data.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $update = Crud::findOrFail($id);

        $input = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $update->update($input);

        \Session::flash('update_message', 'Updated Successfully!');

        return back();
    }

    public function delete($id)
    {
        //return $id;

        $delete = Crud::findOrFail($id);

        $delete->delete();

        \Session::flash('delete_message','User successfully deleted.');

        return back();
    }
}
