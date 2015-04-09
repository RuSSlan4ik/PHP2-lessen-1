<?php
require __DIR__ . 'db.php';
function findAllNews()
{
  $sql = 'SELECT * FROM NEWS ORDER BY data DESC';
  $ret = dbFindAllByQuery($sql);
  return $ret;
}
function findOneById($id)
{
  $sql = 'SELECT * FROM NEWS WHERE id=' . $id;
  $ret = dbFindOneByQuery($sql);
  return $ret;
}