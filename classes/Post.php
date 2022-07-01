<?php
declare(strict_types=1);

class Post
{
    private string $title;
    private string $date;
    private string $content;
    private string $authorName;

    public function __construct(string $title, string $date, string $content, string $authorName)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->authorName = $authorName;
    }
}