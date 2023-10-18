<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function index(): View
    {
    $books = Book::all();

    return view('books.index', compact('books'));    
    }

    public function create(): View
    {
        return view('books.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    public function edit(Book $book): View
    {
        return view('books.edit',compact('book'));   
    }

    public function update(Request $request, Book $book): RedirectResponse
    {
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    public function show(Book $book): View
    {
        return view('books.show',compact('book'));   
    }

    public function delete(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success','Book has been deleted successfully');
    }
}