<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    private $wilayas = [
        [
            'id' => '1',
            'name' => 'Adrar',
            'ar_name' => 'أدرار',
        ],
        [
            'id' => '2',
            'name' => 'Chlef',
            'ar_name' => 'الشلف',
        ],
        [
            'id' => '3',
            'name' => 'Laghouat',
            'ar_name' => 'الأغواط',
        ],
        [
            'id' => '4',
            'name' => 'Oum El Bouaghi',
            'ar_name' => 'أم البواقي',
        ],
        [
            'id' => '5',
            'name' => 'Batna',
            'ar_name' => 'باتنة',
        ],
        [
            'id' => '6',
            'name' => 'Béjaïa',
            'ar_name' => 'بجاية',
        ],
        [
            'id' => '7',
            'name' => 'Biskra',
            'ar_name' => 'بسكرة',
        ],
        [
            'id' => '8',
            'name' => 'Bechar',
            'ar_name' => 'بشار',
        ],
        [
            'id' => '9',
            'name' => 'Blida',
            'ar_name' => 'البليدة',
        ],
        [
            'id' => '10',
            'name' => 'Bouira',
            'ar_name' => 'البويرة',
        ],
        [
            'id' => '11',
            'name' => 'Tamanrasset',
            'ar_name' => 'تمنراست',
        ],
        [
            'id' => '12',
            'name' => 'Tbessa',
            'ar_name' => 'تبسة',
        ],
        [
            'id' => '13',
            'name' => 'Tlemcen',
            'ar_name' => 'تلمسان',
        ],
        [
            'id' => '14',
            'name' => 'Tiaret',
            'ar_name' => 'تيارت',
        ],
        [
            'id' => '15',
            'name' => 'Tizi Ouzou',
            'ar_name' => 'تيزي وزو',
        ],
        [
            'id' => '16',
            'name' => 'Alger',
            'ar_name' => 'الجزائر',
        ],
        [
            'id' => '17',
            'name' => 'Djelfa',
            'ar_name' => 'الجلفة',
        ],
        [
            'id' => '18',
            'name' => 'Jijel',
            'ar_name' => 'جيجل',
        ],
        [
            'id' => '19',
            'name' => 'Setif',
            'ar_name' => 'سطيف',
        ],
        [
            'id' => '20',
            'name' => 'Saeda',
            'ar_name' => 'سعيدة',
        ],
        [
            'id' => '21',
            'name' => 'Skikda',
            'ar_name' => 'سكيكدة',
        ],
        [
            'id' => '22',
            'name' => 'Sidi Bel Abbes',
            'ar_name' => 'سيدي بلعباس',
        ],
        [
            'id' => '23',
            'name' => 'Annaba',
            'ar_name' => 'عنابة',
        ],
        [
            'id' => '24',
            'name' => 'Guelma',
            'ar_name' => 'قالمة',
        ],
        [
            'id' => '25',
            'name' => 'Constantine',
            'ar_name' => 'قسنطينة',
        ],
        [
            'id' => '26',
            'name' => 'Medea',
            'ar_name' => 'المدية',
        ],
        [
            'id' => '27',
            'name' => 'Mostaganem',
            'ar_name' => 'مستغانم',
        ],
        [
            'id' => '28',
            'name' => "M'Sila",
            'ar_name' => 'المسيلة',
        ],
        [
            'id' => '29',
            'name' => 'Mascara',
            'ar_name' => 'معسكر',
        ],
        [
            'id' => '30',
            'name' => 'Ouargla',
            'ar_name' => 'ورقلة',
        ],
        [
            'id' => '31',
            'name' => 'Oran',
            'ar_name' => 'وهران',
        ],
        [
            'id' => '32',
            'name' => 'El Bayadh',
            'ar_name' => 'البيض',
        ],
        [
            'id' => '33',
            'name' => 'Illizi',
            'ar_name' => 'إليزي',
        ],
        [
            'id' => '34',
            'name' => 'Bordj Bou Arreridj',
            'ar_name' => 'برج بوعريريج',
        ],
        [
            'id' => '35',
            'name' => 'Boumerdes',
            'ar_name' => 'بومرداس',
        ],
        [
            'id' => '36',
            'name' => 'El Tarf',
            'ar_name' => 'الطارف',
        ],
        [
            'id' => '37',
            'name' => 'Tindouf',
            'ar_name' => 'تندوف',
        ],
        [
            'id' => '38',
            'name' => 'Tissemsilt',
            'ar_name' => 'تيسمسيلت',
        ],
        [
            'id' => '39',
            'name' => 'El Oued',
            'ar_name' => 'الوادي',
        ],
        [
            'id' => '40',
            'name' => 'Khenchela',
            'ar_name' => 'خنشلة',
        ],
        [
            'id' => '41',
            'name' => 'Souk Ahras',
            'ar_name' => 'سوق أهراس',
        ],
        [
            'id' => '42',
            'name' => 'Tipaza',
            'ar_name' => 'تيبازة',
        ],
        [
            'id' => '43',
            'name' => 'Mila',
            'ar_name' => 'ميلة',
        ],
        [
            'id' => '44',
            'name' => 'Ain Defla',
            'ar_name' => 'عين الدفلى',
        ],
        [
            'id' => '45',
            'name' => 'Naama',
            'ar_name' => 'النعامة',
        ],
        [
            'id' => '46',
            'name' => 'Ain Temouchent',
            'ar_name' => 'عين تموشنت',
        ],
        [
            'id' => '47',
            'name' => 'Ghardaefa',
            'ar_name' => 'غرداية',
        ],
        [
            'id' => '48',
            'name' => 'Relizane',
            'ar_name' => 'غليزان',
        ],
        [
            'id' => '49',
            'name' => "El M'ghair",
            'ar_name' => 'المغير',
        ],
        [
            'id' => '50',
            'name' => 'El Menia',
            'ar_name' => 'المنيعة',
        ],
        [
            'id' => '51',
            'name' => 'Ouled Djellal',
            'ar_name' => 'أولاد جلال',
        ],
        [
            'id' => '52',
            'name' => 'Bordj Baji Mokhtar',
            'ar_name' => 'برج باجي مختار',
        ],
        [
            'id' => '53',
            'name' => 'Béni Abbès',
            'ar_name' => 'بني عباس',
        ],
        [
            'id' => '54',
            'name' => 'Timimoun',
            'ar_name' => 'تيميمون',
        ],
        [
            'id' => '55',
            'name' => 'Touggourt',
            'ar_name' => 'تقرت',
        ],
        [
            'id' => '56',
            'name' => 'Djanet',
            'ar_name' => 'جانت',
        ],
        [
            'id' => '57',
            'name' => 'In Salah',
            'ar_name' => 'عين صالح',
        ],
        [
            'id' => '58',
            'name' => 'In Guezzam',
            'ar_name' => 'عين قزام',
        ],
    ];

    public function run()
    {
        DB::table('wilayas')->insert($this->wilayas);
    }
}
