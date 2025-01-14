<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
function sort_2way($array, $order)
{
    if ($order === TRUE) {
        sort($array);
        echo '昇順にソートします。<br>';
    } elseif ($order === FALSE) {
        rsort($array);
        echo '降順にソートします。<br>';
    } else {
        echo '無効な順序指定です。<br>';
        return;
    }

    // ソートされた配列を表示
    foreach ($array as $value) {
        echo "{$value}<br>";
    }
}

// テストするデータ
$nums = [15, 4, 18, 23, 10];

// 昇順ソートのテスト
sort_2way($nums, TRUE);
echo "<br>";

// 降順ソートのテスト
sort_2way($nums, FALSE);
?>



        
    </p>
</body>

</html>