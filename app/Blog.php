<?php
/**
 * Created by PhpStorm.
 * User: Витя
 * Date: 20.02.2019
 * Time: 21:33
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function scopePutBlog($query)
    {
        $query->insert([
            'text_subject'  => $_POST['title'],
            'text_pv'       => $_POST['textPV'],
            'text_all'      => $_POST['text']//,
        ]);
    }

    public function scopeGetAllTasks($query)
    {
        return $query->select('*')
            ->orderBy('id');
    }

    public function scopeGetOneTask($query, $id)
    {
        return $query->where('id',$id)->get()->ToArray();
    }


}