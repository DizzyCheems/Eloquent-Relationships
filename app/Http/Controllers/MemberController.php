<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('member.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('member.create');
    }

    public function member_show()
    {
   $members = Member::with(['item'])->get();
     foreach($members as $member){
     echo 'Person name :'. $member->name . '<br />';
     echo 'Item Assigned :'. $member->item->name.'<br />';
     echo '---------------------------------------------'.'<br />';
     }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message=[
            'required' => 'This field is required!'
             ];
                          
            $request->validate([      
            'item_id'=>'required',
            'name'=>'required',
            'shirt_name'=>'required',
            'shirt_number'=> 'required',
            ],$message);
                          
            Member::create([
            'item_id' => $request->item_id,
            'name' => $request->name, 
            'shirt_name' => $request->shirt_name,
            'shirt_number' => $request->shirt_number,
            ]);
            return redirect()->route('member.show')->with('success', 'Member Registered Successfully');    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    $members= Item::all();
    return view ('member.create', ['members'=>$members]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
