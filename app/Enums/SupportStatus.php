<?php
    namespace App\Enums;


    enum SupportStatus: string
    {
        case A = 'Open';
        case B = 'Closed';
        case P = 'Pendent';

        public static function fromValue(string $value):string
        {
                foreach (self::cases() as $status) {
                    if ($value === $status->name) {
                        return $status->value;
                    }
                }
               throw new \ValueError("$status is not a valid");
        }
    }


