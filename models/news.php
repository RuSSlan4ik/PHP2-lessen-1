<?php
require __DIR__ . '/../functions/db.php';
function findAllNews()
{
  $sql = 'SELECT * FROM NEWS ORDER BY date DESC';
  $ret = dbFindAllByQuery($sql);
  return $ret;
}
function findOneById($id)
{
  $sql = 'SELECT * FROM NEWS WHERE id=' . $id;
  $ret = dbFindOneByQuery($sql);
  return $ret;
}