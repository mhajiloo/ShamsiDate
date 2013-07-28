<?php
/**
 * Shamsi/Jalali Date component
 *
 * Use Shamsi date in CakePHP
 * 
 * Copyright (c) 2013 Majid Hajiloo <majid.hajiloo@gmail.com>
 * http://blog.hajiloo.net, http://minicode.ir
 *
 * @author        Majid Hajiloo <majid.hajiloo@gmail.com>
 * @link          http://hajiloo.net
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('jDateTime', 'ShamsiDate.Libs');
App::uses('Component', 'Controller');


/**
 * Persian/Shamsi date component class
 *
 * Use Shamsi date in CakePHP
 */
class ShamsiComponent extends Component {
    
    /**
    * Formats and returns given timestamp just like php's
    * built in date() function.
    * e.g:
    * $obj->date("Y-m-d H:i", time());
    * $obj->date("Y-m-d", time(), false, false, 'America/New_York');
    *
    * @param $format string Acceps format string based on: php.net/date
    * @param $stamp int Unix Timestamp (Epoch Time)
    * @param $convert bool (Optional) forces convert action. pass null to use system default
    * @param $jalali bool (Optional) forces jalali conversion. pass null to use system default
    * @param $timezone string (Optional) forces a different timezone. pass null to use system default
    * @return string Formatted input
    */
   public function date($format, $stamp = false, $convert = null, $jalali = null, $timezone = null) {
       return jDateTime::date($format, $stamp, $convert, $jalali, $timezone);
   }
    
    /**
    * Same as Date method
    * but this one works as a helper and returns Gregorian Date
    * in case someone doesn't like to pass all those false arguments
    * to Date method.
    *
    * e.g. $obj->gDate("Y-m-d") //Outputs: 2011-05-05
    *      $obj->date("Y-m-d", false, false, false); //Outputs: 2011-05-05
    *      Both return the exact same result.
    *
    * @param $format string Acceps format string based on: php.net/date
    * @param $stamp int Unix Timestamp (Epoch Time)
    * @param $timezone string (Optional) forces a different timezone. pass null to use system default
    * @return string Formatted input
    */
   public function gDate($format, $stamp = false, $timezone = null) {
       return jDateTime::gDate($format, $stamp, $timezone);
   }
    
    /**
    * Format a local time/date according to locale settings
    * built in strftime() function.
    * e.g:
    * $obj->strftime("%x %H", time());
    * $obj->strftime("%H", time(), false, false, 'America/New_York');
    *
    * @param $format string Acceps format string based on: php.net/date
    * @param $stamp int Unix Timestamp (Epoch Time)
    * @param $jalali bool (Optional) forces jalali conversion. pass null to use system default
    * @param $timezone string (Optional) forces a different timezone. pass null to use system default
    * @return string Formatted input
    */
   public function strftime($format, $stamp = false, $jalali = null, $timezone = null) {
       return jDateTime::strftime($format, $stamp, $jalali, $timezone);
   }
    
    /**
    * Creates a Unix Timestamp (Epoch Time) based on given parameters
    * works like php's built in mktime() function.
    * e.g:
    * $time = $obj->mktime(0,0,0,2,10,1368);
    * $obj->date("Y-m-d", $time); //Format and Display
    * $obj->date("Y-m-d", $time, false, false); //Display in Gregorian !
    *
    * You can force gregorian mktime if system default is jalali and you
    * need to create a timestamp based on gregorian date
    * $time2 = $obj->mktime(0,0,0,12,23,1989, false);
    *
    * @param $hour int Hour based on 24 hour system
    * @param $minute int Minutes
    * @param $second int Seconds
    * @param $month int Month Number
    * @param $day int Day Number
    * @param $year int Four-digit Year number eg. 1390
    * @param $jalali bool (Optional) pass false if you want to input gregorian time
    * @param $timezone string (Optional) acceps an optional timezone if you want one
    * @return int Unix Timestamp (Epoch Time)
    */
   public function mktime($hour, $minute, $second, $month, $day, $year, $jalali = null, $timezone = null) {
       return jDateTime::mktime($hour, $minute, $second, $month, $day, $year, $jalali, $timezone);
   }
    
    /**
    * Checks the validity of the date formed by the arguments.
    * A date is considered valid if each parameter is properly defined.
    * works like php's built in checkdate() function.
    * Leap years are taken into consideration.
    * e.g:
    * $obj->checkdate(10, 21, 1390); // Return true
    * $obj->checkdate(9, 31, 1390);  // Return false
    *
    * You can force gregorian checkdate if system default is jalali and you
    * need to check based on gregorian date
    * $check = $obj->checkdate(12, 31, 2011, false);
    *
    * @param $month int The month is between 1 and 12 inclusive.
    * @param $day int The day is within the allowed number of days for the given month.
    * @param $year int The year is between 1 and 32767 inclusive.
    * @param $jalali bool (Optional) pass false if you want to input gregorian time
    * @return bool
    */
   public function checkdate($month, $day, $year, $jalali = null) {
       return jDateTime::checkdate($month, $day, $year, $jalali);
   }
    
    /**
    * Gregorian to Shamsi/Jalali Conversion
     * 
    * @param $year int The year is between 1 and 32767 inclusive.
    * @param $month int The month is between 1 and 12 inclusive.
    * @param int The day is within the allowed number of days for the given month.
    * @return array 
    */
   public function toJalali($year, $month, $day) {
       return jDateTime::toJalali($year, $month, $day);
   }
    
    /**
    * Shamsi/Jalali to Gregorian Conversion
    *
    * @param $year int The year is between 1 and 32767 inclusive.
    * @param $month int The month is between 1 and 12 inclusive.
    * @param int The day is within the allowed number of days for the given month.
    * @return array 
    */
   public function toGregorian($year, $month, $day) {
       return jDateTime::toGregorian($year, $month, $day);
   }
}
?>
