<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        .file-list {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .file-item {
            margin: 10px 0;
            padding: 10px;
            border-bottom: 1px solid #eee;
            transition: background-color 0.2s;
        }

        .file-item:hover {
            background-color: #f0f7ff;
        }

        .file-item a {
            text-decoration: none;
            color: #0066cc;
            font-size: 16px;
            display: block;
        }

        .file-item a:hover {
            text-decoration: underline;
        }

        .info-box {
            background-color: #e8f4f8;
            border-left: 4px solid #4a90e2;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Project Index</h1>

    <div class="info-box">
        Nothin' to see here. Here's a list of available URLs:
    </div>

    <div class="file-list">
        <?php
        $files = scandir(__DIR__);
        $exclude = array('.', '..', 'index.php', 'functions.php');
        $displayRoutes = array_filter($files, function ($file) use($exclude) {
            return !in_array($file, $exclude);
        });

        if (count($displayRoutes) > 0) {
            foreach ($displayRoutes as $route) {
                echo "<div class='file-item'>";
                echo "<a href='{$route}'>{$route}</a>";
                echo "</div>";
            }
        } else {
            echo "<p>Nothin' to see here.</p>";
        }
        ?>
    </div>
</body>

</html>