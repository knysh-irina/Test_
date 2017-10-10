<?php

class Factory
{
    /*
     * @params string $firstDate, $secondDate
     */
    public function createDiff($firstDate, $secondDate)
    {
        $firstDateArr = explode("-", $firstDate);
        $secondDateArr = explode("-", $secondDate);

        $years = $firstDateArr[0] - $secondDateArr[0];
        $month = $firstDateArr[1] - $secondDateArr[1];
        $days = $firstDateArr[2] - $secondDateArr[2];
        $total_days = $years * 365 + $month * 31 + $days;
        $invert = ($total_days > 0) ? true : false;

        return (object)[
            'years' => abs($years),
            'months' => abs($month),
            'days' => abs($days),
            'total_days' => abs($total_days),
            'invert' => $invert
        ];
    }
}

$factory = new Factory();
$result = $factory->createDiff("2000-04-08", "2015-06-02");
var_dump($result);

