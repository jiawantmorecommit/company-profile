<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPublishTimeFromReportsTable extends Migration
{
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('publish_time');
        });
    }

    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            // Jika ingin mengembalikan kolom publish_time saat rollback, gunakan kode berikut:
            $table->timestamp('publish_time')->useCurrent();
        });
    }
}
