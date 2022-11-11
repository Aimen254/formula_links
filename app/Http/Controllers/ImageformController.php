<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Formula;
use App\Models\imageformula;
use Illuminate\Http\Request;

class ImageformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $images = Image::all();
            $formulas = Formula::all();
    
            return view('images.allimages' ,compact('images','formulas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        try {
        $imageid = $request->id;
        // $formulaid = $request->cat;
        $formula = $request->get('cat');

        $bins = Formula::whereIn('id', $formula)->get();
       
      
        foreach( $bins as $bin)
                {
                    // imageformula::create(
                    //     [
                    //         'image_id' => $imageid,
                    //         'formula_id' => $bin->id,
                    //     ])->save();
                    $dataanswer[] = [                
                        'image_id'   => $imageid,
                        'formula_id'        => $bin->id,
                        'formula_type'       => $bin->type
                    ]; 
                 
                }
                $imageformul = new imageformula(); 
                $insert = $imageformul->insert($dataanswer);
                if ($insert){
                   return redirect()->back()->with('success', __('Lead successfully created!'));
                    
                }
    
                // Test
            } catch (\Exception $e) {
                return $e->getMessage();
            }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::find($id);
        return view('images.viewimage' ,compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
