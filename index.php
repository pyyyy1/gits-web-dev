<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META TAG -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1 Studi Independen || Zhafia Rabbani Amalia</title>
</head>

    <!-- STYLE CSS -->
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100hv;
            margin: 0;
            font-family: verdana;
            background-image: url('https://images.unsplash.com/photo-1584531979583-18c5c4b25efc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjUzfHxiYWNrZ3JvdW5kfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60');
        }

        table{
            border-collapse: collapse;
            border: 1px solid black;
            margin-top: 10%;
        }

        table td {
            padding: 10px;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            margin-bottom: 2px;
            padding-top: 10px;
        }

        footer {
            position: fixed;
            bottom: 0;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        footer a{
            color: black;
            text-decoration: none;
        }
    </style>
<body>
    <!-- BODY -->
    <main>
    <div>
        <h1>Biodata Diri</h1>
    </div>
    <div>
    <table border="1" cellpadding="8" cellspacing="0">
        <?php
            $data = array(
                "Nama Lengkap" => "Zhafia Rabbani Amalia",
                "Nama Panggilan" => "Fia",
                "Jenis Kelamin" => "Perempuan",
                "Hobi" => "Bercerita",
                "Kebangsaan" => "Warga Negara Indonesia",
                "Kampus" => "Sekolah Tinggi Teknologi Terpadu Nurul Fikri",
                "Jurusan Kuliah" => "Teknik Informatika",
                "Semester Kuliah" => 7,
                "Angkatan" => 2020
            );

            foreach ($data as $label => $value) {
                echo "<tr>
                        <td>$label</td>
                        <td>:</td>
                        <td>$value</td>
                    </tr>";
            }
        ?>
    </table>
    </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <p>Developed by <a href="https://github.com/pyyyy1/">Zhafia Rabbani Amalia</a>
        </p>
    </footer>
</body>
</html>
