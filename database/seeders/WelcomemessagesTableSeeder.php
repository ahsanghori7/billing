<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WelcomemessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages_template')->delete();
        
        \DB::table('messages_template')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => 'شكرا لاشتراكك في الخدمة',
                'free_text' => NULL,
                'subservice_id' => 1,
                'shortcode' => '6949',
                'type' => 8,
            ),
            1 => 
            array (
                'id' => 4,
                'text' => 'ΣYΓXAPHTHPIA ΓIA THN EΓΓPAΦH ΣTO ELLA XP.€2,08/MNM,3MNM/EBΔ ΠEPIΣ.ΠΛHP: https://goo.gl/a5eCQW ΔIAΓPAΦH STOP ΣTO 54850 THΛ 2117800019 VEOO',
                'free_text' => NULL,
                'subservice_id' => 7,
                'shortcode' => '54970',
                'type' => 0,
            ),
            2 => 
            array (
                'id' => 5,
                'text' => 'ΣYΓXAPHTHPIA ΓIA THN EΓΓPAΦH ΣTO ELLA XP.€2,08/MNM,3MNM/EBΔ ΠEPIΣ.ΠΛHP: https://goo.gl/a5eCQW ΔIAΓPAΦH STOP ΣTO 54850 THΛ 2117800019 VEOO',
                'free_text' => NULL,
                'subservice_id' => 8,
                'shortcode' => '54970',
                'type' => 0,
            ),
            3 => 
            array (
                'id' => 6,
                'text' => 'ΣYΓXAPHTHPIA ΓIA THN EΓΓPAΦH ΣTO ELLA XP.€2,08/MNM,3MNM/EBΔ ΠEPIΣ.ΠΛHP: https://goo.gl/a5eCQW ΔIAΓPAΦH STOP ΣTO 54850 THΛ 2117800019 VEOO',
                'free_text' => NULL,
                'subservice_id' => 9,
                'shortcode' => '54970',
                'type' => 0,
            ),
            4 => 
            array (
                'id' => 8,
                'text' => 'شكراً لاشتراكك في الخدمة',
                'free_text' => NULL,
                'subservice_id' => 22,
                'shortcode' => '4977',
                'type' => 8,
            ),
            5 => 
            array (
                'id' => 11,
                'text' => 'شكراً لاشتراكك بخدمة رمضان سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2532 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 51,
                'shortcode' => '2532',
                'type' => 8,
            ),
            6 => 
            array (
                'id' => 14,
                'text' => 'شكراً لاشتراكك بخدمة ديكور سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2535 سعر الرسالة 500 د.ع',
                'free_text' => NULL,
                'subservice_id' => 54,
                'shortcode' => '2535',
                'type' => 8,
            ),
            7 => 
            array (
                'id' => 15,
                'text' => 'لقد تم إشتراكك في خدمة جمال، للالغاء أرسل 0 مجانا الى 2544',
                'free_text' => 'عزيزي المشترك، لقد تم إشتراكك في خدمة جمال للمشتركين الجدد أول ثلاث أيام مجانا، بعد إنتهاء المدة المجانية سيتم إستقطاع 1200 د.ع للرسالة الواحدة، لإلغاء الاشتراك أرسل 0 مجانا الى 2544',
                'subservice_id' => 55,
                'shortcode' => '2544',
                'type' => 8,
            ),
            8 => 
            array (
                'id' => 16,
                'text' => 'لقد تم إشتراكك في خدمة اصدقاء، للالغاء أرسل 0 مجانا الى 2545',
                'free_text' => 'عزيزي المشترك، لقد تم إشتراكك في خدمة اصدقاء للمشتركين الجدد أول ثلاث أيام مجانا، بعد إنتهاء المدة المجانية سيتم إستقطاع 1200 د.ع للرسالة الواحدة، لإلغاء الاشتراك أرسل 0 مجانا الى 2545',
                'subservice_id' => 56,
                'shortcode' => '2545',
                'type' => 8,
            ),
            9 => 
            array (
                'id' => 22,
                'text' => 'شكراً لاشتراكك بخدمة ضحك سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 4333 سعر الرسالة 240 د.ع',
                'free_text' => NULL,
                'subservice_id' => 64,
                'shortcode' => '4333',
                'type' => 8,
            ),
            10 => 
            array (
                'id' => 25,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 76,
                'shortcode' => '2652',
                'type' => 8,
            ),
            11 => 
            array (
                'id' => 26,
                'text' => 'ΣYΓXAPHTHPIA ΓIA THN EΓΓPAΦH ΣTHN YΠHPEΣIA ELLA XP. €2.03/MNM, 3MNM/EBΔ. ΔIAΓPAΦH ME OFF ELLA ΣTO 7172 THΛ. EΞYΠ 25333462 VEOO',
                'free_text' => NULL,
                'subservice_id' => 5,
                'shortcode' => '7172',
                'type' => 0,
            ),
            12 => 
            array (
                'id' => 27,
                'text' => 'ΣYΓXAPHTHPIA ΓIA THN EΓΓPAΦH ΣTHN YΠHPEΣIA ELLA XP. €2.03/MNM, 3MNM/EBΔ. ΔIAΓPAΦH ME OFF ELLA ΣTO 7172 THΛ. EΞYΠ 25333462 VEOO',
                'free_text' => NULL,
                'subservice_id' => 6,
                'shortcode' => '7172',
                'type' => 0,
            ),
            13 => 
            array (
                'id' => 28,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 70,
                'shortcode' => '2652',
                'type' => 8,
            ),
            14 => 
            array (
                'id' => 29,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 21,
                'shortcode' => '2652',
                'type' => 8,
            ),
            15 => 
            array (
                'id' => 30,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 25,
                'shortcode' => '2652',
                'type' => 8,
            ),
            16 => 
            array (
                'id' => 31,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 71,
                'shortcode' => '2652',
                'type' => 8,
            ),
            17 => 
            array (
                'id' => 32,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 72,
                'shortcode' => '2652',
                'type' => 8,
            ),
            18 => 
            array (
                'id' => 33,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 73,
                'shortcode' => '2652',
                'type' => 8,
            ),
            19 => 
            array (
                'id' => 34,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 74,
                'shortcode' => '2652',
                'type' => 8,
            ),
            20 => 
            array (
                'id' => 35,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 75,
                'shortcode' => '2652',
                'type' => 8,
            ),
            21 => 
            array (
                'id' => 36,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 77,
                'shortcode' => '2652',
                'type' => 8,
            ),
            22 => 
            array (
                'id' => 37,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 78,
                'shortcode' => '2652',
                'type' => 8,
            ),
            23 => 
            array (
                'id' => 38,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 79,
                'shortcode' => '2652',
                'type' => 8,
            ),
            24 => 
            array (
                'id' => 39,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 80,
                'shortcode' => '2652',
                'type' => 8,
            ),
            25 => 
            array (
                'id' => 40,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 81,
                'shortcode' => '2652',
                'type' => 8,
            ),
            26 => 
            array (
                'id' => 41,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 82,
                'shortcode' => '2652',
                'type' => 8,
            ),
            27 => 
            array (
                'id' => 42,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 83,
                'shortcode' => '2652',
                'type' => 8,
            ),
            28 => 
            array (
                'id' => 43,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 94,
                'shortcode' => '2652',
                'type' => 8,
            ),
            29 => 
            array (
                'id' => 44,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 95,
                'shortcode' => '2652',
                'type' => 8,
            ),
            30 => 
            array (
                'id' => 45,
                'text' => 'Welcome to Estafed, you will enjoy our couponing offers daily. To view your account please login on http://uae.estafed.com/',
                'free_text' => NULL,
                'subservice_id' => 96,
                'shortcode' => '1111',
                'type' => 0,
            ),
            31 => 
            array (
                'id' => 46,
                'text' => 'شكراً لاشتراكك بخدمة وفر مالك سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2558 سعر الرسالة 1200 د.ع ',
                'free_text' => NULL,
                'subservice_id' => 62,
                'shortcode' => '2558',
                'type' => 8,
            ),
            32 => 
            array (
                'id' => 47,
                'text' => 'شكراً لاشتراكك بخدمة وفر عملي سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 4347 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 65,
                'shortcode' => '4347',
                'type' => 8,
            ),
            33 => 
            array (
                'id' => 48,
                'text' => 'شكراً لاشتراكك بخدمة سفري سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 4974 سعر الرسالة 300 د.ع',
                'free_text' => NULL,
                'subservice_id' => 66,
                'shortcode' => '4974',
                'type' => 8,
            ),
            34 => 
            array (
                'id' => 49,
                'text' => 'Welcome to Line Tips, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/hjd0ez',
                'free_text' => 'Welcome to Line Tips, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/hjd0ez',
                'subservice_id' => 14,
                'shortcode' => '1111',
                'type' => 0,
            ),
            35 => 
            array (
                'id' => 51,
                'text' => 'You have successfully subscribed to Tasalla at AED 9.45 VAT inclusive / weekly. To unsubscribe, Send UNSUB Tasalla to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital who manages this service. To access Tasalla click on the following link : http://4ty.me/njfa5n.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 109,
                'shortcode' => '9480',
                'type' => 0,
            ),
            36 => 
            array (
                'id' => 52,
                'text' => 'You have successfully subscribed to Line Magazine at AED 9.45 VAT inclusive / weekly. To unsubscribe, Send UNSUB LineM to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital who manages this service. To access Line Magazine click on the following link : http://4ty.me/tv2n5f.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 110,
                'shortcode' => '9480',
                'type' => 0,
            ),
            37 => 
            array (
                'id' => 53,
                'text' => 'You have successfully subscribed to Line Videos at AED 9.45 VAT inclusive / weekly. To unsubscribe, Send UNSUB LineV to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital who manages this service.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 111,
                'shortcode' => '9480',
                'type' => 0,
            ),
            38 => 
            array (
                'id' => 54,
                'text' => 'You have successfully subscribed to Line Tips at AED 1.05 VAT inclusive / Day. To unsubscribe, Send UNSUB LineT to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital who manages this service. To access Line Tips click on the following link : http://4ty.me/6mjmdm.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 112,
                'shortcode' => '9480',
                'type' => 0,
            ),
            39 => 
            array (
                'id' => 55,
                'text' => 'You have successfully subscribed to Line Visuals at AED 1.05 VAT inclusive / Day. To unsubscribe, Send UNSUB LineP to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital who manages this service. You will receive daily tips on your mobile from Line as SMS.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 113,
                'shortcode' => '9480',
                'type' => 0,
            ),
            40 => 
            array (
                'id' => 56,
                'text' => 'You have successfully subscribed to Estafed at 9.45 VAT inclusive / Week To unsubscribe, Send UNSUB EST to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital who manages this service. To access Estafed click on the following link : http://4ty.me/xro49p.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 114,
                'shortcode' => '9480',
                'type' => 0,
            ),
            41 => 
            array (
                'id' => 57,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 26,
                'shortcode' => '2652',
                'type' => 8,
            ),
            42 => 
            array (
                'id' => 58,
                'text' => 'شكراً لاشتراكك بالخدمة سوف تحصل على معلومات قيّمة يومياً. للإلغاء أرسل 0 إلى 2652 سعر الرسالة 1200 د.ع',
                'free_text' => NULL,
                'subservice_id' => 116,
                'shortcode' => '2652',
                'type' => 8,
            ),
            43 => 
            array (
                'id' => 59,
                'text' => 'Dear Customer. Thank you for subscribing to Line Tips. Subscription charge is 0.66 SR per day. To unsubscribe at any time send U55 to 600222',
                'free_text' => NULL,
                'subservice_id' => 158,
                'shortcode' => '600222',
                'type' => 0,
            ),
            44 => 
            array (
                'id' => 69,
                'text' => 'لقد قمت بالإشتراك في خدمة زفافي, لإلغاء الإشتراك، أرسل 0 مجانا الى 2536',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة زفافي,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2536',
                'subservice_id' => 50,
                'shortcode' => '2530',
                'type' => 8,
            ),
            45 => 
            array (
                'id' => 70,
                'text' => 'لقد قمت بالإشتراك في خدمة صحتي, لإلغاء الإشتراك، أرسل 0 مجانا الى 2532',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة صحتي,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2532',
                'subservice_id' => 23,
                'shortcode' => '2531',
                'type' => 8,
            ),
            46 => 
            array (
                'id' => 71,
                'text' => 'لقد قمت بالإشتراك في خدمة امي وانا لإلغاء الإشتراك، أرسل 0 مجانا الى 2534',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة امي وانا,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2534',
                'subservice_id' => 52,
                'shortcode' => '2533',
                'type' => 8,
            ),
            47 => 
            array (
                'id' => 73,
                'text' => 'لقد تم إشتراكك في خدمة الطبخ، للالغاء أرسل 0 مجانا الى 2547',
                'free_text' => 'عزيزي المشترك،  لقد قمت بالإشتراك في خدمة الطبخ، أول ثلاث أيام مجانا، بعد إنتهاء المدة المجانية سيتم إستقطاع 1200 د.ع للرسالة الواحدة، لإلغاء الاشتراك أرسل 0 مجانا الى 2547',
                'subservice_id' => 57,
                'shortcode' => '2547',
                'type' => 8,
            ),
            48 => 
            array (
                'id' => 74,
                'text' => 'لقد قمت بالإشتراك في خدمة معلومات عامة لإلغاء الإشتراك، أرسل 0 مجانا الى 2553',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة معلومات عامة,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2553',
                'subservice_id' => 58,
                'shortcode' => '2552',
                'type' => 8,
            ),
            49 => 
            array (
                'id' => 75,
                'text' => 'لقد قمت بالإشتراك في خدمة الابراج, لإلغاء الإشتراك، أرسل 0 مجانا الى 2554',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة الابراج,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2554',
                'subservice_id' => 59,
                'shortcode' => '2555',
                'type' => 8,
            ),
            50 => 
            array (
                'id' => 76,
                'text' => 'لقد قمت بالإشتراك في خدمة جمال، لإلغاء الإشتراك، أرسل 0 مجانا الى 2556',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة جمال،
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2556',
                'subservice_id' => 61,
                'shortcode' => '2557',
                'type' => 8,
            ),
            51 => 
            array (
                'id' => 77,
                'text' => 'لقد قمت بالإشتراك في خدمة أصدقاء, لإلغاء الإشتراك، أرسل 0 مجانا الى 4331',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة أصدقاء,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 4331',
                'subservice_id' => 63,
                'shortcode' => '4330',
                'type' => 8,
            ),
            52 => 
            array (
                'id' => 78,
                'text' => 'لقد قمت بالإشتراك في خدمة حبيبي وأنا لإلغاء الإشتراك، أرسل 0 مجانا الى 4977',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة حبيبي وأنا،
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 4977',
                'subservice_id' => 67,
                'shortcode' => '4976',
                'type' => 8,
            ),
            53 => 
            array (
                'id' => 79,
                'text' => 'لقد قمت بالإشتراك في خدمة امي وانا لإلغاء الإشتراك، أرسل 0 مجانا الى 2534',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة امي وانا,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2534',
                'subservice_id' => 53,
                'shortcode' => '2533',
                'type' => 8,
            ),
            54 => 
            array (
                'id' => 80,
                'text' => 'لقد تم إشتراكك في خدمة تسلى، للالغاء أرسل 0 مجانا الى 2540',
                'free_text' => 'عزيزي المشترك،  لقد قمت بالإشتراك في خدمة تسلى، أول ثلاث أيام مجانا، بعد إنتهاء المدة المجانية سيتم إستقطاع 450 د.ع للرسالة الواحدة، لإلغاء الاشتراك أرسل 0 مجانا الى 2540',
                'subservice_id' => 151,
                'shortcode' => '2540',
                'type' => 8,
            ),
            55 => 
            array (
                'id' => 81,
                'text' => 'لقد قمت بالإشتراك في خدمة معلومات عامة لإلغاء الإشتراك، أرسل 0 مجانا الى 2553',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة معلومات عامة,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2553',
                'subservice_id' => 106,
                'shortcode' => '2552',
                'type' => 8,
            ),
            56 => 
            array (
                'id' => 82,
                'text' => 'لقد قمت بالإشتراك في خدمة الابراج, لإلغاء الإشتراك، أرسل 0 مجانا الى 2554',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة الابراج,
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 2554',
                'subservice_id' => 60,
                'shortcode' => '2555',
                'type' => 8,
            ),
            57 => 
            array (
                'id' => 83,
                'text' => 'لقد قمت بالإشتراك في خدمة حبيبي وأنا لإلغاء الإشتراك، أرسل 0 مجانا الى 4977',
                'free_text' => 'عزيزي المشترك، لقد قمت بالإشتراك في خدمة حبيبي وأنا،
أول 3 أيام مجاناً! بعد إنتهاء المدة المجانية، سيتم إستقطاع 1200 د.ع للرسالة الواحدة. لإلغاء الإشتراك، أرسل 0 مجاناً إلى 4977',
                'subservice_id' => 68,
                'shortcode' => '4976',
                'type' => 8,
            ),
            58 => 
            array (
                'id' => 84,
                'text' => 'You have successfully subscribed to Golden Steps service at AED 12.6 VAT inclusive / Weekly. To unsubscribe, Send Unsub Gols to 9480. By subscribing to the service, you are accepting all Terms & Conditions of the service & authorize du to share your mobile number with Absolutely Digital, who manages this service.
Subscription will be auto renewed',
                'free_text' => NULL,
                'subservice_id' => 160,
                'shortcode' => '9480',
                'type' => 0,
            ),
            59 => 
            array (
                'id' => 85,
                'text' => 'Welcome to Line Tips, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/linetips',
                'free_text' => 'Welcome to Line Tips, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/linetips',
                'subservice_id' => 165,
                'shortcode' => '94451',
                'type' => 0,
            ),
            60 => 
            array (
                'id' => 86,
            'text' => 'Dear Customer. Thank you for subscribing to Octothink Daily. Subscription charge is AED 2.25 per day (VAT Inclusive) after 1 day promotion period is over. To unsubscribe at any time, send C OCTO to 1111. Free trial applicable only for first time subscriber.',
                'free_text' => NULL,
                'subservice_id' => 162,
                'shortcode' => '1111',
                'type' => 0,
            ),
            61 => 
            array (
                'id' => 87,
                'text' => 'Welcome to Estafed, you will enjoy our couponing offers daily. To view your account please login on http://uae.estafed.com/',
                'free_text' => NULL,
                'subservice_id' => 180,
                'shortcode' => '1111',
                'type' => 0,
            ),
            62 => 
            array (
                'id' => 88,
                'text' => 'Welcome to Line Tips, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/linetips',
                'free_text' => NULL,
                'subservice_id' => 157,
                'shortcode' => '801847',
                'type' => 0,
            ),
            63 => 
            array (
                'id' => 89,
                'text' => 'Welcome to Line Visuals, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/hjd0ez',
                'free_text' => 'Welcome to Line Visuals, you will enjoy our daily tips in various categories! To view your account please login on http://4ty.me/hjd0ez',
                'subservice_id' => 11,
                'shortcode' => '1111',
                'type' => 0,
            ),
            64 => 
            array (
                'id' => 90,
                'text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'subservice_id' => 264,
                'shortcode' => '7785',
                'type' => 0,
            ),
            65 => 
            array (
                'id' => 91,
                'text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'subservice_id' => 265,
                'shortcode' => '7786',
                'type' => 0,
            ),
            66 => 
            array (
                'id' => 92,
                'text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'subservice_id' => 266,
                'shortcode' => '7810',
                'type' => 0,
            ),
            67 => 
            array (
                'id' => 93,
                'text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'subservice_id' => 267,
                'shortcode' => '4036',
                'type' => 0,
            ),
            68 => 
            array (
                'id' => 94,
                'text' => 'Welcome to Octothink, click on the link http://4ty.me/ua269 to download the app, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Octothink, click on the link http://4ty.me/ua269 to download the app, your credentials are username: [username] password: [password]',
                'subservice_id' => 272,
                'shortcode' => '608060',
                'type' => 0,
            ),
            69 => 
            array (
                'id' => 95,
                'text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'subservice_id' => 269,
                'shortcode' => '92876',
                'type' => 0,
            ),
            70 => 
            array (
                'id' => 96,
                'text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'free_text' => 'Welcome to Line Tips, click on the link http://4ty.me/ezj0ar to access the content, your credentials are username: [username] password: [password]',
                'subservice_id' => 270,
                'shortcode' => '92981',
                'type' => 0,
            ),
        ));
        
        
    }
}