<?php

namespace App\Services\Comments\Core;

interface CommentsWriter
{
    public function writeComment($connect, $commentData): int;
}
