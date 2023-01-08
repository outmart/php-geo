<?php

namespace OutMart\GEO\Countries;

use OutMart\GEO\Traits\HasNamesValues;

enum EG: int
{
    use HasNamesValues;

    case Alexandria = 1;
    case Aswan = 2;
    case Asyut = 3;
    case Beheira = 4;
    case Beni_Suef = 5;
    case Cairo = 6;
    case Dakahlia = 7;
    case Damietta = 8;
    case Faiyum = 9;
    case Gharbia = 10;
    case Giza = 11;
    case Ismailia = 12;
    case Kafr_El_Sheikh = 13;
    case Luxor = 14;
    case Matruh = 15;
    case Minya = 16;
    case Monufia = 17;
    case New_Valley = 18;
    case North_Sinai = 19;
    case Port_Said = 20;
    case Qalyubia = 21;
    case Qena = 22;
    case Red_Sea = 23;
    case Sharqia = 24;
    case Sohag = 25;
    case South_Sinai = 26;
    case Suez = 27;

    public static function __callStatic($name, $args)
    {
        $name = strtoupper($name);

        if ($case = array_filter(static::cases(), fn ($item) => $item->name == $name)) {
            return current($case)->value;
        }

        throw new Exception('This city does not exist');
    }

    public static function listById($id = null): string | array
    {
        $cities = array_combine(self::values(), self::names());

        if ($id && isset($cities[$id])) {
            return $cities[$id];
        }

        return $cities;
    }

    public static function listByName($name = null): string | array
    {
        $cities = array_combine(self::names(), self::values());

        if ($name && isset($cities[$name])) {
            return $cities[$name];
        }

        return $cities;
    }
}
