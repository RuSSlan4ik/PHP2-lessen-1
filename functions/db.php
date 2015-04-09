<?php
function dbConnect()
{
  mysql_connect("localhost", "root", "")or die("Error");
  mysql_select_db("site1")or die("Error");
  mysql_query("SET NAMES utf8");
}
function dbFindAllByQuery($sql)
{
  dbConnect();
  $res = mysql_query($sql);
  $ret = array();
  while(($row = mysql_fetch_array($res)) !== false) {
    $ret[] = $row;
  }
  return $ret;
}
function dbFindOneByQuery($sql)
{
  return dbFindAllByQuery($sql)[0];
}