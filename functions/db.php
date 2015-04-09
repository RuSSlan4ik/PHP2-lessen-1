<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('Lessen');
mysql_query("SET NAMES utf8");
function dbFindAllByQuery($sql)
{
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