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

     @if($recipientType === 'user')   

 <h2 style="color:#142b63;">
            Thank You for Getting in Touch
        </h2>

        <p style="font-size:15px; color:#444; line-height:1.7;">
            Dear
           
                {{ $newdetails['name'] }}
           
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






@elseif ($recipientType === 'company')

        <h2 style="color:#142b63;">
            New Enquiry Received
        </h2>

        <p style="color:#444; font-size:15px;">
            A new enquiry has been submitted through the
            UKMC Health website.
        </p>

         <h3 style="color:#142b63; border-bottom:2px solid #eeeeee; padding-bottom:10px;">
                Applicant Information
            </h3>


        <!-- Applicant Information -->
@endif



        <div style="margin-top:25px;">

           
            <table width="100%" cellpadding="10" cellspacing="0"
                   style="border-collapse:collapse; font-size:14px;">
            <tr>
                    <td style="background:#f7f8fa; width:35%;">
                        <strong>Name</strong>
                    </td>
                    <td>
                        {{ $newdetails['name'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Email</strong>
                    </td>
                    <td>
                        <a href="mailto:{{ $newdetails['email'] }}">
                            {{ $newdetails['email'] }}
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Subject Area</strong>
                    </td>
                    <td>
                        {{ $newdetails['subject_area'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Phone</strong>
                    </td>
                    <td>
                        {{ $newdetails['phone'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Preferred Intake</strong>
                    </td>
                    <td>
                        {{ $newdetails['preferred_intake'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Preferred Campus</strong>
                    </td>
                    <td>
                        {{ $newdetails['preferred_campus'] }}
                    </td>
                </tr>

                <tr>
                    <td style="background:#f7f8fa;">
                        <strong>Message</strong>
                    </td>
                    <td>
                        {{ $newdetails['message'] }}
                    </td>
                </tr>            



            </table>

        </div>

        <!-- Action -->

        <div style="margin-top:30px; padding:18px; background:#fff7ed; border-left:4px solid #f97316;">

          @if($recipientType === 'user')

    <p>
        Our team will review your enquiry and contact you
        if further information is required.
    </p>

      <p style="margin-top:30px;">
            Kind regards,<br>
            <strong>Admissions Team</strong><br>
            UKMC Health<br>
            College House Campus, Stanley St/Catherine St,<br>
             Openshaw, Manchester, M11 1LE
        </p>
         

@elseif($recipientType === 'company')

    <div style="background:#fff7ed; padding:18px;">
        <strong>Action Required</strong>

        <p>
            Please review this enquiry and contact the applicant
            if further information is required.
        </p>
    </div>

      <p style="margin-top:30px;">
            Kind regards,<br>
            <strong>Admissions Team</strong><br>
            UKMC Health<br>
            College House Campus, Stanley St/Catherine St,<br>
             Openshaw, Manchester, M11 1LE
        </p>
         

@endif

  
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