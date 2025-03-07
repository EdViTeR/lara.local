<?php

// ⊗pplrPmMgTF_62 №1
Schema::create('article', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('text');
    $table->dateTime('created_at');
});
// №2
Schema::create('user', function (Blueprint $table) {
    $table->id();
    $table->string('name', 50);
    $table->string('surname', 50);
    $table->date('birthday');
    $table->dateTime('created_at');
});
///////////////////////////////////////////////////////////
// ⊗pplrPmMgUFA_65 №1
 Schema::table('user', function (Blueprint $table) {
     $table->string('name', 40)->change();
 });
///////////////////////////////////////////////////////////
// ⊗pplrPmMgFRm_66 №1
Schema::table('user', function (Blueprint $table) {
    $table->dropColumn('birthday');
});
// №2
Schema::table('user', function (Blueprint $table) {
    $table->dropColumn(['name', 'surname']);
});
///////////////////////////////////////////////////////////
// ⊗pplrPmMgFRn_67 №1
Schema::table('user', function(Blueprint $table) {
    $table->renameColumn('name', 'first_name');
    $table->renameColumn('surname', 'second_name');
});
///////////////////////////////////////////////////////////
// ⊗pplrPmMgFM_68 №1-4
Schema::table('user', function(Blueprint $table) {
    $table->string('email')->comment('Это почта')->change();
    $table->integer('salary')->default(0)->change();
    $table->integer('age')->nullable()->unsigned()->change();
});
///////////////////////////////////////////////////////////
// ⊗pplrPmMgFO_69 №1 №2
Schema::table('user', function(Blueprint $table) {
    $table->string('first_name')->first()->change();
    $table->string('sex')->after('id');
});
///////////////////////////////////////////////////////////
// ⊗pplrPmMgTRm_70 №1
Schema::dropIfExists('user');
// №2
    // Schema::drop('userq'); //выведет ошибку
///////////////////////////////////////////////////////////
// ⊗pplrPmMgTRn_71 №1
Schema::rename('user', 'users');
///////////////////////////////////////////////////////////
// ⊗pplrPmMgRBP_72 №1
public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone');
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone');
    });
}
// №2
public function up(): void
{
    Schema::table('users', function(Blueprint $table) {
        $table->dropColumn('phone');
    });
}

public function down(): void
{
    Schema::table('users', function(Blueprint $table) {
        $table->string('phone');
    });
}
// №3
public function up(): void
{
    Schema::table('users', function(Blueprint $table) {
        $table->dropColumn(['name', 'surname', 'birthday']);
    });
}

public function down(): void
{
    Schema::table('users', function(Blueprint $table) {
        $table->string('name', 50);
        $table->string('surname', 50);
        $table->string('date');
    });
}
// №4
public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('name')->after('id')->change();
        $table->string('surname')->after('name')->change();
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('name')->after('created_at')->change();
        $table->string('surname')->after('name')->change();
    });
}
// №5
public function up(): void
{
    Schema::rename('users', 'user');
}

public function down(): void
{
    Schema::rename('user', 'users');
}
///////////////////////////////////////////////////////////
// ⊗pplrPmMgRB_73 №1-№4
#php artisan migrate
#php artisan migrate:rollback
#php artisan migrate:rollback --step=3
#php artisan migrate:refresh
///////////////////////////////////////////////////////////
// ⊗pplrPmMgIC_74 №1
public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->index('email');
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->droIndex('email');
    });    
}
///////////////////////////////////////////////////////////
// ⊗pplrPmMgPF_75 №1
public function up(): void
{
    Schema::dropIfExists('post');
}
///////////////////////////////////////////////////////////