<?php

namespace App\Services\Comments\Core;

interface CommentsCollector
{
    public function collectCommentsList($connect): iterable;
}
