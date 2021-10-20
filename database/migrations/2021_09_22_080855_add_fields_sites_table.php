<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('hosting_host', 255)->nullable();
            $table->string('hosting_login', 255)->nullable();
            $table->string('hosting_pass', 255)->nullable();

            $table->string('ssh_host', 255)->nullable();
            $table->string('ssh_login', 255)->nullable();
            $table->string('ssh_pass', 255)->nullable();

            $table->string('ftp_host', 255)->nullable();
            $table->string('ftp_login', 255)->nullable();
            $table->string('ftp_pass', 255)->nullable();

            $table->string('db_host', 255)->nullable();
            $table->string('db_login', 255)->nullable();
            $table->string('db_pass', 255)->nullable();

            $table->string('admin_host', 255)->nullable();
            $table->string('admin_login', 255)->nullable();
            $table->string('admin_pass', 255)->nullable();

            $table->text('extra_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn('hosting_host');
            $table->dropColumn('hosting_login');
            $table->dropColumn('hosting_pass');

            $table->dropColumn('ssh_host');
            $table->dropColumn('ssh_login');
            $table->dropColumn('ssh_pass');

            $table->dropColumn('ftp_host');
            $table->dropColumn('ftp_login');
            $table->dropColumn('ftp_pass');

            $table->dropColumn('db_host');
            $table->dropColumn('db_login');
            $table->dropColumn('db_pass');

            $table->dropColumn('admin_host');
            $table->dropColumn('admin_login');
            $table->dropColumn('admin_pass');
            
            $table->dropColumn('extra_info');
        });
    }
}
