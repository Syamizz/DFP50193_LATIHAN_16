<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuteraan Awam Dengan Kepujian'=>[
            'SPM',
            'Matrikulasi',
            'Diploma'
        ],
        'Sarjana Muda Teknologi Kejuteraan Pembuatan (Pengurusan Rangkaian Bekalan)'=>[
            'SPM',
            'Matrikulasi',
            'Diploma'
        ],
        'Diploma Kejuteraan Awam'=>[
            'SPM',
            'Sijil',
            'Diploma'
        ],
        'Diploma Seni Bina'=>[
            'SPM',
            'Sijil'
        ]
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam'=>[
            'SPM'
        ],
        'Diploma Seni Bina'=>[
            'SPM'
        ],
        'Diploma Geomatik'=>[
            'SPM'
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulang Kaji Array</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Senarai Program di Politeknik</h1>
    <pre><?php
        print_r($program);
    ?></pre>
    <ul>
    <?php
    foreach ($program as $poli => $value){
        echo "<li>$poli";
        echo "<ul>";
        foreach ($value as $course =>$test){
            echo "<li>$course";
            echo "<ul>";
            foreach($test as $kelayakan){
                echo "<li>$kelayakan</li>";
            }
            echo '</ul>';
            echo "</li>";
        }
        echo '</ul>';
        echo "</li>";
    }
    ?>
    </ul>
    <!--<ul>
        <li>Politeknik Ungku Omar
            <ul>
                <li>Sarjana MUda Teknologi Kejuteraan Awam Dengan Kepujian</li>
                <li></li>
            </ul>
        </li>
    </ul> -->
</body>
</html>