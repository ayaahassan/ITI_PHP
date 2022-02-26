<?php

class Counter
{
    static public $count=0;
  static public function increasecount()
  {
     $f = fopen(COUNTER_PATH, "r");
     self::$count = (int)fgets($f);
     self::$count++;
   //8echo self::$count;
     $fp = fopen(COUNTER_PATH,"w");
     fwrite($fp,self::$count.PHP_EOL);
      fclose($fp);
  }
  static public function getcount()
  {
    if(file_exists(COUNTER_PATH)) {
          $f = fopen(COUNTER_PATH, "r");
          self::$count =(int) fgets($f);
          fclose($f);
         // var_dump( self::$count);
      }
  return self::$count;
  }

}