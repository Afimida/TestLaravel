<?php

namespace App\Services\Comments;

use App\Services\Comments\Core\CommentsUpdate;
use Carbon\Carbon;

class CommentsUpdateInDB implements CommentsUpdate
{
    public function updateItem($dbConnection, $id, $action): int
    {
        // TODO: Implement updateItem() method.
        $db = $dbConnection->getPdo();
        if ($action == 'approve') {
            $date = Carbon::now()->toDateTimeString();
            $sql = "UPDATE comments SET updated_at = '$date', is_active = '1' WHERE comments.id = $id;";
        } elseif ($action == 'delete') {
            $sql = "DELETE FROM comments WHERE comments.id = $id";
        }
        $query = $db->prepare($sql);
        $query->execute();
        return $id;
    }
}
