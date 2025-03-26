<?php
trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Post {
    use Timestampable;

    public function createPost($title) {
        $this->setCreatedAt(date("Y-m-d H:i:s"));
        $this->setUpdatedAt(date("Y-m-d H:i:s"));
        echo "Post '{$title}' created at " . $this->getCreatedAt() . "<br>";
    }
}

class Comment {
    use Timestampable;

    public function createComment($content) {
        $this->setCreatedAt(date("Y-m-d H:i:s"));
        $this->setUpdatedAt(date("Y-m-d H:i:s"));
        echo "Comment '{$content}' created at " . $this->getCreatedAt() . "<br>";
    }
}

$post = new Post();
$post->createPost("PHP Traits");

$comment = new Comment();
$comment->createComment("Great post!");