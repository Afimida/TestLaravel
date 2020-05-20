<?php

namespace App\Services\Comments;

use App\Services\Comments\Core\CommentsWriter;
use Carbon\Carbon;

class CommentsWriterToDB implements CommentsWriter
{
    public function writeComment($connect, $commentData): int
    {
        // TODO: Implement writeCommentsList() method.
        $email = $commentData['email'];
        $name = $commentData['name'];
        $message = $commentData['message'];
        $file = $commentData['file'];
        $isActive = $commentData['is_active'];
        $createdAt = Carbon::now()->toDateTimeString();
        $db = $connect->getPdo();
        $sql = "INSERT INTO comments (created_at, email, name, message, file, is_active)
                              SELECT '$createdAt', '$email', '$name', '$message', '$file', '$isActive'
                              FROM dual
                              WHERE NOT EXISTS
                                    ( SELECT *
                                      FROM comments
                                      WHERE email='$email'
                                        AND is_active=0
                                    );";
        $query = $db->prepare($sql);
        $query->execute();
        return $db->lastInsertId();
    }
}
