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
        
        <?php if($advertisements) : ?>
            <ul>
                <?php foreach($advertisements as $advertisement) : ?>
                    <li>
                        <?php echo $advertisement->title; ?>
                        <i>by <?php echo $advertisement->user; ?></i>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </main>
</body>
</html>