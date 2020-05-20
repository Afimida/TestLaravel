<?php

namespace App\Http\Controllers;

use App\Services\Comments\CommentsCollectorFromDBForAdmin;
use App\Services\Comments\CommentsWriterToDB;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class MainController extends Controller
{
    protected $commentsWriter;
    protected $commentsCollector;
    protected $db;

    public function __construct(CommentsWriterToDB $commentsWriter, CommentsCollectorFromDBForAdmin $commentsCollector, DatabaseManager $database)
    {
        $this->commentsCollector = $commentsCollector;
        $this->commentsWriter = $commentsWriter;
        $this->db = $database;
    }

    function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $userData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($userData)) {
            return redirect('main/successlogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successlogin()
    {
        $commentsList = $this->commentsCollector->collectCommentsList($this->db);
        return view('backend.dashboard', ['commentsList' => $commentsList]);
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
