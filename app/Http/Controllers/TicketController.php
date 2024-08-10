<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Ticket::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm edit-ticket">Edit</a>';
                    $btn .= ' <a href="javascript:void(0);" id="delete-ticket" data-toggle="tooltip" data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm delete-ticket">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('kontentrans');
    }

    public function store(Request $request)
    {
        Ticket::updateOrCreate(['id' => $request->ticket_id], $request->all());

        return response()->json(['success' => 'Ticket saved successfully.']);
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return response()->json($ticket);
    }

    public function update(Request $request, $id)
    {
        Ticket::find($id)->update($request->all());

        return response()->json(['success' => 'Ticket updated successfully.']);
    }

    public function destroy($id)
    {
        Ticket::find($id)->delete();
        return response()->json(['success' => 'Ticket deleted successfully.']);
    }

    public function userDashboard()
    {
        $tickets = Ticket::all(); // Ambil semua tiket dari database
        return view('transport', compact('tickets'));
    }

    public function transport()
    {
        return $this->userDashboard();
    }

    public function search(Request $request)
    {
    $source = $request->input('source');
    $destination = $request->input('destination');
    $date_of_journey = $request->input('date_of_journey');

    $query = Ticket::query();

    if ($source) {
        $query->where('source', $source);
    }

    if ($destination) {
        $query->where('destination', $destination);
    }

    if ($date_of_journey) {
        $query->where('date_of_journey', $date_of_journey);

        if (!$query->exists()) {
            $query = Ticket::where('source', $source)
                ->where('destination', $destination)
                ->whereDate('date_of_journey', '>=', $date_of_journey)
                ->orderBy('date_of_journey', 'asc')
                ->limit(1);
        }
    }

    $tickets = $query->get();

    return view('transport', compact('tickets'));
}


}
