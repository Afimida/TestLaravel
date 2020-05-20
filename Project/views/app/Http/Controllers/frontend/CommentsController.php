<?php

namespace App\Http\Controllers;

use App\Services\Comments\CommentsCollectorFromDB;
use App\Services\Comments\CommentsSaveFileInToFolder;
use App\Services\Comments\CommentsWriterToDB;
use App\Services\Comments\Core\CommentsSaveFiles;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    protected $commentsWriter;
    protected $commentsCollector;
    protected $commentsSaveFiles;
    protected $db;

    public function __construct(CommentsWriterToDB $commentsWriter, CommentsCollectorFromDB $commentsCollector, DatabaseManager $database, CommentsSaveFileInToFolder $commentsSaveFiles)
    {
        $this->commentsCollector = $commentsCollector;
        $this->commentsWriter = $commentsWriter;
        $this->commentsSaveFiles = $commentsSaveFiles;
        $this->db = $database;
    }

    public function show()
    {
        $commentsList = $this->commentsCollector->collectCommentsList($this->db);
        return view('frontend.comment', ['commentsList' => $commentsList]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $savedFileName = $this->commentsSaveFiles->saveFile($request->file('file'));

        $commentData = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'file' => $savedFileName,
            'is_active' => 0
        );
        $commentsList = $this->commentsCollector->collectCommentsList($this->db);
        $this->commentsWriter->writeComment($this->db, $commentData);
        return view('frontend.comment-add', ['commentsList' => $commentsList, 'approve' => "Your comment awaits the administrator's approval"]);
    }
}
