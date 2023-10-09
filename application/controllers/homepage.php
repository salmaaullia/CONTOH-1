<?php
class homepage extends CI_Controller {
    public function index(){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salma Aulia Personal Website</title>
</head>

<body>
    <hr />

    <header style="text-align: center;">
        
        <h1>Salma Aulia</h1>
    </header>

    <hr />

    <article style="text-align: center;">
        <h2>ABOUT ME</h2>
        <p>
            Hi, saya adalah Salma Aulia, Saya sedang belajar di Universitas Bina Sarana Informatika
            Jurusan Sistem Informasi semester 3!
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Motivasi Untuk Kuliah</th>
                    <th>Keinginan setelah lulus kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>Biar dapet uang jajan wkwkwk</li>
                            <li>Ketemu temen dong</li>
                            <li>Ghibah</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Soon kerja di BIG4</li>
                            <li>Bisa beli mobil sendiri hahaha (maunya lamborghini)</li>
                            <li>Mau makan ayam unlimited</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2023 Salma Aulia.</p>
    </footer>
</body>
</html>
<?php
    }
}