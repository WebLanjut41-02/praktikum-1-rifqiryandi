Dengan menggunakan controller, buatlah login sederhana. 
Login tidak melakukan pencetakan ke database, tapi hanya menggunakan 
pengecekan ke dalam array assosiatif.
Format array:
$user = array(
  array("username" => "andi", "password" => 1234),
  array("username" => "budi", "password" => 4321),
  array("username" => "charlie", "password" => 3821),
);
Ketentuan:
1. Gunakan Base controller untuk menampilkan halaman header.
2. Ada halaman list data user yang bisa diedit. Halaman ini bisa 
diakses hanya jika sudah login. Gunakan Session dalam controller.
3. Ada fungsi Logout
