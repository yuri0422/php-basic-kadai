<!DOCTYPE html>
<html lang="ja">

<haed>
  <meta charset="UTF-8">
  <title>KADAI_011</title>
</haed>

<body>
  <p>
    <?php
    $vagetable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($vagetable as $key => $value) {
    echo "{$key}:{$value}<br>";
  }
    ?>
  </p>

  </p>
</body>
</html>