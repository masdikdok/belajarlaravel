<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Belajar Laravel</h1>
        <a href="#">www.malasngoding.com</a>
        <br>

        <p>Nama : {{ $nama }} </p>

        <p>Mata Pelajaran</p>
        <ul>
            <?php foreach ($matkul as $key => $item): ?>
                <li><?= $item; ?></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>
