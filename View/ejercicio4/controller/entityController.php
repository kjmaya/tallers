<?php
namespace taller4\controllers;
use taller4\controllers\database\DatabaseController;

abstract class EntityController{
   public abstract function allData();
   public abstract function getItem($pk);
   public abstract function addItem($codigo,$model,$pk);
   public abstract function updateItem($model);
   public abstract function deleteItem($pk);

   protected function execSql($sql){
       $dbController = new DatabaseController();
       return $dbController->execSql($sql);
   }
}

?>