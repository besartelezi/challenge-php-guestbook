<?php
declare(strict_types=1);

$postLoader = new PostLoader();
if (isset($_POST['date']))
{
    $postLoader->savePost();
}

?>

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
    <button type="submit" value="<?php echo (date('d/m/Y')); ?>" name="date">Submit</button>
</form>
</body>

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

$i = 0;

$textEmojis = [':)', ':-)', ':(', ':-(', ':D', ':-D', 'xD', ':o', ':-o'];
$emojis = ['&#128522', '&#128522', '&#128543', '&#128543', '&#128516', '&#128516', '&#128518', '&#128558', '&#128558'];

$nonoWords = ['fuck', 'fucking', 'fuckyou', 'shit','hell','damn','asshole','pussy','dipshit','fucker'];
$yesyesWords = ['heck','hecking','i love you','jelly-o','o heavens','darn','good kid','brave soldier','dipper','hero'];

$amountPosts = $_POST['amountPosts'] ?? 20;
?>
<?php foreach(array_reverse($postsArray) as $value): ?>
    <?php $i++;
    $filteredContent = str_replace($nonoWords, $yesyesWords, $value['content']);
    $filteredTitle = str_replace($nonoWords, $yesyesWords, $value['title']);
    $filteredAuthorName = str_replace($nonoWords, $yesyesWords, $value['authorName']);

    str_replace($textEmojis, $emojis ,$filteredContent);
    ?>

    <div class="card" style="background-color: lightblue; margin: 15px; padding 30px;">
        <div class="image"><img src="https://picsum.photos/70" alt="random image">
            <div class="Title"><?= str_replace($textEmojis, $emojis , $filteredTitle); ?></div>
            <div> <?= str_replace($textEmojis, $emojis ,$filteredContent); ?></div>
            <div class="authorName" style="font-weight: bold"><?= $filteredAuthorName ?></div>
            <h6> <?= $value['date'] ?></h6>
        </div>
    </div>

    <?php if ($i >= $amountPosts) break;
endforeach; ?>
