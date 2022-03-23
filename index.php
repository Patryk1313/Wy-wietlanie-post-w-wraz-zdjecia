<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Sora:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">
    <title>Posty</title>
</head>
<body>

<?php
    include('connect.php');
?>

<?php
    $showPosts = mysqli_query($conn, "SELECT title, text FROM posts;");
    while($row = mysqli_fetch_array($showPosts)){
        $title = $row['0'];
        $text = $row['text'];
    }
?>

<?php 
    $showImg = mysqli_query($conn, "SELECT img.source FROM img INNER JOIN posts ON posts.ID = img.posts_ID WHERE img.posts_ID = posts.ID");
    while($row = mysqli_fetch_array($showImg)){
        $img = $row[0];
    }
?>

    <section class='post-box'>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $text; ?></p>
        <img <?php echo "src= '$img'" ?> >
    </section>

</body>
</html>