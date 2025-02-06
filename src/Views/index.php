<h1>Welcome to Simple PHP MVC Starter!</h1>
<ul>
    <?php foreach ($courses as $course) : ?>
        <li><?= $course->name ?> (<?= $course->publishedYear ?>)</li>
    <?php endforeach; ?>
</ul>