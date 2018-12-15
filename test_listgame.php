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
    //echo "Opened database successfully\n";
  }

  $sql = "Select * from post ORDER BY id;";
  $ret = $db->query($sql);
  if(!$ret){
    echo $db->lastErrorMsg();
  } else {
    $res = array();
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        $res[$row['id']] = $row;
    }
    echo json_encode($res);
  }
  
  $db->close();
?>