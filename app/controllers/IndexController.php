<?php

class IndexController extends Phalcon\Mvc\Controller
{
    public function indexAction()
    {
    	$tags = array();

    	$tag1 = new Tags();
    	$tag1->tag = "test";
    	$tags[] = $tag1;

    	$tag2 = new Tags();
    	$tag2->tag = "hello";
    	$tags[] = $tag2;

    	$post = new Posts();
    	$post->title = "Hello, world!";
    	$post->content = "Hello!";
    	$post->tags = array($tag1, $tag2);

    	if (!$post->save()) {
    		echo current($post->getMessages())->getMessage();
    		return;
    	}

        echo "OK";
    }

}