<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RabIT Test Task - <?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/advertisements">Advertisements</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?php echo $title; ?></h1>
        <div class="buttons">
            <a class="button" href="/users">Users</a>
            <a class="button" href="/advertisements">Advertisements</a>
        </div>
    </main>
</body>
</html>