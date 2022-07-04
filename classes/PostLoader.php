<?php
declare(strict_types=1);

class PostLoader
{
    public  function savePost () {
        $userInput = new Post($_POST['title'], $_POST['content'], $_POST['authorName'], $_POST['date']);
        $guestbook = 'guestbook.txt';
        $userInputArray = array("title" => $userInput->getTitle(),
            "content" => $userInput->getContent(),
            "authorName" => $userInput->getAuthorName(),
            "date" => $userInput->getDate());
        $currentPost = file_get_contents($guestbook);
        $decodeGuestbook = json_decode($currentPost);
        $decodeGuestbook[] = $userInputArray;
        $encodeGuestbook = json_encode($decodeGuestbook);
        file_put_contents($guestbook, $encodeGuestbook);
    }

    public function  getPosts () {
        $guestbook = 'guestbook.txt';
        file_get_contents($guestbook, true);
        $guestbookPosts = file_get_contents($guestbook, true);
        return json_decode($guestbookPosts, true);
    }
}