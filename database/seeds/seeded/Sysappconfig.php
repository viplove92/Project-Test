<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sysappconfig extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_appconfig')->insert([
            'setting'       => 'CompanyName',
            'value'         => 'Techkaps',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'currency_code',
            'value'         => 'Rs',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'currency_code_location',
            'value'         => 'somelocation',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'language',
            'value'         => 'en-us',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'show-logo',
            'value'         => '1',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'dec_point',
            'value'         => '.',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'thousands_sep',
            'value'         => ',',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'timezone',
            'value'         => 'Asia/Kolkata',
        ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'country',
            'value'         => 'IN',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'country_code',
            'value'         => 'US',
        ]);

        DB::table('sys_appconfig')->insert([
            'setting'       => 'df',
            'value'         => 'M d Y',
        ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'caddress',
            'value'         => 'Techkaps <br> #47,',
         ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'account_search',
            'value'         => '1',
         ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'redirect_url',
            'value'         => 'dashboard',
         ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'rtl',
            'value'         => '0',
         ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'ckey',
            'value'         => '8721763406',
         ]);

         DB::table('sys_appconfig')->insert([
            'setting'       => 'networth_goal',
            'value'         => '200000',
         ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'sysEmail',
            'value'         => 'demo@techkaps.com',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'url_rewrite',
            'value'         => '0',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'build',
            'value'         => '0',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'animate',
            'value'         => '0',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'pdf_font',
            'value'         => 'dejavusanscondensed',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'accounting',
            'value'         => '1',
          ]);

           DB::table('sys_appconfig')->insert([
            'setting'       => 'invoicing',
            'value'         => '1',
           ]);

           DB::table('sys_appconfig')->insert([
            'setting'       => 'quotes',
            'value'         => '1',
           ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'client_dashboard',
            'value'         => '1',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'contact_set_view_mode',
            'value'         => 'card',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'invoice_terms',
            'value'         => '',
          ]);

          DB::table('sys_appconfig')->insert([
            'setting'       => 'console_notify_invoice_created',
            'value'         => '0',
          ]);

    }
}
