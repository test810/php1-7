<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>

    <h1>Гостевая книга</h1>
    <?php foreach ($this->data['gb']->getAllRecords() as $record) { ?>
        <article>
            <?php echo $record->getmessage(); ?>
        </article>
        <hr>
    <?php } ?>

    <form action="add.php" method="post">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">Добавить</button>
    </form>

</body>
</html>