@extends('userpanel')
@section('content')

<style>
  .form-ukmc label{font-family:'Poppins';font-weight:600;font-size:14px;color:#fff;margin-bottom:6px;display:block}
.form-ukmc .form-control, .form-ukmc .form-select{border-radius:10px;border:1px solid var(--ukmc-line);
  padding:13px 14px;margin-bottom:18px;transition:box-shadow .2s ease,border-color .2s ease}
</style>



<!-- COURSES -->
<section class="section" id="courses">
<div class="container-xxl">
 
    <!-- COURSE 1: HEALTH & SOCIAL CARE -->
<div class="course-feature mb-5 reveal">
<div class="row g-0">
<div class="col-lg-5">
<div class="course-img-frame h-100">
<span class="badge-ukmc">Foundation Year</span>
	<img src="{{ asset('front/assets/img/course/BSc (Hons) Health and Social Care.jpg') }}" alt="BSc (Hons) Health and Social Care with Foundation Year">
</div>
</div>
<div class="col-lg-7 p-4 p-lg-5">
<div class="awarding-line"><span class="dot"></span>Awarded by University of Wolverhampton</div>
<h2 class="h3 mb-3">BSc (Hons) Health &amp; Social Care with Foundation Year</h2>
<p style="color:var(--ukmc-gray)">
            A career-focused degree for people building a future in health and social care — from
            community development and family support to leadership roles across the sector. The
            foundation year builds the academic skills and confidence to succeed at degree level, with
            smaller class sizes, one-to-one assignment support and dedicated Student Success Tutors
            throughout.
</p>
<div class="row g-3 my-2">
<div class="col-12">
<dl class="keyfacts row mb-0">
<div class="col-6 col-md-4">
<dt>Level</dt><dd>Undergraduate</dd>
</div>
<div class="col-6 col-md-4">
<dt>Duration</dt><dd>4 years</dd>
</div>
<div class="col-6 col-md-4">
<dt>Mode</dt><dd>Full time</dd>
</div>
<div class="col-6 col-md-4">
<dt>Delivery</dt><dd>Weekdays &amp; evenings</dd>
</div>
<div class="col-6 col-md-4">
<dt>Intakes</dt><dd>January, May, September</dd>
</div>
<div class="col-6 col-md-4">
<dt>Campuses</dt><dd>Manchester, Derby, Sunderland</dd>
</div>
<div class="col-12">
<dt>Tuition fees</dt>
<dd>Foundation Year £9,535 · Year 1 £9,535 · Year 2 £9,535 · Year 3 £9,535</dd>
</div>
</dl>
</div>
</div>
<div class="d-flex gap-3 flex-wrap mt-3">
<a href="{{ url('/courses/bsc-hons-health-and-social-care-with-foundation-year') }}" class="btn btn-ukmc-primary">View full course details</a>
<a href="#register" class="btn btn-ukmc-outline-blue">Register your interest</a>
</div>
</div>
</div>
</div>
 
    <!-- COURSE 2: PSYCHOLOGY -->
<div class="course-feature reveal reveal-delay-1">
<div class="row g-0 flex-lg-row-reverse">
<div class="col-lg-5">
<div class="course-img-frame h-100">
    <span class="badge-ukmc">Foundation Year</span>
    <img src="{{ asset('front/assets/img/course/bsc-hons-psychology-with-foundation-year.jpg') }}" alt="BSc (Hons) Psychology with Foundation Year">
</div>
</div>
<div class="col-lg-7 p-4 p-lg-5">
<div class="awarding-line"><span class="dot"></span>Awarded by Health Sciences University</div>
<h2 class="h3 mb-3">BSc (Hons) Psychology with Foundation Year</h2>
<p style="color:var(--ukmc-gray)">
            A comprehensive introduction to psychological theory, research and application — covering
            cognitive, biological, developmental and social psychology alongside research methods and
            applied practice. The foundation year builds the academic, scientific and professional
            skills needed for degree-level study, with routes into mental health, education, HR,
            research and beyond.
</p>
<div class="compliance-note mb-3">
<span class="icon">ℹ️</span>
<span>This course is not yet approved by the British Psychological Society (BPS).</span>
</div>
<div class="row g-3 my-2">
<div class="col-12">
<dl class="keyfacts row mb-0">
<div class="col-6 col-md-4">
<dt>Level</dt><dd>Undergraduate</dd>
</div>
<div class="col-6 col-md-4">
<dt>Duration</dt><dd>4 years</dd>
</div>
<div class="col-6 col-md-4">
<dt>Mode</dt><dd>Full time</dd>
</div>
<div class="col-6 col-md-4">
<dt>Delivery</dt><dd>Weekdays &amp; evenings</dd>
</div>
<div class="col-6 col-md-4">
<dt>Intakes</dt><dd>January, May, September</dd>
</div>
<div class="col-6 col-md-4">
<dt>Campuses</dt><dd>Manchester, Derby, Sunderland</dd>
</div>
<div class="col-12">
<dt>Tuition fees</dt>
<dd>Foundation Year £9,535 · Year 1 £9,535 · Year 2 £9,535 · Year 3 £9,535</dd>
</div>
</dl>
</div>
</div>
<div class="d-flex gap-3 flex-wrap mt-3">
<a href="{{ url('/courses/bsc-hons-psychology-with-foundation-year') }}" class="btn btn-ukmc-primary">View full course details</a>
<a href="#register" class="btn btn-ukmc-outline-blue">Register your interest</a>
</div>
</div>
</div>
</div>
 
  </div>
</section>
 
<!-- STATEMENT BAND -->
<div class="band-blue section text-center">
<div class="container-xxl position-relative reveal" style="z-index:2">
<h2 class="mb-3">Not sure which course is <span class="hero-highlight">right for you?</span></h2>
<p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">Register your interest and a member of the team will talk you through entry routes, funding and start dates.</p>
<a href="#register" class="btn btn-ukmc-primary pulse">Register your interest</a>
</div>
</div>

<!-- REGISTER YOUR INTEREST FORM -->
{{-- <section class="section" id="register" style="background:var(--ukmc-blue-deep)">
<div class="container-xxl">
<div class="row justify-content-center text-center mb-5 reveal">
<div class="col-lg-7 text-white">
<h2 class="text-white mb-2">Register your interest</h2>
<p class="mb-0" style="opacity:.85">Be first through the door. Register now and you'll hear before anyone else — invitations to open days, and one-to-one application support.</p>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-7 reveal reveal-delay-1">
<form action="{{ route('contact.submit') }}" method="POST" class="form-ukmc">
@csrf
<div class="row">
<div class="col-md-6">
<label for="fname">Full name</label>
<input type="text" name="name" class="form-control" id="fname" placeholder="Jordan Smith">
</div>
<div class="col-md-6">
<label for="femail">Email address</label>
<input type="email" name="email" class="form-control" id="femail" placeholder="you@example.com">
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="fsubject">Course</label>
<select name="subject_area" class="form-select" id="fsubject">
<option>BSc (Hons) Health and Social Care</option>
<option>Psychology</option>
</select>
</div>
<div class="col-md-6">
<label for="fyear">Earliest start year</label>
<input type="text" name="earliest_start_year" class="form-control" id="fyear" placeholder="2027">
</div>
</div>
<label for="fsituation">Current situation</label>
<select name="currentsituation" class="form-select mb-3" id="fsituation">
<option value="School leaver">School leaver</option>
<option value="Career changer">Career changer</option>
<option value="Returning to education">Returning to education</option>
<option value="Working in a care role">Working in a care role</option>
<option value="Other">Other</option>
</select>
<div class="form-check mb-4">
<input class="form-check-input" type="checkbox" id="fconsent">
<label class="form-check-label" for="fconsent" style="font-family:'Roboto';font-weight:400;color:#fff;opacity:.85">
              I agree to be contacted by UKMC Health about my registration, in line with the <a href="#" style="color:var(--ukmc-light-blue);text-decoration:underline">Privacy Policy</a>.
</label>
</div>
<button type="submit" class="btn btn-ukmc-primary w-100">Submit</button>
</form>
</div>
</div>
</div>
</section> --}}

<section class="section" id="register" style="background:var(--ukmc-blue-deep)">
<div class="container-xxl">
<div class="row justify-content-center text-center mb-5 reveal">
<div class="col-lg-7 text-white">
<h2 class="text-white mb-2">Register your interest</h2>
<p class="mb-0" style="opacity:.85">Be first through the door. Register now and you'll hear before anyone else — invitations to open days, and one-to-one application support.</p>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-7 reveal reveal-delay-1">
<form action="{{ route('contact.submit') }}" method="POST" class="form-ukmc" id="inquiryForm">
@csrf
<div class="row">
<div class="col-md-6">
<label for="fname">Full name</label>
<input type="text" name="name" class="form-control" id="fname" placeholder="Enter your full name">
</div>
<div class="col-md-6">
<label for="femail">Email address</label>
<input type="email" name="email" class="form-control" id="femail" placeholder="Enter your email">
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="fsubject">Course</label>
<select name="subject_area" class="form-select" id="fsubject" >
  <option value="">--Select course--</option>
  <option value="BSc (Hons) Health & Social Care with Foundation Year">BSc (Hons) Health & Social Care with Foundation Year</option>
  <option value="BSc (Hons) Psychology with Foundation Year">BSc (Hons) Psychology with Foundation Year</option>
</select>
</div>
<div class="col-md-6">
<label for="fyear">Earliest start year</label>
<input type="text" name="earliest_start_year" class="form-control" id="fyear" placeholder="Enter earliest start year">
</div>
</div>

<div class="row">
<div class="col-md-6">
                <label for="cfintake">Preferred intake</label>
                <select name="preferred_intake" id="cfintake" class="form-select">
                  <option>January 2027</option><option>May 2027</option><option>September 2027</option>
                </select>
              </div>
<div class="col-md-6">
<label for="fsituation">Current situation</label>
<select name="currentsituation" class="form-select mb-3" id="fsituation">
  <option value="">--Select current situation--</option>
  <option value="School leaver">School leaver</option>
  <option value="Career changer">Career changer</option>
  <option value="Returning to education">Returning to education</option>
  <option value="Working in a care role">Working in a care role</option>
  <option value="Other">Other</option>
</select>
</div>
</div>

<div class="form-check mb-4">
<input class="form-check-input" type="checkbox" id="fconsent">
<label class="form-check-label" for="fconsent" style="font-family:'Roboto';font-weight:400;color:#fff;opacity:.85">
    I agree to be contacted by UKMC Health about my registration, in line with the <a href="#" style="color:var(--ukmc-light-blue);text-decoration:underline">Privacy Policy</a>.
</label>
</div>
<button type="submit" class="btn btn-ukmc-primary w-100">Submit</button>
</form>
</div>
</div>
</div>
</section>
 

@endsection