<?php

session_start();
require_once 'bookRepository.php';
require_once 'sessionsController.php';

class BookController
{
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
        return $bookOption = $_POST["bookOption"];
    }

    public function rentBook(){

        $rentBook = new BookRepository;
        $rentBook->getRentBooks();
        return header("Location: /TP_Final_Prog1_nuevo/home.php");
    }
    
    
    
}
