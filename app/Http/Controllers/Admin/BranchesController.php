<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Branches;
use Illuminate\Http\Request;
use App\Http\Requests\BranchFormRequest;
use Illuminate\SUpport\Facades\Response;
class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $branches= Branches::all();
    return view("admin.branches.branches", compact("branches"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.branches.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchFormRequest $request)
    {
       $data = $request-> validated();
     $branch =  Branches::create([
        "title"=>$data["title"],
        "initial"=>$data["initial"],
        "status"=>$data["status"],
       ]);

       if($branch){
        return Response::json([
            "status"=>200,
            "message"=>"Branch saved successfully",
        ]);
       }
       else{
        return Response::json([
            "status"=>400,
            "message"=>"Branch Can't be saved",
        ]);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function show(Branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $branch = Branches::find($id);
        if($branch){
            return view("admin.branches.edit", compact("branch"));
        }
        else{
            return redirect()->back()->with("message","Branch Not Found");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function update(BranchFormRequest $request, int $id)
    {
        $data = $request->validated();
        $branch = Branches::find($id);
        if($branch){
            $branch->update([
        "title"=>$data["title"],
        "initial"=>$data["initial"],
        "status"=>$data["status"],

            ]);
        return Response::json([
                "status" => 200,
                "message" => "Branch Updated Successfully",
                ]);

        }else{
            return Response::json([
                "status" => 404,
                "message" => "Branch Not Found"
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit =Branches::find($id);
        if($unit){
            $unit->delete();
            return Response::json([
                "status"=>200,
                "message"=>"Branch Deleted successfully",
            ]);
        }
        else{
            return Response::json([
                "status"=>404,
                "message"=>"Branch Not Found",
            ]);
        }
    }
}
