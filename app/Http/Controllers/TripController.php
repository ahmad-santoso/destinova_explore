<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Trip::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm edit-trip">Edit</a>';
                    $btn .= ' <a href="javascript:void(0);" id="delete-trip" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm delete-trip">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('managekonten');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $requestData['img'] = $filename;
        }

        $trip = Trip::updateOrCreate(['id' => $request->trip_id], $requestData);

        return response()->json(['success' => 'Trip saved successfully.']);
    }

    public function edit($id)
    {
        $trip = Trip::find($id);
        return response()->json($trip);
    }

    public function destroy($id)
    {
        $trip = Trip::find($id);

        if ($trip->img && file_exists(public_path('images/' . $trip->img))) {
            unlink(public_path('images/' . $trip->img));
        }

        $trip->delete();

        return response()->json(['success' => 'Trip deleted successfully.']);
    }
    public function ketravel()
{
    $trips = Trip::all();
    return view('travel', compact('trips'));
}

}
