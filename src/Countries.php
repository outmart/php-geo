<?php

namespace OutMart\GEO;

use OutMart\GEO\Traits\HasNamesValues;

enum Countries: string
{
    use HasNamesValues;

    case AF = 'Afghanistan';
    case AX = 'Aland Islands';
    case AL = 'Albania';
    case DZ = 'Algeria';
    case AS = 'American Samoa';
    case AD = 'Andorra';
    case AO = 'Angola';
    case AI = 'Anguilla';
    case AQ = 'Antarctica';
    case AG = 'Antigua And Barbuda';
    case AR = 'Argentina';
    case AM = 'Armenia';
    case AW = 'Aruba';
    case AU = 'Australia';
    case AT = 'Austria';
    case AZ = 'Azerbaijan';
    case BS = 'Bahamas';
    case BH = 'Bahrain';
    case BD = 'Bangladesh';
    case BB = 'Barbados';
    case BY = 'Belarus';
    case BE = 'Belgium';
    case BZ = 'Belize';
    case BJ = 'Benin';
    case BM = 'Bermuda';
    case BT = 'Bhutan';
    case BO = 'Bolivia';
    case BA = 'Bosnia And Herzegovina';
    case BW = 'Botswana';
    case BV = 'Bouvet Island';
    case BR = 'Brazil';
    case IO = 'British Indian Ocean Territory';
    case BN = 'Brunei Darussalam';
    case BG = 'Bulgaria';
    case BF = 'Burkina Faso';
    case BI = 'Burundi';
    case KH = 'Cambodia';
    case CM = 'Cameroon';
    case CA = 'Canada';
    case CV = 'Cape Verde';
    case KY = 'Cayman Islands';
    case CF = 'Central African Republic';
    case TD = 'Chad';
    case CL = 'Chile';
    case CN = 'China';
    case CX = 'Christmas Island';
    case CC = 'Cocos (Keeling) Islands';
    case CO = 'Colombia';
    case KM = 'Comoros';
    case CG = 'Congo';
    case CD = 'Congo, Democratic Republic';
    case CK = 'Cook Islands';
    case CR = 'Costa Rica';
    case CI = 'Cote D"Ivoire';
    case HR = 'Croatia';
    case CU = 'Cuba';
    case CY = 'Cyprus';
    case CZ = 'Czech Republic';
    case DK = 'Denmark';
    case DJ = 'Djibouti';
    case DM = 'Dominica';
    case DO = 'Dominican Republic';
    case EC = 'Ecuador';
    case EG = 'Egypt';
    case SV = 'El Salvador';
    case GQ = 'Equatorial Guinea';
    case ER = 'Eritrea';
    case EE = 'Estonia';
    case ET = 'Ethiopia';
    case FK = 'Falkland Islands (Malvinas)';
    case FO = 'Faroe Islands';
    case FJ = 'Fiji';
    case FI = 'Finland';
    case FR = 'France';
    case GF = 'French Guiana';
    case PF = 'French Polynesia';
    case TF = 'French Southern Territories';
    case GA = 'Gabon';
    case GM = 'Gambia';
    case GE = 'Georgia';
    case DE = 'Germany';
    case GH = 'Ghana';
    case GI = 'Gibraltar';
    case GR = 'Greece';
    case GL = 'Greenland';
    case GD = 'Grenada';
    case GP = 'Guadeloupe';
    case GU = 'Guam';
    case GT = 'Guatemala';
    case GG = 'Guernsey';
    case GN = 'Guinea';
    case GW = 'Guinea-Bissau';
    case GY = 'Guyana';
    case HT = 'Haiti';
    case HM = 'Heard Island & Mcdonald Islands';
    case VA = 'Holy See (Vatican City State)';
    case HN = 'Honduras';
    case HK = 'Hong Kong';
    case HU = 'Hungary';
    case IS = 'Iceland';
    case IN = 'India';
    case ID = 'Indonesia';
    case IR = 'Iran, Islamic Republic Of';
    case IQ = 'Iraq';
    case IE = 'Ireland';
    case IM = 'Isle Of Man';
    case IT = 'Italy';
    case JM = 'Jamaica';
    case JP = 'Japan';
    case JE = 'Jersey';
    case JO = 'Jordan';
    case KZ = 'Kazakhstan';
    case KE = 'Kenya';
    case KI = 'Kiribati';
    case KR = 'Korea';
    case KP = 'North Korea';
    case KW = 'Kuwait';
    case KG = 'Kyrgyzstan';
    case LA = 'Lao People"s Democratic Republic';
    case LV = 'Latvia';
    case LB = 'Lebanon';
    case LS = 'Lesotho';
    case LR = 'Liberia';
    case LY = 'Libyan Arab Jamahiriya';
    case LI = 'Liechtenstein';
    case LT = 'Lithuania';
    case LU = 'Luxembourg';
    case MO = 'Macao';
    case MK = 'Macedonia';
    case MG = 'Madagascar';
    case MW = 'Malawi';
    case MY = 'Malaysia';
    case MV = 'Maldives';
    case ML = 'Mali';
    case MT = 'Malta';
    case MH = 'Marshall Islands';
    case MQ = 'Martinique';
    case MR = 'Mauritania';
    case MU = 'Mauritius';
    case YT = 'Mayotte';
    case MX = 'Mexico';
    case FM = 'Micronesia, Federated States Of';
    case MD = 'Moldova';
    case MC = 'Monaco';
    case MN = 'Mongolia';
    case ME = 'Montenegro';
    case MS = 'Montserrat';
    case MA = 'Morocco';
    case MZ = 'Mozambique';
    case MM = 'Myanmar';
    case NA = 'Namibia';
    case NR = 'Nauru';
    case NP = 'Nepal';
    case NL = 'Netherlands';
    case AN = 'Netherlands Antilles';
    case NC = 'New Caledonia';
    case NZ = 'New Zealand';
    case NI = 'Nicaragua';
    case NE = 'Niger';
    case NG = 'Nigeria';
    case NU = 'Niue';
    case NF = 'Norfolk Island';
    case MP = 'Northern Mariana Islands';
    case NO = 'Norway';
    case OM = 'Oman';
    case PK = 'Pakistan';
    case PW = 'Palau';
    case PS = 'Palestinian Territory, Occupied';
    case PA = 'Panama';
    case PG = 'Papua New Guinea';
    case PY = 'Paraguay';
    case PE = 'Peru';
    case PH = 'Philippines';
    case PN = 'Pitcairn';
    case PL = 'Poland';
    case PT = 'Portugal';
    case PR = 'Puerto Rico';
    case QA = 'Qatar';
    case RE = 'Reunion';
    case RO = 'Romania';
    case RU = 'Russian Federation';
    case RW = 'Rwanda';
    case BL = 'Saint Barthelemy';
    case SH = 'Saint Helena';
    case KN = 'Saint Kitts And Nevis';
    case LC = 'Saint Lucia';
    case MF = 'Saint Martin';
    case PM = 'Saint Pierre And Miquelon';
    case VC = 'Saint Vincent And Grenadines';
    case WS = 'Samoa';
    case SM = 'San Marino';
    case ST = 'Sao Tome And Principe';
    case SA = 'Saudi Arabia';
    case SN = 'Senegal';
    case RS = 'Serbia';
    case SC = 'Seychelles';
    case SL = 'Sierra Leone';
    case SG = 'Singapore';
    case SK = 'Slovakia';
    case SI = 'Slovenia';
    case SB = 'Solomon Islands';
    case SO = 'Somalia';
    case ZA = 'South Africa';
    case GS = 'South Georgia And Sandwich Isl.';
    case ES = 'Spain';
    case LK = 'Sri Lanka';
    case SD = 'Sudan';
    case SR = 'Suriname';
    case SJ = 'Svalbard And Jan Mayen';
    case SZ = 'Swaziland';
    case SE = 'Sweden';
    case CH = 'Switzerland';
    case SY = 'Syrian Arab Republic';
    case TW = 'Taiwan';
    case TJ = 'Tajikistan';
    case TZ = 'Tanzania';
    case TH = 'Thailand';
    case TL = 'Timor-Leste';
    case TG = 'Togo';
    case TK = 'Tokelau';
    case TO = 'Tonga';
    case TT = 'Trinidad And Tobago';
    case TN = 'Tunisia';
    case TR = 'Turkey';
    case TM = 'Turkmenistan';
    case TC = 'Turks And Caicos Islands';
    case TV = 'Tuvalu';
    case UG = 'Uganda';
    case UA = 'Ukraine';
    case AE = 'United Arab Emirates';
    case GB = 'United Kingdom';
    case US = 'United States';
    case UM = 'United States Outlying Islands';
    case UY = 'Uruguay';
    case UZ = 'Uzbekistan';
    case VU = 'Vanuatu';
    case VE = 'Venezuela';
    case VN = 'Vietnam';
    case VG = 'Virgin Islands, British';
    case VI = 'Virgin Islands, U.S.';
    case WF = 'Wallis And Futuna';
    case EH = 'Western Sahara';
    case YE = 'Yemen';
    case ZM = 'Zambia';
    case ZW = 'Zimbabwe';

    public static function __callStatic($name, $args)
    {
        $name = strtoupper($name);

        if ($case = array_filter(static::cases(), fn ($item) => $item->name == $name)) {
            return current($case)->value;
        }

        throw new Exception('This country does not exist');
    }

    public static function listByCode($code = null): string | array
    {
        $countries =  array_combine(self::names(), self::values());

        if ($code && isset($countries[$code])) {
            return $countries[$code];
        }

        return $countries;
    }

    public static function listByName($name = null): string | array
    {
        $countries = array_combine(self::values(), self::names());

        if ($name && isset($countries[$name])) {
            return $countries[$name];
        }

        return $countries;
    }
}
