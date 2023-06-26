<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $DB = DB::connection(env('DB_CONNECTION_BILLING'));

        $DB->table('countries_v2')->delete();

        $DB->table('countries_v2')->insert(array (
            0 =>
            array (
                'id' => 1,
                'country_name' => 'Afghanistan',
                'alias' => 'AF',
                'east_time' => '+04:30',
                'west_time' => null,
                'status' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'country_name' => 'Aland Islands (Finland)',
                'alias' => 'FI',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            2 =>
            array (
                'id' => 3,
                'country_name' => 'Albania',
                'alias' => 'AL',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            3 =>
            array (
                'id' => 4,
                'country_name' => 'Algeria',
                'alias' => 'DZ',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            4 =>
            array (
                'id' => 5,
            'country_name' => 'American Samoa (USA)',
                'alias' => 'AS',
                'east_time' => '-11:00',
                'west_time' => '',
                'status' => 0,
            ),
            5 =>
            array (
                'id' => 6,
                'country_name' => 'Andorra',
                'alias' => 'AD',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            6 =>
            array (
                'id' => 7,
                'country_name' => 'Angola',
                'alias' => 'AO',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            7 =>
            array (
                'id' => 8,
            'country_name' => 'Anguilla (UK)',
                'alias' => 'AI',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            8 =>
            array (
                'id' => 9,
                'country_name' => 'Antigua and Barbuda',
                'alias' => 'AG',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            9 =>
            array (
                'id' => 10,
                'country_name' => 'Argentina',
                'alias' => 'AR',
                'east_time' => '-03:00',
                'west_time' => '',
                'status' => 0,
            ),
            10 =>
            array (
                'id' => 11,
                'country_name' => 'Armenia',
                'alias' => 'AM',
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            11 =>
            array (
                'id' => 12,
            'country_name' => 'Aruba (Netherlands)',
                'alias' => 'AW',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            12 =>
            array (
                'id' => 13,
            'country_name' => 'Ascension Island (UK)',
                'alias' => null,
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            13 =>
            array (
                'id' => 14,
            'country_name' => 'Australia, Western Australia (WA)',
                'alias' => 'AU',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            14 =>
            array (
                'id' => 15,
            'country_name' => 'Australia, South Australia (SA)',
                'alias' => null,
                'east_time' => '+09:30',
                'west_time' => '+10:30',
                'status' => 0,
            ),
            15 =>
            array (
                'id' => 16,
            'country_name' => 'Australia, Northern Territory (NT)',
                'alias' => null,
                'east_time' => '+09:30',
                'west_time' => '',
                'status' => 0,
            ),
            16 =>
            array (
                'id' => 17,
            'country_name' => 'Australia, New South Wales (NSW), 
            Tasmania (TAS), Victoria (VIC), Australian Capital Ter',
                'alias' => null,
                'east_time' => '+10:00',
                'west_time' => '+11:00',
                'status' => 0,
            ),
            17 =>
            array (
                'id' => 18,
            'country_name' => 'Australia, Queensland (QLD)',
                'alias' => null,
                'east_time' => '+10:00',
                'west_time' => '',
                'status' => 0,
            ),
            18 =>
            array (
                'id' => 19,
            'country_name' => 'Australia, Lord Howe Island (New South Wales)',
                'alias' => null,
                'east_time' => '+10:30',
                'west_time' => '+11:00',
                'status' => 0,
            ),
            19 =>
            array (
                'id' => 20,
            'country_name' => 'Australia, Macquarie Island (Tasmania)',
                'alias' => null,
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            20 =>
            array (
                'id' => 21,
                'country_name' => 'Austria',
                'alias' => 'AT',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            21 =>
            array (
                'id' => 22,
                'country_name' => 'Azerbaijan',
                'alias' => 'AZ',
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            22 =>
            array (
                'id' => 23,
                'country_name' => 'Bahamas',
                'alias' => 'BS',
                'east_time' => '-05:00',
                'west_time' => '-04:00',
                'status' => 0,
            ),
            23 =>
            array (
                'id' => 24,
                'country_name' => 'Bahrain',
                'alias' => 'BH',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 1,
            ),
            24 =>
            array (
                'id' => 25,
                'country_name' => 'Bangladesh',
                'alias' => 'BD',
                'east_time' => '+06:00',
                'west_time' => '',
                'status' => 0,
            ),
            25 =>
            array (
                'id' => 26,
                'country_name' => 'Barbados',
                'alias' => 'BB',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            26 =>
            array (
                'id' => 27,
                'country_name' => 'Belarus',
                'alias' => 'BY',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            27 =>
            array (
                'id' => 28,
                'country_name' => 'Belgium',
                'alias' => 'BE',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            28 =>
            array (
                'id' => 29,
                'country_name' => 'Belize',
                'alias' => 'BZ',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 0,
            ),
            29 =>
            array (
                'id' => 30,
                'country_name' => 'Benin',
                'alias' => 'BJ',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            30 =>
            array (
                'id' => 31,
            'country_name' => 'Bermuda (UK)',
                'alias' => 'BM',
                'east_time' => '-04:00',
                'west_time' => '-03:00',
                'status' => 0,
            ),
            31 =>
            array (
                'id' => 32,
                'country_name' => 'Bhutan',
                'alias' => 'BT',
                'east_time' => '+06:00',
                'west_time' => '',
                'status' => 0,
            ),
            32 =>
            array (
                'id' => 33,
                'country_name' => 'Bolivia',
                'alias' => 'BO',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            33 =>
            array (
                'id' => 34,
            'country_name' => 'Bonaire (Netherlands)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            34 =>
            array (
                'id' => 35,
                'country_name' => 'Bosnia and Herzegovina',
                'alias' => 'BA',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            35 =>
            array (
                'id' => 36,
                'country_name' => 'Botswana',
                'alias' => 'BW',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            36 =>
            array (
                'id' => 37,
                'country_name' => 'Brazil, Acre, Western Amazonas',
                'alias' => 'BR',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            37 =>
            array (
                'id' => 38,
                'country_name' => 'Brazil, Eastern Amazonas, Rondonia, Roraima',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            38 =>
            array (
                'id' => 39,
                'country_name' => 'Brazil, Mato Grosso do Sul, Mato Grosso',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '-03:00',
                'status' => 0,
            ),
            39 =>
            array (
                'id' => 40,
                'country_name' => 'Brazil, Alagoas, Amapa, Maranhao, 
                Para, Piaui, Ceara, Sergipe, Paraiba, Pernambuco, Rio ',
                'alias' => null,
                'east_time' => '-03:00',
                'west_time' => '',
                'status' => 0,
            ),
            40 =>
            array (
                'id' => 41,
                'country_name' => 'Brazil, Distrito Federal, Espirito Santo, 
                Goias, Minas Gerais, Parana, Rio de Janeiro, R',
                'alias' => null,
                'east_time' => '-03:00',
                'west_time' => '-02:00',
                'status' => 0,
            ),
            41 =>
            array (
                'id' => 42,
            'country_name' => 'Brazil, small islands in Atlantic (Fernando de Noronha, Trindade)',
                'alias' => null,
                'east_time' => '-02:00',
                'west_time' => '',
                'status' => 0,
            ),
            42 =>
            array (
                'id' => 43,
            'country_name' => 'British Indian Ocean Territory (UK)',
                'alias' => 'IN',
                'east_time' => '+06:00',
                'west_time' => '',
                'status' => 0,
            ),
            43 =>
            array (
                'id' => 44,
            'country_name' => 'British Virgin Islands (UK)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            44 =>
            array (
                'id' => 45,
                'country_name' => 'Brunei',
                'alias' => 'BN',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            45 =>
            array (
                'id' => 46,
                'country_name' => 'Bulgaria',
                'alias' => 'BG',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            46 =>
            array (
                'id' => 47,
                'country_name' => 'Burkina Faso',
                'alias' => 'BF',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            47 =>
            array (
                'id' => 48,
                'country_name' => 'Burundi',
                'alias' => 'BI',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            48 =>
            array (
                'id' => 49,
                'country_name' => 'Cabo Verde',
                'alias' => null,
                'east_time' => '-01:00',
                'west_time' => '',
                'status' => 0,
            ),
            49 =>
            array (
                'id' => 50,
                'country_name' => 'Cambodia',
                'alias' => 'KH',
                'east_time' => '+07:00',
                'west_time' => '',
                'status' => 0,
            ),
            50 =>
            array (
                'id' => 51,
                'country_name' => 'Cameroon',
                'alias' => 'CM',
                'east_time' => '+01:00',
                'west_time' => null,
                'status' => 1,
            ),
            51 =>
            array (
                'id' => 52,
                'country_name' => 'Canada',
                'alias' => 'CA',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            52 =>
            array (
                'id' => 53,
            'country_name' => 'Caribbean Netherlands (Netherlands)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            53 =>
            array (
                'id' => 54,
            'country_name' => 'Cayman Islands (UK)',
                'alias' => 'KY',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            54 =>
            array (
                'id' => 55,
                'country_name' => 'Central African Republic',
                'alias' => 'CF',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            55 =>
            array (
                'id' => 56,
                'country_name' => 'Chad',
                'alias' => 'TD',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            56 =>
            array (
                'id' => 57,
            'country_name' => 'Chatham Islands (New Zealand)',
                'alias' => 'NZ',
                'east_time' => '+12:45',
                'west_time' => '+13:45',
                'status' => 0,
            ),
            57 =>
            array (
                'id' => 58,
                'country_name' => 'Chile, main territory',
                'alias' => 'CL',
                'east_time' => '-04:00',
                'west_time' => '-03:00',
                'status' => 0,
            ),
            58 =>
            array (
                'id' => 59,
                'country_name' => 'Chile, Easter Island',
                'alias' => null,
                'east_time' => '-06:00',
                'west_time' => '-05:00',
                'status' => 0,
            ),
            59 =>
            array (
                'id' => 60,
                'country_name' => 'China',
                'alias' => 'CN',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            60 =>
            array (
                'id' => 61,
            'country_name' => 'Christmas Island (Australia)',
                'alias' => null,
                'east_time' => '+07:00',
                'west_time' => '',
                'status' => 0,
            ),
            61 =>
            array (
                'id' => 62,
            'country_name' => 'Cocos (Keeling) Islands (Australia)',
                'alias' => null,
                'east_time' => '+06:30',
                'west_time' => '',
                'status' => 0,
            ),
            62 =>
            array (
                'id' => 63,
                'country_name' => 'Colombia',
                'alias' => 'CO',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            63 =>
            array (
                'id' => 64,
                'country_name' => 'Comoros',
                'alias' => 'KM',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            64 =>
            array (
                'id' => 65,
                'country_name' => 'Congo, Republic of the',
                'alias' => null,
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            65 =>
            array (
                'id' => 66,
                'country_name' => 'Congo, Dem. Rep., western part',
                'alias' => null,
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            66 =>
            array (
                'id' => 67,
                'country_name' => 'Congo, Dem. Rep., eastern part',
                'alias' => null,
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            67 =>
            array (
                'id' => 68,
            'country_name' => 'Cook Islands (New Zealand)',
                'alias' => 'CK',
                'east_time' => '-10:00',
                'west_time' => '',
                'status' => 0,
            ),
            68 =>
            array (
                'id' => 69,
                'country_name' => 'Costa Rica',
                'alias' => 'CR',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 0,
            ),
            69 =>
            array (
                'id' => 70,
                'country_name' => 'Cote d\'Ivoire',
                'alias' => 'CI',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            70 =>
            array (
                'id' => 71,
                'country_name' => 'Croatia',
                'alias' => 'HR',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            71 =>
            array (
                'id' => 72,
                'country_name' => 'Cuba',
                'alias' => 'CU',
                'east_time' => '-05:00',
                'west_time' => '-04:00',
                'status' => 0,
            ),
            72 =>
            array (
                'id' => 73,
            'country_name' => 'Curacao (Netherlands)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            73 =>
            array (
                'id' => 74,
                'country_name' => 'Cyprus',
                'alias' => 'CY',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 1,
            ),
            74 =>
            array (
                'id' => 75,
                'country_name' => 'Czech Republic',
                'alias' => 'CZ',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            75 =>
            array (
                'id' => 76,
                'country_name' => 'Denmark',
                'alias' => 'DK',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            76 =>
            array (
                'id' => 77,
                'country_name' => 'Djibouti',
                'alias' => 'DJ',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            77 =>
            array (
                'id' => 78,
                'country_name' => 'Dominica',
                'alias' => 'DM',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            78 =>
            array (
                'id' => 79,
                'country_name' => 'Dominican Republic',
                'alias' => 'DO',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            79 =>
            array (
                'id' => 80,
                'country_name' => 'Ecuador, main territory',
                'alias' => 'EC',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            80 =>
            array (
                'id' => 81,
                'country_name' => 'Ecuador, Galapagos Province',
                'alias' => null,
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            81 =>
            array (
                'id' => 82,
                'country_name' => 'Egypt',
                'alias' => 'EG',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 1,
            ),
            82 =>
            array (
                'id' => 83,
                'country_name' => 'El Salvador',
                'alias' => 'SV',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            83 =>
            array (
                'id' => 84,
                'country_name' => 'Equatorial Guinea',
                'alias' => 'GQ',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 0,
            ),
            84 =>
            array (
                'id' => 85,
                'country_name' => 'Eritrea',
                'alias' => 'ER',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            85 =>
            array (
                'id' => 86,
                'country_name' => 'Estonia',
                'alias' => 'EE',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            86 =>
            array (
                'id' => 87,
                'country_name' => 'Ethiopia',
                'alias' => 'ET',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            87 =>
            array (
                'id' => 88,
            'country_name' => 'Falkland Islands (UK)',
                'alias' => null,
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            88 =>
            array (
                'id' => 89,
            'country_name' => 'Faroe Islands (Denmark)',
                'alias' => 'FO',
                'east_time' => '-03:00',
                'west_time' => '',
                'status' => 0,
            ),
            89 =>
            array (
                'id' => 90,
                'country_name' => 'Fiji',
                'alias' => 'FJ',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            90 =>
            array (
                'id' => 91,
                'country_name' => 'Finland',
                'alias' => 'FI',
                'east_time' => '+12:00',
                'west_time' => '+13:00',
                'status' => 0,
            ),
            91 =>
            array (
                'id' => 92,
                'country_name' => 'France',
                'alias' => 'FR',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            92 =>
            array (
                'id' => 93,
            'country_name' => 'French Guiana (France)',
                'alias' => null,
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            93 =>
            array (
                'id' => 94,
            'country_name' => 'French Polynesia, Tahiti Island (France)',
                'alias' => 'PF',
                'east_time' => '-03:00',
                'west_time' => '',
                'status' => 0,
            ),
            94 =>
            array (
                'id' => 95,
            'country_name' => 'French Polynesia, Marquesas Islands (France)',
                'alias' => null,
                'east_time' => '-10:00',
                'west_time' => '',
                'status' => 0,
            ),
            95 =>
            array (
                'id' => 96,
            'country_name' => 'French Polynesia, Gambier Islands (France)',
                'alias' => null,
                'east_time' => '-09:30',
                'west_time' => '',
                'status' => 0,
            ),
            96 =>
            array (
                'id' => 97,
                'country_name' => 'Gabon',
                'alias' => 'GA',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            97 =>
            array (
                'id' => 98,
                'country_name' => 'Gambia',
                'alias' => 'GM',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            98 =>
            array (
                'id' => 99,
                'country_name' => 'Georgia',
                'alias' => 'GE',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            99 =>
            array (
                'id' => 100,
                'country_name' => 'Germany',
                'alias' => 'DE',
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            100 =>
            array (
                'id' => 101,
                'country_name' => 'Ghana',
                'alias' => 'GH',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            101 =>
            array (
                'id' => 102,
            'country_name' => 'Gibraltar (UK)',
                'alias' => 'GI',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            102 =>
            array (
                'id' => 103,
                'country_name' => 'Greece',
                'alias' => 'GR',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 1,
            ),
            103 =>
            array (
                'id' => 104,
            'country_name' => 'Greenland (Denmark), most of',
                'alias' => 'GL',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            104 =>
            array (
                'id' => 105,
            'country_name' => 'Greenland (Denmark), Thule Air Base',
                'alias' => null,
                'east_time' => '-03:00',
                'west_time' => '-02:00',
                'status' => 0,
            ),
            105 =>
            array (
                'id' => 106,
            'country_name' => 'Greenland (Denmark), Ittoqqortoormiit',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '-03:00',
                'status' => 0,
            ),
            106 =>
            array (
                'id' => 107,
            'country_name' => 'Greenland (Denmark), Danmarkshavn, Station Nord',
                'alias' => null,
                'east_time' => '-01:00',
                'west_time' => '00:00',
                'status' => 0,
            ),
            107 =>
            array (
                'id' => 108,
                'country_name' => 'Grenada',
                'alias' => 'GD',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            108 =>
            array (
                'id' => 109,
            'country_name' => 'Guadeloupe (France)',
                'alias' => 'GP',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            109 =>
            array (
                'id' => 110,
            'country_name' => 'Guam (USA)',
                'alias' => 'GU',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            110 =>
            array (
                'id' => 111,
                'country_name' => 'Guatemala',
                'alias' => 'GT',
                'east_time' => '+10:00',
                'west_time' => '',
                'status' => 0,
            ),
            111 =>
            array (
                'id' => 112,
            'country_name' => 'Guernsey (UK)',
                'alias' => 'GG',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 0,
            ),
            112 =>
            array (
                'id' => 113,
                'country_name' => 'Guinea',
                'alias' => 'GN',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            113 =>
            array (
                'id' => 114,
                'country_name' => 'Guinea-Bissau',
                'alias' => 'GW',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            114 =>
            array (
                'id' => 115,
                'country_name' => 'Guyana',
                'alias' => 'GY',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            115 =>
            array (
                'id' => 116,
                'country_name' => 'Haiti',
                'alias' => 'HT',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            116 =>
            array (
                'id' => 117,
                'country_name' => 'Honduras',
                'alias' => 'HN',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            117 =>
            array (
                'id' => 118,
            'country_name' => 'Hong Kong (China)',
                'alias' => 'HK',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 0,
            ),
            118 =>
            array (
                'id' => 119,
                'country_name' => 'Hungary',
                'alias' => 'HU',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            119 =>
            array (
                'id' => 120,
                'country_name' => 'Iceland',
                'alias' => 'IS',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            120 =>
            array (
                'id' => 121,
                'country_name' => 'India',
                'alias' => 'IN',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            121 =>
            array (
                'id' => 122,
                'country_name' => 'Indonesia, Sumatra Island, Java Island, West Kalimantan, Central Kalimantan',
                'alias' => 'id',
                'east_time' => '+05:30',
                'west_time' => '',
                'status' => 0,
            ),
            122 =>
            array (
                'id' => 123,
                'country_name' => 'Indonesia, Sulawesi Island, Lesser Sunda Islands, 
                North Kalimantan, East Kalimantan, Sou',
                'alias' => null,
                'east_time' => '+07:00',
                'west_time' => '',
                'status' => 0,
            ),
            123 =>
            array (
                'id' => 124,
                'country_name' => 'Indonesia, Maluku Islands, Papua, West Papua',
                'alias' => null,
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            124 =>
            array (
                'id' => 125,
                'country_name' => 'Iran',
                'alias' => 'IR',
                'east_time' => '+09:00',
                'west_time' => '',
                'status' => 0,
            ),
            125 =>
            array (
                'id' => 126,
                'country_name' => 'Iraq',
                'alias' => 'IQ',
                'east_time' => '+03:30',
                'west_time' => '+04:30',
                'status' => 1,
            ),
            126 =>
            array (
                'id' => 127,
                'country_name' => 'Ireland',
                'alias' => 'IE',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            127 =>
            array (
                'id' => 128,
            'country_name' => 'Isle of Man (UK)',
                'alias' => 'IM',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            128 =>
            array (
                'id' => 129,
                'country_name' => 'Israel',
                'alias' => 'IL',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            129 =>
            array (
                'id' => 130,
                'country_name' => 'Italy',
                'alias' => 'IT',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            130 =>
            array (
                'id' => 131,
                'country_name' => 'Jamaica',
                'alias' => 'JM',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            131 =>
            array (
                'id' => 132,
                'country_name' => 'Japan',
                'alias' => 'JP',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            132 =>
            array (
                'id' => 133,
            'country_name' => 'Jersey (UK)',
                'alias' => 'JE',
                'east_time' => '+09:00',
                'west_time' => '',
                'status' => 0,
            ),
            133 =>
            array (
                'id' => 134,
                'country_name' => 'Jordan',
                'alias' => 'JO',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 1,
            ),
            134 =>
            array (
                'id' => 135,
                'country_name' => 'Kazakhstan, western part',
                'alias' => 'KZ',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            135 =>
            array (
                'id' => 136,
                'country_name' => 'Kazakhstan, eastern part',
                'alias' => null,
                'east_time' => '+05:00',
                'west_time' => '',
                'status' => 0,
            ),
            136 =>
            array (
                'id' => 137,
                'country_name' => 'Kenya',
                'alias' => 'KE',
                'east_time' => '+06:00',
                'west_time' => '',
                'status' => 0,
            ),
            137 =>
            array (
                'id' => 138,
            'country_name' => 'Kerguelen Islands (France)',
                'alias' => null,
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            138 =>
            array (
                'id' => 139,
                'country_name' => 'Kiribati, Gilbert Islands',
                'alias' => 'KI',
                'east_time' => '+05:00',
                'west_time' => '',
                'status' => 0,
            ),
            139 =>
            array (
                'id' => 140,
                'country_name' => 'Kiribati, Phoenix Islands',
                'alias' => null,
                'east_time' => '+12:00',
                'west_time' => '',
                'status' => 0,
            ),
            140 =>
            array (
                'id' => 141,
                'country_name' => 'Kiribati, Line Islands',
                'alias' => null,
                'east_time' => '+13:00',
                'west_time' => '',
                'status' => 0,
            ),
            141 =>
            array (
                'id' => 142,
                'country_name' => 'Kosovo',
                'alias' => null,
                'east_time' => '+14:00',
                'west_time' => '',
                'status' => 0,
            ),
            142 =>
            array (
                'id' => 143,
                'country_name' => 'Kuwait',
                'alias' => 'KW',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 1,
            ),
            143 =>
            array (
                'id' => 144,
                'country_name' => 'Kyrgyzstan',
                'alias' => 'KG',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            144 =>
            array (
                'id' => 145,
                'country_name' => 'Laos',
                'alias' => 'LA',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            145 =>
            array (
                'id' => 146,
                'country_name' => 'Latvia',
                'alias' => 'LV',
                'east_time' => '+07:00',
                'west_time' => '',
                'status' => 0,
            ),
            146 =>
            array (
                'id' => 147,
                'country_name' => 'Lebanon',
                'alias' => 'LB',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            147 =>
            array (
                'id' => 148,
                'country_name' => 'Lesotho',
                'alias' => 'LS',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            148 =>
            array (
                'id' => 149,
                'country_name' => 'Liberia',
                'alias' => 'LR',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            149 =>
            array (
                'id' => 150,
                'country_name' => 'Libya',
                'alias' => 'LY',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            150 =>
            array (
                'id' => 151,
                'country_name' => 'Liechtenstein',
                'alias' => 'LI',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            151 =>
            array (
                'id' => 152,
                'country_name' => 'Lithuania',
                'alias' => 'LT',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            152 =>
            array (
                'id' => 153,
                'country_name' => 'Luxembourg',
                'alias' => 'LU',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            153 =>
            array (
                'id' => 154,
            'country_name' => 'Macau (China)',
                'alias' => null,
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            154 =>
            array (
                'id' => 155,
                'country_name' => 'Macedonia',
                'alias' => 'MK',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            155 =>
            array (
                'id' => 156,
                'country_name' => 'Madagascar',
                'alias' => 'MG',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            156 =>
            array (
                'id' => 157,
                'country_name' => 'Malawi',
                'alias' => 'MW',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            157 =>
            array (
                'id' => 158,
                'country_name' => 'Malaysia',
                'alias' => 'MY',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 1,
            ),
            158 =>
            array (
                'id' => 159,
                'country_name' => 'Maldives',
                'alias' => 'MV',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            159 =>
            array (
                'id' => 160,
                'country_name' => 'Mali',
                'alias' => 'ML',
                'east_time' => '+05:00',
                'west_time' => '',
                'status' => 0,
            ),
            160 =>
            array (
                'id' => 161,
                'country_name' => 'Malta',
                'alias' => 'MT',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            161 =>
            array (
                'id' => 162,
                'country_name' => 'Marshall Islands',
                'alias' => 'MH',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            162 =>
            array (
                'id' => 163,
            'country_name' => 'Martinique (France)',
                'alias' => 'MQ',
                'east_time' => '+12:00',
                'west_time' => '',
                'status' => 0,
            ),
            163 =>
            array (
                'id' => 164,
                'country_name' => 'Mauritania',
                'alias' => 'MR',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            164 =>
            array (
                'id' => 165,
                'country_name' => 'Mauritius',
                'alias' => 'MU',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            165 =>
            array (
                'id' => 166,
            'country_name' => 'Mayotte (France)',
                'alias' => null,
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            166 =>
            array (
                'id' => 167,
                'country_name' => 'Mexico, most of',
                'alias' => 'MX',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            167 =>
            array (
                'id' => 168,
                'country_name' => 'Mexico, state of Quintana Roo',
                'alias' => null,
                'east_time' => '-06:00',
                'west_time' => '-05:00',
                'status' => 0,
            ),
            168 =>
            array (
                'id' => 169,
                'country_name' => 'Mexico, states of Baja California Sur, Chihuahua, Nayarit, Sinaloa',
                'alias' => null,
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            169 =>
            array (
                'id' => 170,
                'country_name' => 'Mexico, state of Sonora',
                'alias' => null,
                'east_time' => '-07:00',
                'west_time' => '-06:00',
                'status' => 0,
            ),
            170 =>
            array (
                'id' => 171,
                'country_name' => 'Mexico, state of Baja California',
                'alias' => null,
                'east_time' => '-07:00',
                'west_time' => '',
                'status' => 0,
            ),
            171 =>
            array (
                'id' => 172,
                'country_name' => 'Micronesia, states of Chuuk and Yap',
                'alias' => 'FM',
                'east_time' => '-08:00',
                'west_time' => '-07:00',
                'status' => 0,
            ),
            172 =>
            array (
                'id' => 173,
                'country_name' => 'Micronesia, states of Kosrae and Pohnpei',
                'alias' => null,
                'east_time' => '+10:00',
                'west_time' => '',
                'status' => 0,
            ),
            173 =>
            array (
                'id' => 174,
                'country_name' => 'Moldova',
                'alias' => 'MD',
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            174 =>
            array (
                'id' => 175,
                'country_name' => 'Monaco',
                'alias' => 'MC',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            175 =>
            array (
                'id' => 176,
                'country_name' => 'Mongolia, most of',
                'alias' => 'MN',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            176 =>
            array (
                'id' => 177,
                'country_name' => 'Mongolia, provinces of Khovd, Uvs, Bayan-Olgii',
                'alias' => null,
                'east_time' => '+08:00',
                'west_time' => '+09:00',
                'status' => 0,
            ),
            177 =>
            array (
                'id' => 178,
                'country_name' => 'Montenegro',
                'alias' => 'ME',
                'east_time' => '+07:00',
                'west_time' => '+08:00',
                'status' => 0,
            ),
            178 =>
            array (
                'id' => 179,
            'country_name' => 'Montserrat (UK)',
                'alias' => 'MS',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            179 =>
            array (
                'id' => 180,
                'country_name' => 'Morocco',
                'alias' => 'MA',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            180 =>
            array (
                'id' => 181,
                'country_name' => 'Mozambique',
                'alias' => 'MZ',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            181 =>
            array (
                'id' => 182,
            'country_name' => 'Myanmar (Burma)',
                'alias' => 'MM',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 1,
            ),
            182 =>
            array (
                'id' => 183,
                'country_name' => 'Namibia',
                'alias' => 'NA',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            183 =>
            array (
                'id' => 184,
                'country_name' => 'Nauru',
                'alias' => 'NR',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            184 =>
            array (
                'id' => 185,
                'country_name' => 'Nepal',
                'alias' => 'NP',
                'east_time' => '+12:00',
                'west_time' => '',
                'status' => 0,
            ),
            185 =>
            array (
                'id' => 186,
                'country_name' => 'Netherlands',
                'alias' => null,
                'east_time' => '+05:45',
                'west_time' => '',
                'status' => 0,
            ),
            186 =>
            array (
                'id' => 187,
            'country_name' => 'New Caledonia (France)',
                'alias' => 'NC',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            187 =>
            array (
                'id' => 188,
                'country_name' => 'New Zealand',
                'alias' => null,
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            188 =>
            array (
                'id' => 189,
                'country_name' => 'Nicaragua',
                'alias' => 'NI',
                'east_time' => '+12:00',
                'west_time' => '+13:00',
                'status' => 0,
            ),
            189 =>
            array (
                'id' => 190,
                'country_name' => 'Niger',
                'alias' => 'NE',
                'east_time' => '-06:00',
                'west_time' => '',
                'status' => 0,
            ),
            190 =>
            array (
                'id' => 191,
                'country_name' => 'Nigeria',
                'alias' => 'NG',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            191 =>
            array (
                'id' => 192,
            'country_name' => 'Niue (New Zealand)',
                'alias' => null,
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            192 =>
            array (
                'id' => 193,
            'country_name' => 'Norfolk Island (Australia)',
                'alias' => null,
                'east_time' => '-11:00',
                'west_time' => '',
                'status' => 0,
            ),
            193 =>
            array (
                'id' => 194,
            'country_name' => 'Northern Mariana Islands (USA)',
                'alias' => null,
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            194 =>
            array (
                'id' => 195,
                'country_name' => 'North Korea',
                'alias' => '#N',
                'east_time' => '+10:00',
                'west_time' => '',
                'status' => 0,
            ),
            195 =>
            array (
                'id' => 196,
                'country_name' => 'Norway',
                'alias' => 'NO',
                'east_time' => '+08:30',
                'west_time' => '',
                'status' => 0,
            ),
            196 =>
            array (
                'id' => 197,
                'country_name' => 'Oman',
                'alias' => 'OM',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            197 =>
            array (
                'id' => 198,
                'country_name' => 'Pakistan',
                'alias' => 'PK',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            198 =>
            array (
                'id' => 199,
                'country_name' => 'Palau',
                'alias' => 'PW',
                'east_time' => '+05:00',
                'west_time' => '',
                'status' => 0,
            ),
            199 =>
            array (
                'id' => 200,
                'country_name' => 'Palestine',
                'alias' => 'PS',
                'east_time' => '+03:00',
                'west_time' => '+04:00',
                'status' => 1,
            ),
            200 =>
            array (
                'id' => 201,
                'country_name' => 'Panama',
                'alias' => 'PA',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            201 =>
            array (
                'id' => 202,
                'country_name' => 'Papua New Guinea, most of',
                'alias' => 'PG',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            202 =>
            array (
                'id' => 203,
                'country_name' => 'Papua New Guinea, Bougainville Island',
                'alias' => null,
                'east_time' => '+10:00',
                'west_time' => '',
                'status' => 0,
            ),
            203 =>
            array (
                'id' => 204,
                'country_name' => 'Paraguay',
                'alias' => 'PY',
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            204 =>
            array (
                'id' => 205,
                'country_name' => 'Peru',
                'alias' => 'PE',
                'east_time' => '-04:00',
                'west_time' => '-03:00',
                'status' => 0,
            ),
            205 =>
            array (
                'id' => 206,
                'country_name' => 'Philippines',
                'alias' => 'PH',
                'east_time' => '-05:00',
                'west_time' => '',
                'status' => 0,
            ),
            206 =>
            array (
                'id' => 207,
            'country_name' => 'Pitcairn Islands (UK)',
                'alias' => null,
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            207 =>
            array (
                'id' => 208,
                'country_name' => 'Poland',
                'alias' => 'PL',
                'east_time' => '-08:00',
                'west_time' => '',
                'status' => 0,
            ),
            208 =>
            array (
                'id' => 209,
                'country_name' => 'Portugal, main territory',
                'alias' => 'PT',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            209 =>
            array (
                'id' => 210,
                'country_name' => 'Portugal, Azores',
                'alias' => null,
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            210 =>
            array (
                'id' => 211,
            'country_name' => 'Puerto Rico (USA)',
                'alias' => 'PR',
                'east_time' => '-01:00',
                'west_time' => '00:00',
                'status' => 0,
            ),
            211 =>
            array (
                'id' => 212,
                'country_name' => 'Qatar',
                'alias' => 'QA',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            212 =>
            array (
                'id' => 213,
            'country_name' => 'Reunion (France)',
                'alias' => 'RE',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            213 =>
            array (
                'id' => 214,
                'country_name' => 'Romania',
                'alias' => 'RO',
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            214 =>
            array (
                'id' => 215,
                'country_name' => 'Russia',
                'alias' => 'RU',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 0,
            ),
            215 =>
            array (
                'id' => 216,
                'country_name' => 'Rwanda',
                'alias' => 'RW',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            216 =>
            array (
                'id' => 217,
            'country_name' => 'Saba (Netherlands)',
                'alias' => null,
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            217 =>
            array (
                'id' => 218,
            'country_name' => 'Saint Barthelemy (France)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            218 =>
            array (
                'id' => 219,
            'country_name' => 'Saint Helena (UK)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            219 =>
            array (
                'id' => 220,
                'country_name' => 'Saint Kitts and Nevis',
                'alias' => 'KN',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            220 =>
            array (
                'id' => 221,
                'country_name' => 'Saint Lucia',
                'alias' => 'LC',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            221 =>
            array (
                'id' => 222,
            'country_name' => 'Saint Martin (France)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            222 =>
            array (
                'id' => 223,
            'country_name' => 'Saint Pierre and Miquelon (France)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            223 =>
            array (
                'id' => 224,
                'country_name' => 'Saint Vincent and the Grenadines',
                'alias' => 'VC',
                'east_time' => '-03:00',
                'west_time' => '-02:00',
                'status' => 0,
            ),
            224 =>
            array (
                'id' => 225,
                'country_name' => 'Samoa',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            225 =>
            array (
                'id' => 226,
                'country_name' => 'San Marino',
                'alias' => 'SM',
                'east_time' => '+13:00',
                'west_time' => '+14:00',
                'status' => 0,
            ),
            226 =>
            array (
                'id' => 227,
                'country_name' => 'Sao Tome and Principe',
                'alias' => 'ST',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            227 =>
            array (
                'id' => 228,
                'country_name' => 'Saudi Arabia',
                'alias' => 'SA',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 1,
            ),
            228 =>
            array (
                'id' => 229,
                'country_name' => 'Senegal',
                'alias' => 'SN',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            229 =>
            array (
                'id' => 230,
                'country_name' => 'Serbia',
                'alias' => 'RS',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            230 =>
            array (
                'id' => 231,
                'country_name' => 'Seychelles',
                'alias' => 'SC',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            231 =>
            array (
                'id' => 232,
                'country_name' => 'Sierra Leone',
                'alias' => 'SL',
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            232 =>
            array (
                'id' => 233,
                'country_name' => 'Singapore',
                'alias' => 'SG',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            233 =>
            array (
                'id' => 234,
            'country_name' => 'Sint Eustatius (Netherlands)',
                'alias' => null,
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            234 =>
            array (
                'id' => 235,
            'country_name' => 'Sint Maarten (Netherlands)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            235 =>
            array (
                'id' => 236,
                'country_name' => 'Slovakia',
                'alias' => 'SK',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            236 =>
            array (
                'id' => 237,
                'country_name' => 'Slovenia',
                'alias' => 'SI',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            237 =>
            array (
                'id' => 238,
                'country_name' => 'Solomon Islands',
                'alias' => 'SB',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            238 =>
            array (
                'id' => 239,
                'country_name' => 'Somalia',
                'alias' => 'SO',
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            239 =>
            array (
                'id' => 240,
                'country_name' => 'South Africa',
                'alias' => 'ZA',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            240 =>
            array (
                'id' => 241,
            'country_name' => 'South Georgia Island (UK)',
                'alias' => null,
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            241 =>
            array (
                'id' => 242,
                'country_name' => 'South Korea',
                'alias' => '#N',
                'east_time' => '-02:00',
                'west_time' => '',
                'status' => 0,
            ),
            242 =>
            array (
                'id' => 243,
                'country_name' => 'South Sudan',
                'alias' => 'SD',
                'east_time' => '+09:00',
                'west_time' => '',
                'status' => 0,
            ),
            243 =>
            array (
                'id' => 244,
                'country_name' => 'Spain, main territory',
                'alias' => 'ES',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            244 =>
            array (
                'id' => 245,
                'country_name' => 'Spain, Canary Islands',
                'alias' => null,
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            245 =>
            array (
                'id' => 246,
                'country_name' => 'Sri Lanka',
                'alias' => 'LK',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            246 =>
            array (
                'id' => 247,
                'country_name' => 'Sudan',
                'alias' => null,
                'east_time' => '+05:30',
                'west_time' => '',
                'status' => 0,
            ),
            247 =>
            array (
                'id' => 248,
                'country_name' => 'Suriname',
                'alias' => 'SR',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            248 =>
            array (
                'id' => 249,
            'country_name' => 'Svalbard and Jan Mayen (Norway)',
                'alias' => null,
                'east_time' => '-03:00',
                'west_time' => '',
                'status' => 0,
            ),
            249 =>
            array (
                'id' => 250,
                'country_name' => 'Swaziland',
                'alias' => 'SZ',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            250 =>
            array (
                'id' => 251,
                'country_name' => 'Sweden',
                'alias' => 'SE',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
            251 =>
            array (
                'id' => 252,
                'country_name' => 'Switzerland',
                'alias' => 'CH',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            252 =>
            array (
                'id' => 253,
                'country_name' => 'Syria',
                'alias' => 'SY',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            253 =>
            array (
                'id' => 254,
                'country_name' => 'Taiwan',
                'alias' => 'TW',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            254 =>
            array (
                'id' => 255,
                'country_name' => 'Tajikistan',
                'alias' => 'TJ',
                'east_time' => '+08:00',
                'west_time' => '',
                'status' => 0,
            ),
            255 =>
            array (
                'id' => 256,
                'country_name' => 'Tanzania',
                'alias' => 'TZ',
                'east_time' => '+05:00',
                'west_time' => '',
                'status' => 0,
            ),
            256 =>
            array (
                'id' => 257,
                'country_name' => 'Thailand',
                'alias' => 'TH',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 1,
            ),
            257 =>
            array (
                'id' => 258,
                'country_name' => 'Timor-Leste',
                'alias' => 'TL',
                'east_time' => '+07:00',
                'west_time' => '',
                'status' => 0,
            ),
            258 =>
            array (
                'id' => 259,
                'country_name' => 'Togo',
                'alias' => 'TG',
                'east_time' => '+09:00',
                'west_time' => '',
                'status' => 0,
            ),
            259 =>
            array (
                'id' => 260,
            'country_name' => 'Tokelau (New Zealand)',
                'alias' => null,
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            260 =>
            array (
                'id' => 261,
                'country_name' => 'Tonga',
                'alias' => 'TO',
                'east_time' => '+13:00',
                'west_time' => '',
                'status' => 0,
            ),
            261 =>
            array (
                'id' => 262,
                'country_name' => 'Trinidad and Tobago',
                'alias' => 'TT',
                'east_time' => '+13:00',
                'west_time' => '',
                'status' => 0,
            ),
            262 =>
            array (
                'id' => 263,
            'country_name' => 'Tristan da Cunha (UK)',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            263 =>
            array (
                'id' => 264,
                'country_name' => 'Tunisia',
                'alias' => 'TN',
                'east_time' => '00:00',
                'west_time' => '',
                'status' => 0,
            ),
            264 =>
            array (
                'id' => 265,
                'country_name' => 'Turkey',
                'alias' => 'TR',
                'east_time' => '+01:00',
                'west_time' => '',
                'status' => 0,
            ),
            265 =>
            array (
                'id' => 266,
                'country_name' => 'Turkmenistan',
                'alias' => 'TM',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            266 =>
            array (
                'id' => 267,
            'country_name' => 'Turks and Caicos Islands (UK)',
                'alias' => 'TC',
                'east_time' => '+05:00',
                'west_time' => '',
                'status' => 0,
            ),
            267 =>
            array (
                'id' => 268,
                'country_name' => 'Tuvalu',
                'alias' => 'TV',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            268 =>
            array (
                'id' => 269,
                'country_name' => 'Uganda',
                'alias' => 'UG',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            269 =>
            array (
                'id' => 270,
                'country_name' => 'Ukraine',
                'alias' => 'UA',
                'east_time' => '+03:00',
                'west_time' => '',
                'status' => 0,
            ),
            270 =>
            array (
                'id' => 271,
                'country_name' => 'United Arab Emirates',
                'alias' => 'AE',
                'east_time' => '+02:00',
                'west_time' => '+03:00',
                'status' => 1,
            ),
            271 =>
            array (
                'id' => 272,
                'country_name' => 'United Kingdom',
                'alias' => 'GB',
                'east_time' => '+04:00',
                'west_time' => '',
                'status' => 0,
            ),
            272 =>
            array (
                'id' => 273,
                'country_name' => 'United States of America ??9 time zones',
                'alias' => 'US',
                'east_time' => '00:00',
                'west_time' => '+01:00',
                'status' => 0,
            ),
            273 =>
            array (
                'id' => 274,
                'country_name' => 'Uruguay',
                'alias' => 'UY',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            274 =>
            array (
                'id' => 275,
            'country_name' => 'US Virgin Islands (USA)',
                'alias' => null,
                'east_time' => '-03:00',
                'west_time' => '',
                'status' => 0,
            ),
            275 =>
            array (
                'id' => 276,
                'country_name' => 'Uzbekistan',
                'alias' => 'UZ',
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            276 =>
            array (
                'id' => 277,
                'country_name' => 'Vanuatu',
                'alias' => 'VU',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            277 =>
            array (
                'id' => 278,
            'country_name' => 'Vatican City (Holy See)',
                'alias' => '#N',
                'east_time' => '+11:00',
                'west_time' => '',
                'status' => 0,
            ),
            278 =>
            array (
                'id' => 279,
                'country_name' => 'Venezuela',
                'alias' => 'VE',
                'east_time' => '+01:00',
                'west_time' => '+02:00',
                'status' => 0,
            ),
            279 =>
            array (
                'id' => 280,
                'country_name' => 'Vietnam',
                'alias' => null,
                'east_time' => '-04:00',
                'west_time' => '',
                'status' => 0,
            ),
            280 =>
            array (
                'id' => 281,
            'country_name' => 'Wake Island (USA)',
                'alias' => null,
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            281 =>
            array (
                'id' => 282,
            'country_name' => 'Wallis and Futuna (France)',
                'alias' => null,
                'east_time' => '+12:00',
                'west_time' => '',
                'status' => 0,
            ),
            282 =>
            array (
                'id' => 283,
                'country_name' => 'Yemen',
                'alias' => 'YE',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            283 =>
            array (
                'id' => 284,
                'country_name' => 'Zambia',
                'alias' => 'ZM',
                'east_time' => '',
                'west_time' => '',
                'status' => 0,
            ),
            284 =>
            array (
                'id' => 285,
                'country_name' => 'Zimbabwe',
                'alias' => 'ZW',
                'east_time' => '+02:00',
                'west_time' => '',
                'status' => 0,
            ),
        ));
    }
}
