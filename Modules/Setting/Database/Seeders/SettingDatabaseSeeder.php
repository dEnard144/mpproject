<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Diesel Gabon',
            'company_email' => 'company@test.com',
            'company_phone' => '074 12 34 56',
            'notification_email' => 'notification@test.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'suffix',
            'footer_text' => 'MP MASTER © 2024 || Développé par <strong>DanMAv</strong>',
            'company_address' => 'Libreville, Gabon'
        ]);
    }
}
