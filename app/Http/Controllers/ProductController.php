<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm edit-product">Edit</a>';
                    $btn .= ' <a href="javascript:void(0);" id="delete-product" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm delete-product">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('kontenRooms');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $requestData['image'] = $filename;
        }

        $product = Product::updateOrCreate(['id' => $request->product_id], $requestData);

        return response()->json(['success' => 'Product saved successfully.']);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return response()->json(['success' => 'Product deleted successfully.']);
    }
}
