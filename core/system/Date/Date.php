<?php

namespace Balon;

    class Date {


        public static function getDate() {
            $month = array(
                1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
                5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
                9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'
            );
            return (date('d ') . $month[(date('n'))] . date(', H:i'));
        }


    }

?>