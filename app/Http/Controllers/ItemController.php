<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Member;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('item.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('item.create');
    }


    public function item_show()
    {   
        $items = Item::with(['members'])->get();
        echo '<table>';
           echo '<tr>
             <th>No</th>
             <th>Name</th>
             <th>Tailor Assigned</th>
             <th>Cutter Assigned</th>
             <th>Heatpress Assigned</th>
             <th>Tailor Cost</th>
             <th>Cutter Cost</th>
             <th>Heatpress Cost</th>
             <th>price</th>
             <th>category</th>
             </tr>';
             $no = 1;
             foreach($items as $item){
             echo '<tr>
              <td>'.$no++.'</td>
              <td>'.$item->name.'</td>
              <td>'.$item->labor_tailor.'</td>
              <td>'.$item->labor_cuter.'</td>
              <td>'.$item->labor_heatpress.'</td>
              <td>'.$item->cost_tailor.'</td>
              <td>'.$item->cost_cutter.'</td>
              <td>'.$item->cost_heatpress.'</td>
              <td>'.$item->price.'</td>
              <td>'.$item->category.'</td>
              <td>';
               foreach($item->members as $member){
                   echo $member->name;
              }
             echo '</td>
            <td>'.$item->members->count().'</td>
           </tr>';
     }
          echo '</table>';
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
         //
         $message=[
            'required' => 'This field is required!'
             ];
             
            $request->validate([      
            'name'=>'required',
            'labor_tailor'=>'required',
            'labor_cutter'=>'required',
            'labor_heatpress'=>'required',
            'cost_tailor'=> 'required',
            'cost_cutter'=>'required',
            'cost_heatpress'=>'required',
            'price'=> 'required',
            'category'=> 'required',
            ],$message);
                          
            Item::create([
            'name'=> $request->name,
            'labor_tailor'=> $request->labor_tailor,
            'labor_cutter'=> $request->labor_cutter,
            'labor_heatpress'=> $request->labor_heatpress,
            'cost_tailor'=> $request->cost_tailor,
            'cost_cutter'=> $request->cost_cutter,
            'cost_heatpress'=> $request->cost_heatpress,
            'price'=> $request->price,
            'category'=> $request->category
            ]);
            return redirect()->route('item.show')->with('success', 'Job-Order Registered Successfully');    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    $item= Member::all();
    return view ('item.create', ['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
