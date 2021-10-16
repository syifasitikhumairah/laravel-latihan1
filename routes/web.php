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

//Route Bagian DB Seeder
// Model Post

//1. Mencari semua model :
Route::get('/testmodel1', function() {
    $query = App\Models\Post::all();
    return $query;
    });

//2. Mencari model berdasarkan id :
Route::get('/testmodel2/{id}', function($id) {
    $query = App\Models\Post::findOrFail($id) ;
    return $query;
    });

//3. Mencari model berdasarkan title :
Route::get('/testmodel3', function() {
    $query = App\Models\Post::where('title','like','%Juz Amma%')->get();
    return $query;
    });

//4. Mengubah record, (hapus semua isi function) :
Route::get('/testmodel4', function() {
    $post = App\Models\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
    });

//5. Menghapus record, (hapus semua isi function) :
Route::get('/testmodel5', function() {
    $post = App\Models\Post::find(1)->delete();
    return $post;
    });

//6. Menambah record, (hapus semua isi function) :
Route::get('/testmodel6', function() {
    $post = new App\Models\Post();
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
    });

Route::get('/test-post', function() {
    $query = App\Models\Post::all();
    return view('test-post', compact('query'));
});

Route::get('/dosen', function() {
    $query = App\Models\Dosen::all();
    return view('dosen', compact('query'));
});
