<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include '../views/layouts/header.php'; ?>

<h4 class="mb-3">Edit Book</h4>
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Book Name</label>
        <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($book['name']) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($book['author']) ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Publication Date</label>
        <input type="date" name="date" class="form-control" value="<?= $book['date'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Publisher</label>
        <input type="text" name="publisher" class="form-control" value="<?= htmlspecialchars($book['publisher']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>