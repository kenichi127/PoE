<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contribution;
use App\Comment;
use App\Http\Requests\EditContribution;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Hash;

class ContributionController extends Controller
{
    public function index()
    {
            $contribution = Contribution::all();
            return view('contribution', ['contributions' => $contribution]);
    }

    public function add (Request $request)
    {
        $inputs = $request->all();
        
        $rules = [
            'title' => 'required|max:256',
            'content' => 'required|max:256'
        ];
        
        $messages = [
            'title.required' => 'Need title',
            'title.max' => 'Title is max 256 words',
            'content.required' => 'Need content',
            'content.max' => 'Content is max 256 words'
        ];

        $validation = Validator::make($inputs, $rules, $messages);

        if ($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $contribution = new Contribution;
        $contribution->user_id = auth()->user()->id;
        $contribution->title = $request->input('title');
        $contribution->content = $request->input('content');
        $contribution->save();

        return redirect()->to('/contribution');
    }

    public function contribution_edit($id)
    {
        $contribution = Contribution::find($id);
        return view('contributions.edit', compact('contribution'));
    }

    public function contribution_update(EditContribution $request, $id)
    {
        $contribution = Contribution::find($id);
        $contribution->title = $request->input('title');
        $contribution->content = $request->input('content');
        $contribution->save();
        return redirect('/contribution');
    }

    public function delete($id)
    {
        $contribution=Contribution::find($id);
        $contribution->delete();
        return redirect('/contribution');
    }
    
}