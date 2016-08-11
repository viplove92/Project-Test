
<p style="text-align: left;font-size:16px;">Hi {{ $first_name }},</p>

<p style="text-align: left;font-size:16px;">Please Verify Your Email ID by clicking following link.</p>

<p style="text-align: left;font-size:16px;">Please click on following link <a target="_blank" href="{{ route('auth.confirmation_path', ['confirmation_code' => $confirmation_code]) }}">Verify Me</a>.</p>


<p style="text-align: left;font-size:15px;">Sincerely,</p>

<p style="text-align: left;font-size:15px;">Easymanage Support</p>

