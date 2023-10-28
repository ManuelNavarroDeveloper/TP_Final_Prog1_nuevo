<?php

require_once 'user.php';
require_once '.env.php';
require_once 'sessionsController.php';

class BookRepository{
    
    private static $connection = null;
    public $isbnBookOption = null;

    public function __construct()
    {
        $credentials = credentials();
        if (is_null(self::$connection)) {
            self::$connection = new mysqli(
                $credentials['server'],
                $credentials['username'],
                $credentials['password'],
                $credentials['database'],
            );
        }
        if (self::$connection->connect_error) {
            $fail = 'Error de conexión: ' . self::$connection->connect_error;
            self::$connection = null;
            die($fail);
        }
        self::$connection->set_charset('utf8mb4');


    }

    public function getAvailableOptions()
    {
        $books = "SELECT * FROM books";
        $getBooks = mysqli_query(self::$connection, $books);
        $avaliableBooks = mysqli_num_rows($getBooks);


        for ($i = 1; $i < $avaliableBooks + 1; $i++) {
            $booksISBN = "SELECT * FROM books WHERE isbn = " . $i;
            $getBooksISBN = mysqli_query(self::$connection, $booksISBN);
            $book = $getBooksISBN->fetch_array();
            if ($book[1] == NULL) {
                echo "<option value=\"" . $book[0] . "\" >" . $book[2] . "</option>";
            }
        }
        return;
    }

    public function getCountBooks()
    {
        $queryCountBooks = "SELECT COUNT(*) FROM books WHERE user_id IS NULL";
        $getCount = mysqli_query(self::$connection, $queryCountBooks);
        $count = mysqli_fetch_assoc($getCount);
        return $count['COUNT(*)'];
    }

    public function getRentedBooks(){
        $queryRentedBooks = "SELECT DISTINCT `title` FROM `books` WHERE `user_id` IS NOT NULL";
        $getRentedBooks = mysqli_query(self::$connection, $queryRentedBooks);
        $rentedBooks = mysqli_fetch_all($getRentedBooks, MYSQLI_ASSOC);
        $titles = array_column($rentedBooks, 'title');
        return implode(", ", $titles);
        
    }

    public function getRentBooks($isbnBookOption){
        $id = new SessionController;
        $id = strval($id->userID());
        $bookOption = new BookController;
        $bookOption = $bookOption->bookOption($isbnBookOption);
        $queryRent = "UPDATE `books` SET `user_id` = " . $id . " WHERE `books`.`isbn` =" . $bookOption;
        $rentedBook = mysqli_query(self::$connection, $queryRent);
        return header("Location: /TP_Final_Prog1_nuevo/home.php");
    }

    public function getReturnBooks(){
        $id = new SessionController;
        $id->userID();
        $id = strval($id->userID());
        $queryReturn = "UPDATE `books` SET `user_id` = NULL WHERE `books`.`user_id` = " . $id ;
        $returnedBook = mysqli_query(self::$connection, $queryReturn);
        return header("Location: /TP_Final_Prog1_nuevo/home.php");
    }
    
}