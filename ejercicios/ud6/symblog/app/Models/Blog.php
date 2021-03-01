<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model{
    protected $table = "blog";
}
    /*

    private static $instancia;
    private $id;
    private $title;
    private $author;
    private $blog;
    private $image;
    private $tags;
    private $created;
    private $updated;
    private $aComentarios = [];

    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miClase = __CLASS__;
            self::$instancia = new $miClase;
        }
        return self::$instancia;
    }

    public function __clone()
    {
        trigger_error('La clonación no es permitida.', E_USER_ERROR);
    }

    function __construct()
    {
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function setBlog($blog)
    {
        $this->blog = $blog;
    }
    public function getBlog()
    {
        return $this->blog;
    }
    public function setImage($img)
    {
        $this->image = $img;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
    public function getTags()
    {
        return $this->tags;
    }
    public function setCreated($created)
    {
        $this->created = $created;
    }
    public function getCreated()
    {
        return $this->created;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function getUpdated()
    {
        return $this->updated;
    }

    public function addComment($comment)
    {
        array_push($this->aComentarios, $comment);
    }
    public function numComment()
    {
        return count($this->aComentarios);
    }
    */

