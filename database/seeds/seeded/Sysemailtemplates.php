<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sysemailtemplates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Invoice:Invoice Created',
            'language_id'   => '1',
            'subject'       => '{{business_name}} Invoice',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3"><div style="padding:5px;font-size:11pt;font-weight:bold"> Greetings,</div><div style="padding:5px"> This email serves as your official invoice from <strong>{{business_name}}. </strong>	</div><div style="padding:10px 5px">    Invoice URL: <a href="{{invoice_url}}" target="_blank">{{invoice_url}}</a><a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{app_url}}"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style="padding:5px"><span style="font-size: 13.3333330154419px; line-height: 21.3333320617676px;">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style="padding:0px 5px"><div>Best Regards,<br>{{business_name}} Team</div></div></div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Admin:Password Change Request',
            'language_id'   => '1',
            'subject'       => '{{business_name}} password change request',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3"><div style="padding:5px;font-size:11pt;font-weight:bold">   Hi {{name}},</div>	<div style="padding:5px">		This is to confirm that we have received a Forgot Password request for your Account Username - {{username}} <br>From the IP Address - {{ip_address}}	</div>	<div style="padding:5px">		Click this link to reset your password- <br><a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{password_reset_link}}">{{password_reset_link}}</a>	</div><div style="padding:5px">Please note: until your password has been changed, your current password will remain valid. The Forgot Password Link will be available for a limited time only.</div><div style="padding:0px 5px">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Admin:New Password',
            'language_id'   => '1',
            'subject'       => '{{business_name}} New Password for Admin',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3">\n\n<div style="padding:5px;font-size:11pt;font-weight:bold">\n   Hello {{name}}\n</div>\n\n\n	<div style="padding:5px">\n		Here is your new password for <strong>{{business_name}}. </strong>\n	</div>\n\n	\n<div style="padding:10px 5px">\n    Log in URL: <a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{login_url}}">{{login_url}}</a><br>Username: {{username}}<br>Password: {{password}}</div>\n\n<div style="padding:5px">For security reason, Please change your password after login. </div>\n\n<div style="padding:0px 5px">\n	<div>Best Regards,<br>{{business_name}} Team</div>\n\n</div>\n\n</div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Invoice:Invoice Payment Reminder',
            'language_id'   => '1',
            'subject'       => '{{business_name}} Invoice Payment Reminder',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3"><div style="padding:5px;font-size:11pt;font-weight:bold">   Greetings,</div>	<div style="padding:5px">		This is a billing reminder that your invoice no. {{invoice_id}} which was generated on {{invoice_date}} is due on {{invoice_due_date}}. 	</div><div style="padding:10px 5px">    Invoice URL: <a href="{{invoice_url}}" target="_blank">{{invoice_url}}</a><a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{app_url}}"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style="padding:5px"><span style="font-size: 13.3333330154419px; line-height: 21.3333320617676px;">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style="padding:0px 5px">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Invoice:Invoice Overdue Notice',
            'language_id'   => '1',
            'subject'       => '{{business_name}} Invoice Overdue Notice',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3"><div style="padding:5px;font-size:11pt;font-weight:bold">   Greetings,</div>	<div style="padding:5px">		This is the notice that your invoice no. {{invoice_id}} which was generated on {{invoice_date}} is now overdue.	</div>	<div style="padding:10px 5px">    Invoice URL: <a href="{{invoice_url}}" target="_blank">{{invoice_url}}</a><a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{app_url}}"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style="padding:5px"><span style="font-size: 13.3333330154419px; line-height: 21.3333320617676px;">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style="padding:0px 5px">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

         DB::table('sys_email_templates')->insert([
            'tplname'       => 'Invoice:Invoice Payment Confirmation',
            'language_id'   => '1',
            'subject'       => '{{business_name}} Invoice Payment Confirmation',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3">\n\n<div style="padding:5px;font-size:11pt;font-weight:bold">\n   Greetings,\n</div>\n\n\n\n	<div style="padding:5px">\n		This is a payment receipt for Invoice {{invoice_id}} sent on {{invoice_date}}.\n	</div>\n\n\n	<div style="padding:5px">\n		Login to your client Portal to view this invoice.\n	</div>\n\n\n<div style="padding:10px 5px">\n    Invoice URL: <a href="{{invoice_url}}" target="_blank">{{invoice_url}}</a><a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{app_url}}"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div>\n\n\n<div style="padding:5px"><span style="font-size: 13.3333330154419px; line-height: 21.3333320617676px;">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div>\n\n\n<div style="padding:0px 5px">\n	<div>Best Regards,<br>{{business_name}} Team</div>\n\n\n</div>\n\n\n</div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Invoice:Invoice Refund Confirmation',
            'language_id'   => '1',
            'subject'       => '{{business_name}} Invoice Refund Confirmation',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,\'droid sans\',\'lucida sans\',sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3"><div style="padding:5px;font-size:11pt;font-weight:bold">   Greetings,</div>	<div style="padding:5px">		This is confirmation that a refund has been processed for Invoice {{invoice_id}} sent on {{invoice_date}}.	</div><div style="padding:10px 5px">    Invoice URL: <a href="{{invoice_url}}" target="_blank">{{invoice_url}}</a><a target="_blank" style="color:#1da9c0;font-weight:bold;padding:3px;text-decoration:none" href="{{app_url}}"></a><br>Invoice ID: {{invoice_id}}<br>Invoice Amount: {{invoice_amount}}<br>Due Date: {{invoice_due_date}}</div><div style="padding:5px"><span style="font-size: 13.3333330154419px; line-height: 21.3333320617676px;">If you have any questions or need assistance, please don\'t hesitate to contact us.</span><br></div><div style="padding:0px 5px">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);

        DB::table('sys_email_templates')->insert([
            'tplname'       => 'Quote:Quote Created',
            'language_id'   => '1',
            'subject'       => '{{quote_subject}}',
            'message'       => '<div style="line-height:1.6;color:#222;text-align:left;width:550px;font-size:10pt;margin:0px 10px;font-family:verdana,sans-serif;padding:14px;border:3px solid #d8d8d8;border-top:3px solid #007bc3"><div style="padding:5px;font-size:11pt;font-weight:bold">   Greetings,</div>	<div style="padding:5px">		Dear {{contact_name}},&nbsp;<br> Here is the quote you requested for.  The quote is valid until {{valid_until}}.	</div><div style="padding:10px 5px">    Quote Unique URL: <a href="{{quote_url}}" target="_blank">{{quote_url}}</a><br></div><div style="padding:5px"><span style="font-size: 13.3333330154419px; line-height: 21.3333320617676px;">You may view the quote at any time and simply reply to this email with any further questions or requirement.</span><br></div><div style="padding:0px 5px">	<div>Best Regards,<br>{{business_name}} Team</div></div></div>',
            'send'          => 'Yes',
            'core'          => 'Yes',
            'hidden'        => '0',
        ]);
    }
}
