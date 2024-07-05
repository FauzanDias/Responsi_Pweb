<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Data Sewa</title>
</head>
    <header>
        <h1>Data Penyewa Buku</h1>
    </header>
    <main>
        <?php
            $filename='tampilan.txt';
            if (file_exists($filename)) {
                $file = fopen($filename, 'r');
                echo '<ul>';
                while (($line = fgets($file)) !== false) {
                    echo '<li>' . htmlspecialchars($line) . '</li>';
                }
                echo '</ul>';
                fclose($file);
            }
            ?>
        <ul>
        <a class="link" href="index.html">[Kembali]</a>
        </ul>
    </main>
</html>