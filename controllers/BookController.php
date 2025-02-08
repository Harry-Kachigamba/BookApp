<?php
class BookController {
    private $model;

    public function __construct() {
        $this->model = new BookModel();
    }

    public function index() {
        $books = $this->model->getAllBooks();
        require '../views/books/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookData = [
                'name' => $_POST['name'],
                'author' => $_POST['author'],
                'date' => $_POST['date'],
                'publisher' => $_POST['publisher'],
            ];
            $this->model->addBook($bookData);
            header('Location:', Config::BASE_URL, 'book');
            exit;
        }
        require '../views/books/create.php';
    }

    public function edit($id) {
        $book = $this->model->getBookById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookData = [
                'name' => $_POST['name'],
                'author' => $_POST['author'],
                'date' => $_POST['date'],
                'publisher' => $_POST['publisher'],
            ];
            $this->model->updateBook($id, $bookData);
            header('Location:', Config::BASE_URL, 'book');
            exit;
        }
        require '../views/books/edit.php';
    }

    public function delete($id) {
        $this->model->deleteBook($id);
        header('Location:', Config::BASE_URL, 'book');
        exit;
    }
}
?>