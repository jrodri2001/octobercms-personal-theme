<?php 
class Cms59288ff40180d930873566_749e06ffb893c696fe6b740c63132705Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
    $this->page->title = $this->post->title;
    $this->page->description = str_limit($this->post->summary, 60, "...");
}
}
