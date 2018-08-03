<?php
/**
 * Created by PhpStorm.
 * User: wunder
 * Date: 3.8.2018
 * Time: 23:40
 */

namespace App\myFunctions;


class Month
{
    public function currentMonth()
    {
        return date('m', strtotime('first day of current month'));
    }

    public function previousMonth()
    {
        return date('m', strtotime('first day of last month'));
    }

    public function nextMonth()
    {
        return date('m', strtotime('first day of next month'));
    }
}
