<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Image;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $entry=$request->all();

        if($request->file('image_id')) {

            $doc=$request->file('image_id');

            $name=$doc->getClientOriginalName();

            $doc->move('images', $name);

            $image=Image::create(['image_route'=>$name]);

            $entry['image_id']=$image->id;

        }

        $entry['password']=bcrypt($request->password);

        User::create($entry);

        return redirect('/admin/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user=User::findOrFail($id);

        return view('admin.users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user=User::findOrFail($id);

        $entry=$request->all();

        if($request->file('image_id')) {

            $doc=$request->file('image_id');

            $name=$doc->getClientOriginalName();

            $doc->move('images', $name);

            $image=Image::create(['image_route'=>$name]);

            $entry['image_id']=$image->id;

        }

        $user->update($entry);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user=User::findOrFail($id);

        $user->delete();

        return redirect('/admin/users');

    }
}
