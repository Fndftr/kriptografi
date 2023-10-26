# kriptografi
Berikut adalah cara penggunaan dan aturan dalam kode tersebut:

Fungsi encrypt($text, $key) digunakan untuk mengenkripsi teks dengan metode transposisi. Parameter text adalah teks yang akan dienkripsi, dan key adalah kunci yang menentukan jumlah kolom dalam matriks.

Fungsi decrypt($text, $key) digunakan untuk mendekripsi teks yang telah dienkripsi. Parameter text adalah teks terenkripsi, dan key adalah kunci yang digunakan saat enkripsi.

Pada kode HTML, terdapat sebuah formulir yang memungkinkan pengguna untuk memasukkan teks dan kunci yang akan digunakan untuk enkripsi.

Saat pengguna memasukkan teks dan kunci, formulir akan mengirimkan data tersebut sebagai parameter text dan key dalam URL.

Setelah pengguna mengirim formulir, kode PHP di bagian bawah akan memeriksa apakah ada parameter text dan key yang diterima. Jika ada, kode akan mengenkripsi teks menggunakan kunci yang diberikan dan menampilkan teks terenkripsi. Kemudian, kode akan mendekripsi teks terenkripsi menggunakan kunci yang sama dan menampilkan teks terdekripsi.

Pengguna dapat melihat hasil enkripsi dan dekripsi di halaman web setelah mengirim formulir.
