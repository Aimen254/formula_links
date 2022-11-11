<?php

namespace App\Http\Controllers;

use App\Models\Userformula;
use App\Models\imageformula;
use App\Models\Image;
use App\Models\Formula;
use Config;
use Illuminate\Http\Request;

class UserformulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        $formulas = Formula::all();
        return view('user.images' , compact('images' , 'formulas'));
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
        
        // $form_id = $request->formid;
        $image_id = $request->id;
        $imget = imageformula :: where('image_id', $image_id)->get();
        
        $image_name = $request->name;
        $width = $request->width;
        $height = $request->height;
        // Config::set('common.form', $width);
        // return(Config::get('common.form'));
        echo $image_name;
         echo "<br>";
        return $imget;
        if($image_name == "Outer frame 80MM 88MM 98MM"){
            foreach( $imget as $img)
            {
                
                if($img->formula_type = "Outer frame 80MM 88MM 98MM"){
                    echo "status one";
                    // try {
                    //     $Formula            = new Userformula();
                    //     $f1Width = $width + 6 ;
                    //     $f1Height = $height +6 ;
                    //     $Formula->outerwidth        = $f1Width;
                    //     $Formula->outerheight        = $f1Height;
                    //     $Formula->formula_type = $img->formula_type;
                    //     $Formula->image_id = $image_id;
                    //     $insert = $Formula->save();
                    //     // if ($insert){
                    //     //     return redirect()->back()->with('success', __('Lead successfully created!'));
                    //     // }
                
                    //     // Test
                    // } catch (\Exception $e) {
                    //     return $e->getMessage();
                    // }
                }
                elseif($img->formula_type = "sliding sash 73"){
                    echo "status two";
                    // try {
                    //     $Formula            = new Userformula();
                    //     $f2Width = $width/2 + 2;
                    //     $f2Height = $height - 78 ;
                    //     $f1Width = $width + 6 ;
                    //     $f1Height = $height +6 ;
                    //     $Formula->innerwidth        = $f2Width;
                    //     $Formula->innerheight        = $f2Height;
                    //     $Formula->outerwidth        = $f1Width;
                    //     $Formula->outerheight        = $f1Height;
                    //     $Formula->formula_type = $img->formula_type;
                    //     $Formula->image_id = $image_id;
                    //     $insert = $Formula->save();
                    //     if ($insert){
                    //         return redirect()->back()->with('success', __('Lead successfully created!'));
                    //     }
                
                    //     // Test
                    // } catch (\Exception $e) {
                    //     return $e->getMessage();
                    // }
                
                }
                else{
                    return "sghdg";
                }
            }
       
           
          
        }
      
        elseif($image_name == "Sliding Sash"){
            foreach( $imget as $img)
            {
              $dataanswer[] = $img->formula_type;
               
            }
           
            foreach($dataanswer as $form){
               
                if($form = "sliding sash 55"){
                    return $form;
                }
                else{
                    return "sghdg";
                }
            }
     
        }
        
     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userformula  $userformula
     * @return \Illuminate\Http\Response
     */
    public function show(Userformula $userformula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userformula  $userformula
     * @return \Illuminate\Http\Response
     */
    public function edit(Userformula $userformula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userformula  $userformula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userformula $userformula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userformula  $userformula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userformula $userformula)
    {
        //
    }
}
