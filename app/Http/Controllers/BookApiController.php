<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\api;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Question\Question;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class BookApiController extends Controller
{



    public function log(Request $request)
    {

        $response = Http::get('https://run.mocky.io/v3/821d47eb-b962-4a30-9231-e54479f1fbdf', [
            'headers' => [
                'Authorization' => 'AppRinger',
                'limit' => 8,

            ]
        ]);
        $books = json_decode($response->body());

        foreach ($books->items as $book) {
            if (empty($book->volumeInfo->subtitle)) {

                $booksL1 = new Books;
                $booksL1->title = $book->volumeInfo->title;
                $booksL1->authors = $book->volumeInfo->authors[0];
                $booksL1->smallThumbnail = $book->volumeInfo->imageLinks->smallThumbnail;
                $booksL1->thumbnail = $book->volumeInfo->imageLinks->thumbnail;
                $booksL1->save();
                continue;
            }
            $booksL1 = new Books;
            $booksL1->title = $book->volumeInfo->title;
            $booksL1->subtitle = $book->volumeInfo->subtitle;
            $booksL1->authors = $book->volumeInfo->authors[0];
            $booksL1->smallThumbnail = $book->volumeInfo->imageLinks->smallThumbnail;
            $booksL1->thumbnail = $book->volumeInfo->imageLinks->thumbnail;
            $booksL1->save();
        }

        $BookData = Books::orderBy('id', 'asc')->paginate(15);
        return view('layouts.books', compact('BookData'));
    }
}
