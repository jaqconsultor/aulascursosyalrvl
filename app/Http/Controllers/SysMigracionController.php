<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class SysMigracionController extends Controller
{

    public function __construct()
    {

    }

    public function up()
    {
        $this->migracion();
        
        return view('up');
    }

    public function down()
    {

            return 1;
        if (Schema::hasColumn('users', 'two_factor_secret')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('two_factor_recovery_codes');
            });
        }

        if (Schema::hasColumn('users', 'two_factor_recovery_codes')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('two_factor_recovery_codes');
            });
        }

        Schema::dropIfExists('users');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('personal_access_tokens');
        Schema::dropIfExists('files');
        Schema::dropIfExists('migrations');

        return view('down');
    }


    // Funcion para Cargar Data Incial
    public function updata()
    {
        return view('up');
    }

    // Funcion para Borrar Data
    public function downdata()
    {
        return view('down');
    }


    // Funcion para Corrergir Data
    public function corregirdata()
    {
        return view('corregirdata');
    }

    public function migracion()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->text('two_factor_secret')->nullable();
                $table->text('two_factor_recovery_codes')->nullable();
                $table->rememberToken();
                $table->timestamps();
                $table->string('avatar')->nullable();
                $table->string('role')->default('user');
                $table->integer('usercreated_at')->nullable();
                $table->integer('userupdated_at')->nullable();
                $table->integer('in_medico')->nullable();
                $table->integer('in_paciente')->nullable();
            });
        }

        if (!Schema::hasTable('password_resets')) {
            Schema::create('password_resets', function (Blueprint $table) {
                $table->string('email')->index();
                $table->string('token');
                $table->timestamp('created_at')->nullable();
            });
        }

        if (!Schema::hasTable('failed_jobs')) {
            Schema::create('failed_jobs', function (Blueprint $table) {
                $table->id();
                $table->string('uuid')->unique();
                $table->text('connection');
                $table->text('queue');
                $table->longText('payload');
                $table->longText('exception');
                $table->timestamp('failed_at')->useCurrent();
            });
        }


        if (!Schema::hasTable('personal_access_tokens')) {
            Schema::create('personal_access_tokens', function (Blueprint $table) {
                $table->id();
                $table->morphs('tokenable');
                $table->string('name');
                $table->string('token', 64)->unique();
                $table->text('abilities')->nullable();
                $table->timestamp('last_used_at')->nullable();
                $table->timestamp('expires_at')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('files')) {
            Schema::create('files', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->integer('usercreated_at')->nullable();
                $table->integer('userupdated_at')->nullable();

                $table->string('title')->nullable();
                ;

                $table->string('name')->nullable();
                ;
            });
        }


        if (!Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->timestamps();
                $table->integer('usercreated_at')->nullable();
                $table->integer('userupdated_at')->nullable();
                $table->integer('activo')->default(1);
            });
        }

        if (Schema::hasColumn('users', 'email')) {
            // Colocar Columna
        }

        return view('up');
    }


}