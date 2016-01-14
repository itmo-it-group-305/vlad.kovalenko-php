<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
         $homepage = file_get_contents('https://api.vk.com/method/friends.get?fields=sex,photo_200,city,country&user_id=71991427&v=5.44');
         //echo($homepage);
        $decode = json_decode($homepage, $depth = 2);
         //var_dump($decode['response']['items']);
        ?>

        <?php foreach ($decode['response']['items'] as $post): ?>
            <section>
                <h3><?= $post['first_name'].$post['last_name'] ?></h3>
                <p> id= <?= $post['id'] ?></p>
                <p class='preview'>
                    <img src="<?= $post['photo_200'] ?>">
                </p>
                <p>
                    <?php
                        if($post['sex'] == 2){
                            echo('Муж');
                        } else {
                            echo('Жен');
                        }
                    ?>
                </p>
                <p>
                    <?= $post['city']['title'] ?><br><br>
                    <?= $post['country']['title'] ?><br>
                </p>
            </section>
        <?php endforeach; ?>
    </body>
</html>