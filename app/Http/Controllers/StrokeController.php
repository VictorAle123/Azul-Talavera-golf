<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\StrokeModel;
 use App\Models\partida;


class StrokeController extends Controller
{
      /** Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ("interfaz.createuser.stroke");
        

    }

    public function partidasJugadas()
    {
        //

        return view ("home.stroke");
        

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
    public function store(Request $request, partida $Partida)
    {
        //

        // $partidaa = partida::get()->where('partidas.id', $Partida->id)->first();

        $partidaa = partida::get()->where('partidas.id', $Partida->id)->first();


        // dd($partidas);

        $request->validate([
            // 'file' => 'required|image|max:2048',
            // 'name' => 'min:3',
            // 'description' => 'min:10',
            // 'price' => 'min:2'
        ]);
        // $photo = $request->file('file')->store('/images');

        for ($i = 0; $i < 9; $i++){ 

            // dd("tentacles$i");
            $j = $i + 1;

            $v = 10 + $j;


            StrokeModel::create([
            
                
                'golpe' => $request->input("tentacles$j")
                ,
                'id_hoyo' => 1, 'id_partida'=>$partidaa->id,
    
                  ]) ;

            
            }

            for ($i = 0; $i < 9; $i++){ 


                // dd("tentacles$i");
                $j = $i + 1;
    
                $v = 10 + $j;
    
                    StrokeModel::create([
                                                                  
                        'golpe' => $request->input("v2uno$v")

                                ,
                        
                        'id_hoyo' => 1, 'id_partida'=>$partidaa->id,
                    
                                  ])    ;
                
                }
        
            // ->where('id_hoyo',1, 'id_partida',1)



             return redirect()->route('stroke.index');
    
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
