<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConnectionRequest;
use App\Models\Connection;

class ConnectionsController extends Controller
{
    public function connect(ConnectionRequest $request)
    {
        Connection::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);
        return redirect()->route('front.connection.index');
    }

    public function get()
    {
        $models = Connection::all();
        return view('admin.connections.index', compact('models'));
    }

    public function destroy($id)
    {
        Connection::where('id', $id)->delete($id);
        return back();
    }
}
