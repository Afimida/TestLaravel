<?php

namespace App\Http\Controllers;

use App\Services\Comments\CommentsUpdateInDB;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $commentsUpdate;
    protected $db;

    public function __construct(CommentsUpdateInDB $commentsUpdate, DatabaseManager $database)
    {
        $this->commentsUpdate = $commentsUpdate;
        $this->db = $database;
    }

    public function ajaxRequest()
    {
        return view('ajax');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        $response = array(
            'status' => 'success',
            'message' => $request->message,
            'action' => $request->action,
        );
        $this->commentsUpdate->updateItem($this->db, $request->message, $request->action);
        return response()->json($response);
    }
}
