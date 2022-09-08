<?php

$posts_list = [

    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$dates = array_keys($posts_list);

for($i = 0; $i < count($dates); $i++){
    $date = $dates[$i];
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < count($dates); $i++) { 
        $date = $dates[$i];
        $posts = $posts_list[$date];
        ?>
        <section>
            <h3>Post del <?= $date ?></h3>
            <?php for($j = 0; $j < count($posts); $j++) { ?>
                <div>
                    <h4><?= $posts[$j]['title'] ?></h4>
                    <h6><em><?= $posts[$j]['author'] ?></em></h6>
                    <p><?= $posts[$j]['text'] ?></p>
                </div>
            <?php } ?>

        </section>
        <?php } ?>
</body>
</html>