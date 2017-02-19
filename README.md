# php-base-api
a simple base project for API creation using vanilla PHP

--- 
###Deskripri

Repositori ini berisi sampel kode untuk pembuatan API sesuai dengan standar yang dipakai oleh [Flipbox](http://flipbox.co.id) 

Daftar berkas :

* index.php

Merupakan berkas utama yang digunakan untuk mengolah data API.
Baris baris yang perlu diperhatikan adalah :

``$request->setToken('xxx');``

Baris tersebut digunakan untuk mengatur _default token_ yang digunakan dalam API

``if($request->validateToken()) {``

Baris tersebut digunakan untuk mengecek apakah _request_ sudah mengandung token yang tepat.

* Helpers.php

Merupakan berkas yang dapat digunakan untuk membantu menjalankan fungsi fungsi tambahan yang mungkin dibutuhkan, antara lain : `sanitizeQuery` untuk memastikan query yang dipakai aman, dan `generateToken` untuk membuat token secara random.

* RequestHelpers.php

Merupakan berkas yang dapat digunakan untuk membantu menjalankan fungsi fungsi tambahan yang mungkin dibutuhkan saat menerima _Request_ , antara lain : `setToken` untuk mengatur token yang dipakai oleh API, dan `validateToken` untuk memastikan token yang diberikan ( via _Query Param_ ataupun _Authorization Header_ sudah sesuai.

* ResponseHelpers.php

Merupakan berkas yang dapat digunakan untuk membantu menjalankan fungsi fungsi tambahan yang mungkin dibutuhkan saat memberikan _Response_ , antara lain : `responseSuccess` untuk mengatur data yang dikirimkan ketika proses berhasil dengan parameter _( data, [optional] http code, [optional] message )_, dan `responseFailed` untuk mengatur data yang dikirimkan ketika proses gagal dengan parameter _( data, [optional] http code, [optional] message )_.