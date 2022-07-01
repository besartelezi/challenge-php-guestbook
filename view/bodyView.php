<?php
declare(strict_types=1);
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
    <button type="submit" value="<?php echo (date('m/d/Y')); ?>" name="date">Submit</button>
</form>
</body>
