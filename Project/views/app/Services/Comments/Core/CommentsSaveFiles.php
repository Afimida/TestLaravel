<?php


namespace App\Services\Comments\Core;


interface CommentsSaveFiles
{
    public function saveFile($file): string;
}
