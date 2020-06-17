<?php

namespace App\Http\Controllers;

use App\LogEntry;
use Illuminate\Http\Request;

class LogEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = LogEntry::query();
        if($request->device_id) {
            $query->where('device_id', $request->device_id);
        }

        $query->orderBy('created_at', 'desc')->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $log = LogEntry::create([
            'data' => $request->data,
            'device_id' => $request->device_id
        ]);

        return $log;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogEntry  $logEntry
     * @return \Illuminate\Http\Response
     */
    public function show(LogEntry $log_entry)
    {
        return $log_entry;
    }

}
