<?php

namespace Asus\FpolyBaseWeb3014\Models;

use Asus\FpolyBaseWeb3014\Commons\Model;

class Category extends Model
{
   protected string $tableName = 'categories';
   public function all() {
      return $this->queryBuilder
      ->select('*')
      ->from($this->tableName)
      ->orderBy('id', 'desc')
      ->fetchAllAssociative();
  }
}
