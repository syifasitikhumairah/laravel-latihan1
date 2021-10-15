<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Syifa";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    $nama = "Syifa Siti Khumairah";
    $umur = "17 tahun";
    $alamat = "Taman Cibaduyut Indah";
    $sekolah = "SMK Assalaam Bandung";
    $kelas = "XII RPL 1";
    $hobi = "Membaca Novel";
    return view('biodata', compact('nama', 'umur', 'alamat', 'sekolah', 'kelas', 'hobi'));
});

//  route parameter
Route::get('post/{id}', function ( $a) {
    return view('post', ['post' => $a]);
});

Route::get('bio/{nama}/{umur}/{alamat}', function ( $nama, $umur, $alamat) {
    return view('bio', ['post1' => $nama, 'post2' => $umur, 'post3' => $alamat]);
});

Route::get('blog', function(){
    $posts = [
        ['id'=> 1, 'title' => 'Lorem Ipsum 1', 'content' =>'Content pertama'],
        ['id'=> 2, 'title' => 'Lorem Ipsum 2', 'content' =>'Content kedua'],
        ['id'=> 3, 'title' => 'Lorem Ipsum 3', 'content' =>'Content ketiga'],
    ];
    // dd($posts);
    return view('blog', compact('posts'));
});

Route::get('data', function(){
    $posts = [
        ['id'=> 1,
         'name' => 'Ujang Ubed',
         'username' =>'ujang_ubed',
         'email' => 'ujangubed@gmail.com',
         'alamat' => 'Bandung',
         'matapel' => [
             'mapel1'=>"Matematika",
             'mapel2'=>"Fisika",
             'mapel3'=>"Kimia",
        ]],
        ['id'=> 2,
         'name' => 'Ujang Ubed',
         'username' =>'ujang_ubed',
         'email' => 'ujangubed@gmail.com',
         'alamat' => 'Bandung',
         'matapel' => [
             'mapel1'=>"Matematika",
             'mapel2'=>"Fisika",
             'mapel3'=>"Kimia",
         ]],
         ['id'=> 3,
         'name' => 'Ujang Ubed',
         'username' =>'ujang_ubed',
         'email' => 'ujangubed@gmail.com',
         'alamat' => 'Bandung',
         'matapel' => [
             'mapel1'=>"Matematika",
             'mapel2'=>"Fisika",
             'mapel3'=>"Kimia",
         ]],
         ['id'=> 4,
         'name' => 'Ujang Ubed',
         'username' =>'ujang_ubed',
         'email' => 'ujangubed@gmail.com',
         'alamat' => 'Bandung',
         'matapel' => [
             'mapel1'=>"Matematika",
             'mapel2'=>"Fisika",
             'mapel3'=>"Kimia",
         ]],
         ['id'=> 5,
         'name' => 'Ujang Ubed',
         'username' =>'ujang_ubed',
         'email' => 'ujangubed@gmail.com',
         'alamat' => 'Bandung',
         'matapel' => [
             'mapel1'=>"Matematika",
             'mapel2'=>"Fisika",
             'mapel3'=>"Kimia",
         ]],
    ];
    // dd($posts);
    return view('data', compact('posts'));
});
//  route optional parameter
Route::get('page/{page?}', function ($hal = 1) {
    return "Halaman <b>$hal</b>";
});

Route::get('pesan/{makan?}/{minum?}/{cemilan?}', function ($makan = null, $minum = null, $cemilan = null) {
    if ($makan == null && $minum == null && $cemilan == null){
        $pesan = "Anda tidak memesan, silahkan pulang!";
    }
    if ($makan != null ){
        $pesan = "Anda Memesan<br>"
            . "<br>Makanan : <b>$makan</b>";
    }if ($makan != null && $minum != null ){
        $pesan = "Anda Memesan<br>"
            . "<br>Makanan : <b>$makan</b>"
            . "<br>Minuman : <b>$minum</b>";
    }if ($makan != null && $minum != null && $cemilan != null ){
        $pesan = "Anda Memesan <br>"
            . "<br>Makanan : <b>$makan</b>"
            . "<br>Minuman : <b>$minum</b>"
            . "<br>Cemilan : <b>$cemilan</b>";
    }
    return $pesan;
});


