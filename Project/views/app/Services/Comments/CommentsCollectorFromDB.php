<?php

namespace App\Services\Comments;

use App\Services\Comments\Core\CommentsCollector;

class CommentsCollectorFromDB implements CommentsCollector
{
    public function collectCommentsList($connect): iterable
    {
        // TODO: Implement collectCommentsList() method.
        $db = $connect->getPdo();
        $sth = $db->prepare("SELECT name, message, file FROM comments WHERE is_active=1 ORDER BY created_at DESC");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }
}
