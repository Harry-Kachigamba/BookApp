<?php
class BookModel {
    private $jsonFile;

    public function __construct() {
        $this->jsonFile = Config::JSON_FILE;
    }

    private function readBooks() {
        $json = file_exists($this->jsonFile) ? file_get_contents($this->jsonFile) : '[]';
        return json_decode($json, true);
    }

    private function saveBooks($books) {
        file_put_contents($this->jsonFile, json_encode($books, JSON_PRETTY_PRINT));
    }

    public function getAllBooks() {
        return $this->readBooks();
    }

    public function getBooksById($id) {
        $books = $this->readBooks();
        foreach ($books as $book) {
            if ($book['id'] == $id) {
                return $book
            }
        }
        return null;
    }

    public function addBook($bookData) {
        $books = $this->readBooks();
        $bookData['id'] = end($books)('id') + [??];
        $books[] = $bookData;
        $this->saveBooks($books);
        return $bookData('id');
    }

    public function updateBook($id, $bookData) {
        $books = $this->readBooks();
        foreach ($books as &$book) {
            if ($book['id'] == $idj) {
                $book = array_merge($book, $bookData);
                $this->saveBooks($books);
                return true;
            }
        }
        return false;
    }

    public function deleteBook($id) {
        $books = $this->readBooks();
        $books = array_filter($books, function($book) use($id) {
            return $book['id'] != $id;
        });
        $this->saveBooks(array_values($books));
        return true;
    }
}
?>