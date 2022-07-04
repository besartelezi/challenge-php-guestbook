<?php
declare(strict_types=1);

date_default_timezone_set('Europe/Brussels');

//creating the new PostLoader object
$postLoader = new PostLoader();
// if the button has been pressed, then the savePost function will be used
if (isset($_POST['date']))
{
    $postLoader->savePost();
}



?>
<!-- THE FORM -->
<body>
<form action ="index.php" method="post">
    <label>
        Title of your post:
        <input type="text" name="title">
    </label><br>

    <label>
        What would you like to post on this website?:
        <input type="text" name="content">
    </label><br>

    <label>
        Name:
        <input type="text" name="authorName">
    </label><br>
    <!-- When the user clicks on the button, then the current date will be added to the $_POST array -->
    <button type="submit" value="<?php echo (date('d/m/Y H:i:s A')); ?>" name="date">Submit</button>
</form>
</body>

<!-- Form that user can input how many posts they'd like to see -->
<form method="post">
    <label>How many posts would you like to see?
        <input type="number" name="amountPosts">
    </label>
    <button type="submit">Submit</button>
</form>



<?php

$postLoader = new PostLoader();

if($postLoader->getPosts()){
    $postsArray = $postLoader->getPosts();
}else{
    $postsArray = [];
}

//setting the $i variable to 0, need this for the foreach loop I will be using
$i = 0;

//The arrays of emojis and the emojis will be replacing
$textEmojis = [':)', ':-)', ':(', ':-(', ':D', ':-D', 'xD', ':o', ':-o'];
$emojis = ['&#128522', '&#128522', '&#128543', '&#128543', '&#128516', '&#128516', '&#128518', '&#128558', '&#128558'];

//array of 'bad' words and what they will be replaced by
$nonoWords = ['fuck', 'fucking', 'fuckyou', 'shit','hell','damn','asshole','pussy','dipshit','fucker'];
$yesyesWords = ['heck','hecking','i love you','jelly-o','o heavens','darn','good kid','brave soldier','dipper','hero'];

//if the user has chosen how many posts they would like to see, this code will show that amount of posts
//if no user input has been given, then it will be automatically set to 20
$amountPosts = $_POST['amountPosts'] ?? 20;
?>
<?php foreach(array_reverse($postsArray) as $value): $i++;
// used array reverse, so the most recent post is seen first

    //string replace the bad words by the filtered words in each array where the user can give their input
    $filteredContent = str_replace($nonoWords, $yesyesWords, $value['content']);
    $filteredTitle = str_replace($nonoWords, $yesyesWords, $value['title']);
    $filteredAuthorName = str_replace($nonoWords, $yesyesWords, $value['authorName']);
    str_replace($textEmojis, $emojis ,$filteredContent);
    ?>

<!-- This part is what gets looped, it will keep adding this HTMl code where the user input has also been filtered and added in -->
    <div class="card" style="background-color: lightblue; margin: 15px; padding 30px;">
        <div class="image"><img src="https://picsum.photos/70" alt="random image">
            <div class="Title"><?= str_replace($textEmojis, $emojis , $filteredTitle); ?></div>
            <div> <?= str_replace($textEmojis, $emojis ,$filteredContent); ?></div>
            <div class="authorName" style="font-weight: bold"><?= $filteredAuthorName ?></div>
            <h6> <?= $value['date'] ?></h6>
        </div>
    </div>

<!-- $i keeps increasing, since we let it increment after every loop
 if the $i gets equal to or bigger than the amount of posts the user has chosen, the loop stops -->
    <?php if ($i >= $amountPosts) break;
endforeach; ?>
