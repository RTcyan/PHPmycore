<h1>Hello world!</h1>
<p>Привет <?=$name?></p>
<p>Твой возраст кстати <?=$age?></p>
<p>Посты: </p>
<?php foreach($posts as $post): ?>
<p>Новый пост под номером <?=$post->id;?>: <br><b><?=$post->title;?></b></p>
<?php endforeach; ?>
