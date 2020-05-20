<?php

namespace App\Http\Controllers;

use App\Services\Comments\CommentsCollectorFromDBForAdmin;
use App\Services\Comments\CommentsWriterToDB;
use Illuminate\Database\DatabaseManager;

class CommentsController extends Controller
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

    public function update($action)
    {
        $commentsList = $this->commentsCollector->collectCommentsList($this->db);
        return view('backend.dashboard', ['commentsList' => $commentsList]);
    }

    public function delete($id)
    {
        $commentsList = $this->commentsCollector->collectCommentsList($this->db);
        return view('backend.dashboard', ['commentsList' => $commentsList]);
    }
}
