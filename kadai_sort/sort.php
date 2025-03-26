<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      $nums = [15, 4, 18, 23, 10];

      function sort_2way($array, $order) {
        // order が true の場合は昇順
        if ( $order === true) {
          sort($array);
        }
          
          else { // order が false の場合は降順
            rsort($array);
          }
  
          foreach ($array as $number) {
            echo $number . '<br>';
          }
        }
      
      echo '昇順にソートします。'  .  '<br>';
      sort_2way($nums, true);
      echo '降順にソートします。'  .  '<br>';
      sort_2way($nums, false);
      ?>
    </p>
  </body>
  
</html>