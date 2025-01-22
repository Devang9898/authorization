<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
class BookTableSeeder extends Seeder
{
    public function run()
    {
        // Create 10 authors
        Author::factory()->count(10)->create()->each(function ($author) {
            // Create 5 books for each author
            Book::factory()->count(5)->for($author)->create();
        });
        // Create 10 publishers
        Publisher::factory()->count(10)->create();
        // Assign each book a random publisher
        $books = Book::all();
        foreach ($books as $book) {
            $book->publisher_id = Publisher::all()->random()->id;
            $book->save();
        }
    }
}
