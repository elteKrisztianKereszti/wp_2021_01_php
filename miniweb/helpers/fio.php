<?php
  function load_file($filename) {
    $content = file_get_contents($filename);
    $data = json_decode($content, true);

    return $data;
  }

  function save_file($filename, $data) {
    $encodedData = json_encode($data);
    file_put_contents($filename, $encodedData);
  }
?>
