<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
class GroupsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //return group::where('title','DarVienas')->get();
        //$groups = Group::all(); // gets database table from Post.php SELECT * FROM POSTS
        $groups = Group::orderby('title','desc')->paginate(5);
        return view('group/index')->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        
        // Create Group
        
        $group = new Group;
        $group->title = $request->input('title');
        //$post->user_id = auth()->user()->id;
        //$post->cover_image = $fileNameToStore;
        $group->save();
        return redirect('/group')->with('success', 'Group Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group= Group::find($id);
        $mas2=Group::find($id)->posts;
        return view('group/show')->with('group', $group)->with('mas2', $mas2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group= Group::find($id);
        return view('group/edit')->with('group', $group);
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
        $this->validate($request, [
            'title' => 'required',
        ]);
        
        // Create group
        
        $group = Group::find($id);
        $group->title = $request->input('title');
        $group->save();
        return redirect('/group')->with('success', 'Group Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group= Group::find($id);
        $group->delete();
        return redirect('/group')->with('success', 'Group Deleted');
    }
}





