<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Nadpis</h1>
        <div class="list">
            <?php
                for($i = 0; $i < 30; $i++) {
                    echo "<div class='item'><div>title</div><div class='desc'>desc</div></div>";
                }
            ?>
        </div>
    </div>
</body>
</html
