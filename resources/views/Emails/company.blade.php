{{-- <div>
    
   <h1>UKMCSH</h1>
   <p><strong>Name:</strong> {{ $details['name'] }}</p>
   <p><strong>Email:</strong> {{ $details['email'] }}</p>
   <p><strong>Subject Area:</strong> {{ $details['subject_area'] }}</p>
   <p><strong>Earliest Start Year:</strong> {{ $details['earliest_start_year'] }}</p>
   <p><strong>Preferred Intake:</strong> {{ $details['preferred_intake'] }}</p>
   <p><strong>Current Situation:</strong> {{ $details['currentsituation'] }}</p>
</div> --}}


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
</head>

<body style="margin:0; padding:0; background:#f4f6f8; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:700px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden;">

    <!-- Header -->
    <div style="background:#142b63; padding:25px 30px;">

        <h2 style="color:#ffffff; margin:0;">
            UKMC Health
        </h2>

        <p style="color:#dbe4ff; margin:7px 0 0;">
            New Contact Enquiry
        </p>

    </div>

    <!-- Content -->
    <div style="padding:30px;">

        <h2 style="color:#142b63;">
            New Enquiry Received
        </h2>

        <p style="color:#444; font-size:15px;">
            A new enquiry has been submitted through the
            UKMC Health website.
        </p>

        <!-- Applicant Information -->

        <div style="margin-top:25px;">

            <h3 style="color:#142b63; border-bottom:2px solid #eeeeee; padding-bottom:10px;">
                Applicant Information
            </h3>

            <table width="100%" cellpadding="10" cellspacing="0"
                   style="border-collapse:collapse; font-size:14px;">

                <tr>
                    <td style="background:#f7f8fa; width:35%;">
                        <strong>Name</strong>
                    </td>
                    <td>
                        {{ $details['name'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Email</strong>
                    </td>
                    <td>
                        <a href="mailto:{{ $details['email'] }}">
                            {{ $details['email'] }}
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Subject Area</strong>
                    </td>
                    <td>
                        {{ $details['subject_area'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Earliest Start Year</strong>
                    </td>
                    <td>
                        {{ $details['earliest_start_year'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Preferred Intake</strong>
                    </td>
                    <td>
                        {{ $details['preferred_intake'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Current Situation</strong>
                    </td>
                    <td>
                        {{ $details['currentsituation'] }}
                    </td>
                </tr>








            </table>

        </div>

        <!-- Action -->

        <div style="margin-top:30px; padding:18px; background:#fff7ed; border-left:4px solid #f97316;">

            <strong style="color:#9a3412;">
                Action Required
            </strong>

            <p style="margin-bottom:0; color:#555;">
                Please review the enquiry and contact the applicant
                if further information or assistance is required.
            </p>

    <p style="margin-top:30px;">
            Kind regards,<br>
            <strong>Admissions Team</strong><br>
            UKMC Health<br>
            College House Campus, Stanley St/Catherine St,<br>
             Openshaw, Manchester, M11 1LE
        </p>
         
        <p>
    <img src="https://staging.ukmcsh.co.uk/front/assets/img/logo/ukmc.png" alt="UKMC Health Logo" class="logo"
    style="max-width:180px; height:auto;">
    </p>
          <p>
        Email: <a href="mailto:recruitment@ukmc.ac.uk">recruitment@ukmc.ac.uk</a><br>
        Web: <a target="_blank" href="https://staging.ukmcsh.co.uk/">https://staging.ukmcsh.co.uk</a>
    </p>



        </div>

        <p style="margin-top:30px; color:#777; font-size:13px;">
            This notification was generated automatically from
            the UKMC Health website contact form.
        </p>

    </div>

    <!-- Footer -->

    <div style="background:#f1f3f6; padding:18px; text-align:center;">

        <p style="font-size:12px; color:#777; margin:0;">
            UKMC Health • Admissions & Enquiries
        </p>

    </div>

</div>

</body>
</html>