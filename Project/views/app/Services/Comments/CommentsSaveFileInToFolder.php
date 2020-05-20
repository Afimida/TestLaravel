<?php

namespace App\Services\Comments;

use App\Services\Comments\Core\CommentsSaveFiles;

class CommentsSaveFileInToFolder implements CommentsSaveFiles
{
    public function saveFile($file): string
    {
        // TODO: Implement saveFile() method.
        $destinationPath = 'media/';
        $originalFile = $file->getClientOriginalName();
        $date = strtotime(date('Y-m-d-isa'));
        $fileName = $date . "-" . $originalFile;
        $file->move($destinationPath, $fileName);
        return $fileName;
    }
}
