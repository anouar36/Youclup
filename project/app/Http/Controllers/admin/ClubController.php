<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index(){
        $Clubs = Club::all(); 
        return view('admin/Clubs',compact('Clubs')); 

    }

    public function edit($id){
        $club = Club::find($id);
        

         return view('admin/UpdateClub',compact('club'));



    }

    public function updat($id , Request $request){
        
        $club = Club::find($id);

        $request->merge(['admin_id' => 20]);

        $request->validate([
            'tilte' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'date_creation' => 'required|date',
            'admin_id' => 'required|in:20',
        ]);

        $club = Club::findOrFail($id);

        $club->update($request->all());

        return redirect()->route('Clubs.index')->with('success', 'Club created successfully.');

    }
       



   

    public function destroy($id){
        $club = Club::find($id);
        $club->delete();
        return redirect()->route('Clubs.index');
    }
    

    public function store(Request $request){
        $request->merge(['admin_id' => 20]);

        

        $request->validate([
            'tilte' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'date_creation' => 'required|date',
            'admin_id' => 'required|in:20',
        ]);

        Club::create($request->all());

        return redirect()->route('Clubs.index')->with('success', 'Club created successfully.');

    }
    public function create(){
        return view('admin/AddClubs');
    }
}
