<?php

namespace App\Http;


use App\Data\BookDTO;
use App\Service\GenreService;

class BookHttpHandler extends HttpHandlerAbstract
{

    public function addBook(\App\Service\BookService $bookService, GenreService $genreService, array $form_data)
    {
        if (isset($form_data['add'])) {

            try {
                $book = BookDTO::create(
                    $form_data['title'],
                    $form_data['author'],
                    $form_data['description'],
                    $form_data['image'],
                    intval($form_data['genre_id']),
                    $_SESSION['id']
                );

                if ($bookService->addBook($book)) {
                    $this->redirect('my_books.php');
                }
            } catch (\Exception $exception) {
                $genres = $genreService->getAll();
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render('book/add', $genres);
            }

        } else {
            $genres = $genreService->getAll();
            $this->template->render('book/add', $genres);
        }
    }


    public function deleteTask(\App\Service\BookService $taskService, \App\Service\UserService $userService, $form_data)
    {
        if (isset($form_data['delete'])) {
            $user = $userService->getCurrentUser($_SESSION['id']);
            if (password_verify($form_data['password'], $user->getPassword())) {
                if ($taskService->deleteTask($form_data['task_id'])) {
                    $this->redirect('index.php');
                }
            }
        } else {
            $this->template->render("book/delete", $taskService->findOneById($_GET['task_id']));
        }
    }

    public function myBooks(\App\Service\BookService $bookService)
    {
        $books = $bookService->findBooksByUserId($_SESSION['id']);

        $this->template->render('book/my_books', $books);
    }

    public function allBooks(\App\Service\BookService $bookService)
    {
        $books = $bookService->findAllBooks();

        $this->template->render('book/all_books', $books);
    }

    public function viewBook(\App\Service\BookService $bookService)
    {
        $book = $bookService->findBookById($_GET['book_id']);

        $this->template->render('book/view_book', $book);
    }

    public function editBook(\App\Service\BookService $bookService, GenreService $genreService, $form_data)
    {
        if (isset($form_data['edit'])) {

            try {
                $book = BookDTO::create(
                    $form_data['title'],
                    $form_data['author'],
                    $form_data['description'],
                    $form_data['image'],
                    intval($form_data['genre_id']),
                    $_SESSION['id']
                );

                if ($bookService->editBook($book, $_REQUEST['book_id'])) {
                    $this->redirect('my_books.php');
                }
            } catch (\Exception $exception) {
                $genres = $genreService->getAll();
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render('book/edit', $genres);
            }
        } else {
            $book = $bookService->findBookById($_GET['book_id']);
            $genres = $genreService->getAll();
            $this->template->render('book/edit_book', $book, $genres);
        }
    }

    public function deleteBook(\App\Service\BookService $bookService, \App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['delete'])){
            $user = $userService->getCurrentUser($_SESSION['id']);
            if (password_verify($form_data['password'], $user->getPassword())){
                if($bookService->deleteBook($form_data['book_id'])){
                    $this->redirect('profile.php');
                }
            }else{
                echo "<p style='color: red'>Wrong password!<p/>";
                $this->template->render("book/delete", $bookService->findBookById($_GET['book_id']));
            }
        }else{
            $this->template->render("book/delete", $bookService->findBookById($_GET['book_id']));
        }
    }
}