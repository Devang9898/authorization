<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePublishersTable extends Migration
{
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('publishers');
    }
}
// ‎database/migrations/2025_01_10_083317_add_publisher_to_books_table.php
// +22
// Original file line number	Diff line number	Diff line change
// @@ -0,0 +1,22 @@
// <?php
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// class AddPublisherToBooksTable extends Migration
// {
//     public function up()
//     {
//         Schema::table('books', function (Blueprint $table) {
//             $table->foreignId('publisher_id')->nullable()->constrained()->onDelete('cascade');
//         });
//     }
//     public function down()
//     {
//         Schema::table('books', function (Blueprint $table) {
//             $table->dropColumn('publisher_id');
//         });
//     }
// }