<?php

namespace App\Services\Comments\Core;

interface CommentsUpdate
{
    public function updateItem($connect, $id, $action): int;
}
