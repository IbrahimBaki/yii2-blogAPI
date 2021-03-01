<?php


namespace frontend\resource;


class Comment extends \common\models\Comment
{
    public function fields()
    {
        return ['id','title','body','post_id'];
    }
    public function extraFields()
    {
        return ['post','created_at','updated_at','created_by'];
    }
    /**
     * Gets query for [[Post]].
     *
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }

}