<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Mail\CompanyMail;
use App\Mail\UserMail;

use Illuminate\Http\Request;
use App\Models\Contact\Contact;
use App\Models\ContactPage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactPageMail;
use App\Models\User;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'UKMC SCHOOL OF HEALTH';
        return view('home.index', $data);
    }

    public function courses()
    {
        $data['page_title'] = 'UKMCSH | Courses';
        return view('courses.courses', $data);
    }

    public function bsc_hons_psychology_with_foundation_year()
    {
        $data['page_title'] = 'UKMCSH | BSc (Hons) Psychology with Foundation Year';
        return view('courses.bsc-hons-psychology-with-foundation-year', $data);
    }

    public function bsc_hons_health_and_social_care_with_foundation_year()
    {
        $data['page_title'] = 'UKMCSH | BSc (Hons) Health & Social Care with Foundation Year';
        return view('courses.bsc-hons-health-and-social-care-with-foundation-year', $data);
    }

    public function why_us()
    {
        $data['page_title'] = 'UKMCSH | Why us';
        return view('why-us.why-us', $data);
    }

    public function campus()
    {
        $data['page_title'] = 'UKMCSH | Campus';
        return view('campus.campus', $data);
    }

    public function about()
    {
        $data['page_title'] = 'UKMCSH | About Us';
        return view('about.about', $data);
    }

    public function contact()
    {
        $data['page_title'] = 'UKMCSH | Contact';
        return view('contact.contact', $data);
    }

    public function register()
    {
        $data['page_title'] = 'UKMCSH | Register';
        return view('register.register', $data);
    }

    public function privacy()
    {
        $data['page_title'] = 'UKMCSH | Privacy';
        return view('privacy.privacy', $data);
    }

    public function cookie_policy()
    {
        $data['page_title'] = 'UKMCSH | Cookie Policy';
        return view('cookie-policy.cookie-policy', $data);
    }

    public function accessibility()
    {
        $data['page_title'] = 'UKMCSH | Accessibility';
        return view('accessibility.accessibility', $data);
    }

    public function safeguarding()
    {
        $data['page_title'] = 'UKMCSH | Safeguarding';
        return view('safeguarding.safeguarding', $data);
    }

    public function complaints()
    {
        $data['page_title'] = 'UKMCSH | Complaints';
        return view('complaints.complaints', $data);
    }

    public function equality_and_diversity()
    {
        $data['page_title'] = 'UKMCSH | Equality & Diversity';
        return view('equality-and-iversity.equality-and-iversity', $data);
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject_area' => 'required',
            'earliest_start_year' => 'required',
            'preferred_intake' => 'required',
            'currentsituation' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject_area = $request->subject_area;
        $contact->earliest_start_year = $request->earliest_start_year;
        $contact->preferred_intake = $request->preferred_intake;
        $contact->currentsituation = $request->currentsituation;

        $contact->save();
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject_area' => $request->subject_area,
            'earliest_start_year' => $request->earliest_start_year,
            'preferred_intake' => $request->preferred_intake,
            'currentsituation' => $request->currentsituation,
        ];
        // Send email to admin
        // try {
        Mail::to($contact->email)->send(new UserMail($details));
        // Mail::to('saidulislam0400@gmail.com')->send(new CompanyMail($details));
        Mail::to('recruitment@ukmc.ac.uk')->send(new CompanyMail($details));


        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        // }
        return redirect()->back()->with('success', 'Your email has been sent successfully!');
    }


    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject_area' => 'required',
            'preferred_intake' => 'required',
            'preferred_campus' => 'required',
            'message' => 'required',
        ]);

        $contactPage = new ContactPage();
        $contactPage->name = $request->name;
        $contactPage->email = $request->email;
        $contactPage->phone = $request->phone;
        $contactPage->subject_area = $request->subject_area;
        $contactPage->preferred_intake = $request->preferred_intake;
        $contactPage->preferred_campus = $request->preferred_campus;
        $contactPage->message = $request->message;

        $contactPage->save();

        $newdetails = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject_area' => $request->subject_area,
            'preferred_intake' => $request->preferred_intake,
            'preferred_campus' => $request->preferred_campus,
            'message' => $request->message,
        ];

        // Send email to admin
        Mail::to($contactPage->email)->send(new ContactPageMail($newdetails, 'user'));
        // Mail::to('saidulislam0400@gmail.com')->send(new ContactPageMail($newdetails, 'company'));
        Mail::to('recruitment@ukmc.ac.uk')->send(new ContactPageMail($newdetails, 'company'));

        return redirect()->back()->with('success', 'Your email has been sent successfully!');
    }
}
