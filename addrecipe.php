
<!DOCTYPE html>
<html>
<head>
    <title>Add Recipe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'banner.php'; ?>
    <h1>Add Recipe</h1>
    <form method="post" action="db_addrecipe.php" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" pattern='^[A-Za-z0-9 ]+' id="title" maxlength="80" value="<?php echo htmlspecialchars($title) ?>" required>
        <br><br>
        <label for="text">Text:</label>
        <textarea name="text" id="text" maxlength="60000" value="<?php echo htmlspecialchars($text) ?>" required></textarea>
        <br><br>
        <label for="picture">Picture:</label>
        <input type="file" name="picture" id="picture" accept="image/jpeg" required>
        <br><br>
        <button type="submit">Add Recipe</button>
    </form>
</body>
</html>