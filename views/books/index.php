<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  include '../views/layouts/header.php'; ?>

<a href="<?= Config::BASE_URL ?>book/create" class="btn btn-primary mb-3">Add New Book</a>

<table class="table table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Book Name<th>
            <th>Author</th>
            <th>Date</th>
            <th>Publisher</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book); ?>
        <tr>
            <td><?= $book['id'] ?></td>
            <td><?= htmlspecialchars($book['name']) ?></td>
            <td><?= htmlspecialchars($book['author']) ?></td>
            <td><?= $book['date'] ?></td>
            <td><?= htmlspecialchars($book['publisher']) ?></td>
            <td>
                <a href="<?= Config::BASE_URL ?>book/edit/<?=$book['id']?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= Config::BASE_URL ?>book/delete/<?=$book['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>