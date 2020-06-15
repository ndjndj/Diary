<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/login.js"></script>
    <title>login</title>
</head>
<body>
    <header>Diary</header>
    <?php require_once('universalFunctions.php'); ?>

    <main>
        <h1>Diary</h1>

        <?php 
        
            echo getPost('user_name');
            echo getPost('password');
        
        
        
        ?>

    </main>

    <script>main();</script>
</body>
</html>