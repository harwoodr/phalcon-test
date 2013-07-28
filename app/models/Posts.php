<?php

class Posts extends Phalcon\Mvc\Model {

    protected $id;
    protected $title;
    protected $content;

    public function initialize() {
        $this->hasManyToMany(
            "id",
            "PostsTags",
            "post_id",
            "tag_id",
            "Tags",
            "id"
        );
    }
}