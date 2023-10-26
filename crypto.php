<?php
// Fungsi untuk mengenkripsi teks dengan metode transposisi
function encrypt($text, $key){
    $encrypted_text = "";
    $num_kolom = $key;
    $num_rows = ceil(strlen($text) / $num_kolom);
    $matrix = array();
    
    // Inisialisasi matriks dengan spasi
    for($i = 0; $i < $num_rows; $i++){
        for($j = 0; $j < $num_kolom; $j++){
            $matrix[$i][$j] = " ";
        }
    }
    
    
    // Mengisi matriks dengan karakter dari teks
    $index = 0;
    for($i = 0; $i < $num_kolom; $i++){
        for($j = 0; $j < $num_rows; $j++){
            if($index < strlen($text)){
                $matrix[$j][$i] = $text[$index];
                $index++;
            }
            // echo $j.$i."\n";
            // var_dump($matrix);
        }
    }
    
    // Membaca matriks baris per baris
    for($i = 0; $i < $num_rows; $i++){
        for($j = 0; $j < $num_kolom; $j++){
            $encrypted_text .= $matrix[$i][$j];
        }
    }
    return $encrypted_text;
}

// Fungsi untuk mendekripsi teks yang telah dienkripsi
function decrypt($text, $key){
    $decrypted_text = "";
    $num_columns = $key;
    $num_rows = ceil(strlen($text) / $num_columns);
    $matrix = array();
    
    // Inisialisasi matriks dengan spasi
    for($i = 0; $i < $num_rows; $i++){
        for($j = 0; $j < $num_columns; $j++){
            $matrix[$i][$j] = " ";
        }
    }
    
    // Mengisi matriks dengan karakter dari teks terenkripsi
    $index = 0;
    for($i = 0; $i < $num_rows; $i++){
        for($j = 0; $j < $num_columns; $j++){
            if($index < strlen($text)){
                $matrix[$i][$j] = $text[$index];
                $index++;
            }
        }
    }
    
    // Membaca matriks kolom per kolom
    for($i = 0; $i < $num_columns; $i++){
        for($j = 0; $j < $num_rows; $j++){
            $decrypted_text .= $matrix[$j][$i];
        }
    }
    return $decrypted_text;
}


// $plaintext = "Ini adalah contoh teks untuk dienkripsi dengan chiper transposisi.";
// $key = 5; // Kunci untuk mengubah urutan kolom

// Enkripsi teks
// $encrypted_text = encrypt($plaintext, $key);
// echo "Teks Terenkripsi: " . $encrypted_text . "\n";

// Dekripsi teks
// $decrypted_text = decrypt($encrypted_text, $key);
// echo "Teks Terdekripsi: " . $decrypted_text . "\n";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi dan Dekripsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        form {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="#">
        <label for="text">Masukkan Teks</label>
        <input type="text" name="text" id="text"><br>
        <label for="key">Masukkan Kunci</label>
        <input type="number" name="key" id="key"><br>
        <input type="submit" value="Enkripsi">
    </form>
</body>
<?php
    if(isset($_GET['text']) && isset($_GET['key'])){
        $text = $_GET['text'];
        $key = $_GET['key'];
        $encrypted_text = encrypt($text, $key);
        echo "Teks Terenkripsi: " . $encrypted_text . "\n";
        $decrypted_text = decrypt($encrypted_text, $key);
        echo "<br>Teks Terdekripsi: " . $decrypted_text . "\n";
    }
?>
</html>
