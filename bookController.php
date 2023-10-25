<?php

session_start();
require_once 'bookRepository.php';
require_once 'sessionsController.php';

class BookController
{
    public $bookOption;

    public function __construct()
    {
        if (isset($_POST['bookOption'])) {
            $this->bookOption = $_POST['bookOption'];
            $this->rentBook();
        }

        if (isset($_POST['return'])) {
            $this->returnBook();
        }
        
    }

    public function getDisplayableBooks(){
        $displayableBooks = new BookRepository;
        return $displayableBooks->getAvailableOptions(); 
    }
    
    public function totalAvaliableBooks(){
        $totalAvaliableBooks = new BookRepository;
        return $totalAvaliableBooks->getCountBooks(); 
    }

    public function rentedBooks(){
        $rentedBooks = new BookRepository;
        return $rentedBooks->getRentedBooks();
    }

    public function bookOption(){
        return $bookOption;      
    }

    public function rentBook(){
        $rentBook = new BookRepository;
        $rentBook->getRentBooks();
    }

    public function returnBook(){
        $returnBook = new BookRepository;
        $returnBook->getReturnBooks();
    }

    public function redirect(){
        return header("Location: /TP_Final_Prog1_nuevo/home.php");
    }
    
    
    
}
