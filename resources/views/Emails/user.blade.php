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
    <title>Thank You – UKMC Health</title>
</head>

<body style="margin:0; padding:0; background:#f4f6f8; font-family:Arial, Helvetica, sans-serif;">

<div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden;">

    <!-- Header -->
    <div style="background:#142b63; padding:25px; text-align:center;">
        <h1 style="color:#ffffff; margin:0;">
            UKMC Health
        </h1>

        <p style="color:#dbe4ff; margin:8px 0 0;">
            School of Health
        </p>
    </div>

    <!-- Content -->
    <div style="padding:35px;">

        <h2 style="color:#142b63;">
            Thank You for Getting in Touch
        </h2>

        <p style="font-size:15px; color:#444; line-height:1.7;">
            Dear
           
                {{ $details['name'] }}
           
        </p>

        <p style="font-size:15px; color:#444; line-height:1.7;">
            Thank you for submitting your enquiry to
            <strong>UKMC Health</strong>.
        </p>

        <p style="font-size:15px; color:#444; line-height:1.7;">
            We have successfully received your information.
            Our admissions team will review your enquiry and
            contact you if further information is required.
        </p>

        <!-- Submitted Information -->
        <div style="margin-top:25px; background:#f6f8fc; padding:20px; border-radius:8px;">

            <h3 style="color:#142b63; margin-top:0;">
                Your Enquiry Details
            </h3>


            <p><strong>Name:</strong> {{ $details['name'] }}</p>

            <p><strong>Email:</strong> {{ $details['email'] }}</p>

            <p><strong>Subject Area:</strong>
                {{ $details['subject_area'] }}
            </p>

            <p><strong>Earliest Start Year:</strong>
                {{ $details['earliest_start_year'] }}
            </p>

            <p><strong>Preferred Intake:</strong>
                {{ $details['preferred_intake'] }}
            </p>

            <p><strong>Current Situation:</strong>
                {{ $details['currentsituation'] }}
            </p>

              

        </div>

        <p style="font-size:15px; color:#444; line-height:1.7; margin-top:25px;">
            If you have any questions, please feel free to contact
            our admissions team.
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

    <!-- Footer -->
    <div style="background:#f1f3f6; padding:18px; text-align:center;">

        <p style="font-size:12px; color:#777; margin:0;">
            This is an automated confirmation email from UKMC Health.
        </p>

    </div>

</div>

</body>
</html>