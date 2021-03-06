<?php

namespace Azuos\Schema;

class Player extends \Azuos\Database\Schema
{
   protected $table = 'player';

   public function create()
   {
      $this->table($this->table);
      $this->id();
      $this->string('name', 80);
      $this->int('team_id')->foreignKey('team')->onDeleteSetNull();
      $this->int('country_id')->foreignKey('country')->onDeleteSetNull();
      $this->runCreate();
   }

   public function factory()
   {
      (new \Azuos\Database\Database)->table($this->table)->insert([
        'id' => 1, 
        'name' => 'Cristiano Ronaldo',
        'team_id' => 3,
        'country_id' => 13
      ], [
        'id' => 2, 
        'name' => 'Messi',
        'team_id' => 2,
        'country_id' => 2
      ], [
        'id' => 3, 
        'name' => 'Neymar',
        'team_id' => 6,
        'country_id' => 24
      ], [
        'id' => 4, 
        'name' => 'Neuer',
        'team_id' => 4,
        'country_id' => 1
      ], [
        'id' => 5, 
        'name' => 'Hazard',
        'team_id' => 1,
        'country_id' => 23
      ]);
   }
}