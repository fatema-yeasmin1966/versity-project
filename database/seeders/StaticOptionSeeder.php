<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        set_static_option('no_image', 'uploads/images/setting/no-image.png');
        set_static_option('fav_icon', null);
        set_static_option('frontend_logo', null);
        set_static_option('backend_logo', null);
        set_static_option('backend_light_logo', null);
        set_static_option('backend_text_logo', null);
        set_static_option('backend_text_light_logo', null);
        set_static_option('breadcrumb_image', null);

        set_static_option('company_email', 'company@gmail.com');
        set_static_option('company_phone', '01234567890');
        set_static_option('company_address', 'company---adddress');

        set_static_option('company_facebook_link', 'https://www.facebook.com/');
        set_static_option('company_twitter_link', 'https://twitter.com/');
        set_static_option('company_youtube_link', 'https://www.youtube.com/');
        set_static_option('company_instagram_link', 'https://www.instagram.com/');
        set_static_option('company_linkedin_link', 'https://www.linkedin.com/');

        set_static_option('note_for_social_network', 'Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies');

        set_static_option('custom_head_code', null);
        set_static_option('custom_foot_code', null);

        set_static_option('footer_credit', 'All right reserved by <b>'. config('app.name').'</b>');

        set_static_option('meta_description', null);
        set_static_option('meta_keywords', null);
        set_static_option('meta_author', null);
        set_static_option('meta_image', null);

        set_static_option('fb_auto_extend', true);
        set_static_option('fb_page_connection', false);
        set_static_option('fb_page_id', '1234567890');
        set_static_option('fb_theme_color', '#7646ff');

        set_static_option('map_link', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0133007741765!2d90.36988341538513!3d23.78254069346373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1bb07d0e771%3A0x127069c31b3f2ad7!2sDATATECH%20BD%20LTD.!5e0!3m2!1sbn!2sbd!4v1617710466238!5m2!1sbn!2sbd"');

        set_static_option('banner_highlight', 'Better Solutions For Your Business');
        set_static_option('banner_description', 'We are team of talented designers making websites with Bootstrap');
        set_static_option('banner_url', 'https://www.youtube.com/embed/plq25RrBPz8');
        set_static_option('banner_image', 'https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png');

    }
}
