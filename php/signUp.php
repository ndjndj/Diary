
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <?php 
        
        require_once('universalFunctions.php');

        $pdo = connectDB("diary", "localhost");
        
        
        if (getPost('user_name') != '' && getPost('password') != '') {
            $user_name = getPost('user_name');
            $password = password_hash(getPost('password'), PASSWORD_DEFAULT);
            echo "<p>ユーザー名チェック完了</p>";
            echo "<p>パスワードチェック完了</p>";
        }
        else {
            echo "<p>ユーザー名もしくはパスワードが不正です。</p>";
            echo "<p>クソコードでごめんね。</p>";
        }
        

        
        try {
            $query = $pdo->prepare("INSERT INTO users SET 
                                                            user_name = ?,
                                                            password  = ?");
            $query->bindparam(1, $user_name, PDO::PARAM_STR);
            $query->bindparam(2, $password, PDO::PARAM_STR);
            $query->execute(array($user_name, $password)); 
        
        } catch (\Exception $e) {

            echo "<p>ご入力いただいたユーザー名はすでに存在しています</p>";
            echo "<p>クソコードでごめんね。</p>";
            return false;
        }

        echo "<p>ユーザー登録が完了しました！</p>"

     
    ?>
</body>
</html>