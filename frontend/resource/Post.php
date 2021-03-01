<?php


namespace frontend\resource;


class Post extends \common\models\Post
{
    public function fields()
    {
        return ['id','title','body'];
    }

    public function extraFields()
    {
        return ['comments','createdBy','created_at','updated_at','created_by'];
    }


    /**
     * Gets query for [[Comments]].
     *
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['post_id' => 'id']);
    }

}