<?php
class DB extends DBmysql {
   public $dbhost = 'localhost:3306';
   public $dbuser = 'root';
   public $dbpassword = '';
   public $dbdefault = 'base_104';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
