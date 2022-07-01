<?php
declare(strict_types=1);

class PostLoader
{
    private string $userInput;

    public function __construct(string $userInput)
    {
        $this->userInput = $userInput;
    }

    public function arrayToString () {
        $this->userInput = json_encode($_POST);
    }

}