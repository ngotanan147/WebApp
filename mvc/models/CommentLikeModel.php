<?php
class CommentLikeModel extends BaseModel
{

    const TABLE = 'comment_like';
    public function getCommentLike()
    {
        return $this->all(self::TABLE);
    }

    public function deleteCommentLike($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function deleteAll($user_id)
    {
        $qr = "delete from comment_like where comment_like.user_id = $user_id";
        $this->execute($qr);
    }

    public function createCommentLike($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editCommentLike($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getCommentLikeByCommentId($comment_id)
    {
        $qr = "select * from comment_like where comment_id = '$comment_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function deleteByCommentIdAndUserId($comment_id, $user_id)
    {
        $qr = "delete from comment_like where comment_id = '$comment_id' and user_id = '$user_id'";

        $this->execute($qr);
    }

    public function getTotalLike($comment_id)
    {
        $qr = "select count(*) from comment_like where comment_id = '$comment_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function checkIfUserLiked($comment_id, $user_id)
    {
        $qr = "select * from comment_like where comment_id = '$comment_id' and user_id = '$user_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
