<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'app.shop_name',
                'value' => 'Shop Name',
                'type' => 'string'
            ],
            [
                'key' => 'app.shop_logo',
                'value' => '16838828281.jpg',
                'type' => 'string'
            ],
            [
                'key' => 'app.shop_banner',
                'value' => '1683882274.jpg',
                'type' => 'string'
            ],
            [
                'key' => 'app.shop_currency',
                'value' => 'euro',
                'type' => 'string'
            ]
        ];
        if(!empty($settings)){
            foreach($settings as $setting){
                $settingRow = Setting::where([
                    'key' => $setting['key'],
                ])->first();
                if(!empty($settingRow)){
                    $settingRow->value = $setting['value'];
                    $settingRow->type = $setting['type'];
                } else {
                    Setting::create($setting);
                }
            }
        }
    }
}
