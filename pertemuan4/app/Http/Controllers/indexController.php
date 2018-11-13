<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    public function calculate(Request $request)
    {
      $data["min"] = min($request->angka);
      $data["max"] = max($request->angka);
      $data["sum"] = array_sum($request->angka);
      $data["count"] = $data["max"]-$data["min"];
      $data["prime"]= $this->primeno($data["max"],$data["min"]);
      $data["primecount"]= count($data["prime"]);

      return view('index',$data);
        //
    }

    function primeno($n,$m){
      $prime = array();
      for($i=$m;$i<=$n;$i++){  //numbers to be checked as prime
        $counter = 0;
        for($j=1;$j<=$i;$j++){ //all divisible factors
          if($i % $j==0){
            $counter++;
          }
        }
        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){
           array_push($prime,$i);
        }
      }
      return $prime;
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
        //
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
