<?php

namespace App\models;

use PDO;

class Post
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllPosts()
    {
        $stmt = $this->pdo->query("SELECT * FROM posts
        ORDER BY created_at desc");
        return $stmt->fetchAll();
    }

    public function getOnePost($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts where id= :id");
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    }
    public function insertPost($data){
        $stmt = $this->pdo->prepare("INSERT INTO posts(title,text,image,created_at) VALUES (:title,:text,:image,:created_at)");
        $stmt->execute([
            'title'=>$data['title'],
            'text'=>$data['text'],
            'image'=>$data['image'],
            'created_at'=>date('Y-m-d')
        ]);
        return $this->pdo->lastInsertId();
    }
    public function deletePost($id){
        $stmt=$this->pdo->prepare("DELETE FROM posts WHERE id=:id");
        $stmt->execute([
            "id"=>$id
        ]);
    }
    public function updatePost($id)
    {
        $stmt=$this->pdo->prepare("UPDATE posts SET title=:title,text=:text,image=:image WHERE id=:id");
        $stmt->execute([
            "id"=>$data['id'],
            "title"=>$data['title'],
            "text"=>$data['text'],
            "image"=>$data['image'],
        ]);
    }
}