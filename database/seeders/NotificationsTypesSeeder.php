<?php

namespace Database\Seeders;

use App\Models\NotificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notificationTypes = [
            ['type' => 'account_changes', 'description' => 'Changes made to your account'],
            ['type' => 'new_products', 'description' => 'Information on new products and services'],
            ['type' => 'promo_offers', 'description' => 'Marketing and promo offers'],
            ['type' => 'security_alerts', 'description' => 'Security alerts'],
            // أضف المزيد حسب الحاجة
        ];

        foreach ($notificationTypes as $type) {
            NotificationType::create($type);
        }
    }


}
