<?php
  class MyDB extends SQLite3
  {
    function __construct()
    {
        $this->open('test.db');
    }
  }
  $db = new MyDB();
  if(!$db){
    echo $db->lastErrorMsg();
  } else {
    echo "Opened database successfully\n";
  }
/*
  $sql = <<<EOF
      CREATE TABLE post
      (id INTEGER  PRIMARY KEY AUTOINCREMENT NOT NULL,
      title   TEXT NOT NULL,
      picurl  TEXT NOT NULL,
      text    TEXT NOT NULL);
EOF;
$ret = $db->exec($sql);
if(!$ret){
  echo $db->lastErrorMsg();
} else {
  echo "sql successfully\n";
}*/
  $sql = "Insert into post (title, picurl, text) VALUES ('" . $_POST['title'] ."','". $_POST['picurl']."','". $_POST['text']."');";
  $ret = $db->exec($sql);
  if(!$ret){
    echo $db->lastErrorMsg();
  } else {
    echo "sql successfully\n";
  }
  echo $sql;
  //var_dump($_POST);
  $db->close();
?>