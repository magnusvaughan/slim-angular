<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Magnus Vaughan - Software Developer</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 50px 0 0 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #aaa;
            font-size: 18px;
        }

        h1 {
            color:  #7ec0ee;
            letter-spacing: -3px;
            font-family: 'Lato', sans-serif;
            font-size: 40px;
            font-weight: 200;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
<h1>Magnus Vaughan</h1>
<div>Software Developer</div>

<?php if (isset($name)) : ?>
    <h2>Hello <?= htmlspecialchars($name); ?>!</h2>
<?php else: ?>
<p>
    <?php endif; ?>
</body>
</html>
