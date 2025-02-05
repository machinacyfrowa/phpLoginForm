<?php
class Image {

    public static function Upload(array $files) {
        //pobierz oryginalną nazwe pliku
        $name = $files['name'];
        //wyciągnij z oryginalnej nazwy pliku rozszerzenie
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        //wygeneruj unikatowy string na podstawie nazwy pliku i aktualnego czasu
        $name = sha1($name.microtime()).".".$extension;
        //pobierz ścieżkę pliku tymczasowego
        $tempPath = $files['tmp_name'];
        //wygeneruj nową ścieżkę pliku
        $path = "uploads/".$name; 
        //przenieś plik z folderu tymczasowego do folderu z uploadami
        move_uploaded_file($tempPath, $path);
    }
}

?>