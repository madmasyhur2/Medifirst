<?php

namespace App\Http\Controllers\Admin;

use App\Models\Membership;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMembershipRequest;
use App\Http\Requests\UpdateMembershipRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try{
            if ($request->ajax()) {
                $query = Membership::query();

                return DataTables::eloquent($query)
                    ->addIndexColumn()
                    ->editColumn('description', function($item){
                        $description = strlen($item->description) > 50 ? substr($item->description, 0, 50) . '...' : $item->description;
                        return $description;
                    })
                    ->addColumn('action', function($item){
                        return '
                            <div class="d-flex flex-row">
                                <div class="p-1">
                                    <a role="button" class="btn btn-sm btn-icon bg-body" data-bs-toggle="modal" 
                                    data-bs-target="#membership_modal_edit" data-id="'.$item->id.'">
                                        <i class="ki-solid ki-pencil text-dark fs-1"></i>
                                    </a>
                                </div>
                                <div class="p-1">
                                    <form method="POST" action="membership/'.$item->id.'/delete" id="deleteForm">
                                        '.csrf_field().'
                                        <input name="_method" type="hidden" value="DELETE">
                                        <a role="button" data-id="' . $item->id . '" data-membership-name="' . $item->name . '" class="btn btn-sm btn-icon bg-body" id="submitForm">
                                            <i class="ki-solid ki-trash text-danger fs-1"></i>
                                        </a>
                                    </form>                                                
                                </div>
                            </div>
                        ';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            $memberships = Membership::all();
            return view('pages.admin.membership.index', compact([
                'memberships'
            ]));

        } catch (\Throwable $th) {
            alert()->error('Error', $th->getMessage());
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMembershipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership $membership)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMembershipRequest $request, Membership $membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $membership = Membership::findOrFail($id);
            $membership->delete();
            alert()->success('Success', 'Membership berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            alert()->error('Error', $th->getMessage());
            return back();
        }
    }
}
