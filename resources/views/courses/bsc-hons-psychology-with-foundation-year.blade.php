@extends('userpanel')
@section('content')
<style>
:root{
  --ukmc-blue:#152071; --ukmc-blue-deep:#0E1650; --ukmc-red:#D81516;
  --ukmc-red-deep:#B01113; --ukmc-light-blue:#A8DADC; --ukmc-off-white:#EDF2F4;
  --ukmc-yellow:#F8C000; --ukmc-ink:#1E1F3A; --ukmc-gray:#5C6178; --ukmc-line:#D9DEE8;
  --ukmc-radius:16px; --ukmc-radius-btn:10px;
  --ukmc-shadow:0 6px 24px rgba(21,32,113,.08);
  --ukmc-shadow-hover:0 18px 44px rgba(21,32,113,.16);
}
*{box-sizing:border-box}
body{font-family:'Roboto',sans-serif;color:var(--ukmc-ink);font-size:16.5px;line-height:1.7;background:#fff;overflow-x:hidden}
h1,h2,h3,h4,h5,.btn{font-family:'Poppins',sans-serif}
h1,h2,h3,h4,h5{color:var(--ukmc-blue);font-weight:600;line-height:1.2}
a{color:var(--ukmc-blue);text-decoration:none} a:hover{color:var(--ukmc-red-deep)}
.eyebrow{font-family:'Poppins';font-weight:600;font-size:13.5px;letter-spacing:.08em;
  text-transform:uppercase;color:var(--ukmc-red-deep);display:block;margin-bottom:10px}
.section{padding:88px 0}
.section-alt{background:var(--ukmc-off-white)}
:focus-visible{outline:3px solid var(--ukmc-yellow);outline-offset:2px}
@media (max-width:768px){.section{padding:52px 0}}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}

@keyframes floatGlow{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(-16px,-24px) scale(1.06)}}
@keyframes shimmer{0%{background-position:0% 50%}100%{background-position:200% 50%}}
.glow-blob{position:absolute;border-radius:50%;filter:blur(60px);pointer-events:none;animation:floatGlow 9s ease-in-out infinite}
.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease}
.reveal.in-view{opacity:1;transform:translateY(0)}
.hero-highlight{background:linear-gradient(90deg,var(--ukmc-yellow),#fff,var(--ukmc-yellow));
  background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:shimmer 4s linear infinite}

/* Buttons */
.btn-ukmc-primary{background:var(--ukmc-red);color:#fff;font-family:'Poppins';font-weight:600;
  padding:14px 28px;border-radius:var(--ukmc-radius-btn);border:none;
  box-shadow:0 8px 24px rgba(216,21,22,.3);transition:transform .2s ease,box-shadow .2s ease}
.btn-ukmc-primary:hover{background:var(--ukmc-red-deep);color:#fff;transform:translateY(-3px);box-shadow:0 14px 34px rgba(216,21,22,.45)}
.btn-ukmc-outline{background:transparent;border:2px solid #fff;color:#fff;font-family:'Poppins';
  font-weight:600;padding:13px 26px;border-radius:var(--ukmc-radius-btn);transition:all .2s ease}
.btn-ukmc-outline:hover{background:#fff;color:var(--ukmc-blue);transform:translateY(-3px)}
.btn-ukmc-outline-blue{border:2px solid var(--ukmc-blue);color:var(--ukmc-blue);font-family:'Poppins';
  font-weight:600;padding:11px 24px;border-radius:var(--ukmc-radius-btn);background:transparent;transition:all .2s ease;width:100%}
.btn-ukmc-outline-blue:hover{background:var(--ukmc-blue);color:#fff}


/* Page hero */
.page-hero{background:radial-gradient(120% 160% at 20% 0%,#1C2A8C 0%,var(--ukmc-blue) 45%,var(--ukmc-blue-deep) 100%);
  position:relative;overflow:hidden;padding:56px 0 0;color:#fff}
.page-hero .glow-blob{width:280px;height:280px;background:var(--ukmc-light-blue);opacity:.18;bottom:-100px;left:4%}
.breadcrumb-ukmc a{color:rgba(255,255,255,.7);font-size:14px}
.breadcrumb-ukmc a:hover{color:var(--ukmc-yellow)}
.breadcrumb-ukmc span{color:rgba(255,255,255,.4);margin:0 8px}
.badge-fy{background:var(--ukmc-yellow);color:var(--ukmc-blue);border-radius:999px;font-family:'Poppins';
  font-weight:600;font-size:12.5px;padding:6px 14px;display:inline-block}
.hero-collage{position:relative;padding-bottom:60px}
.hero-img-main{border-radius:20px;min-height:340px;background:linear-gradient(150deg,var(--ukmc-light-blue),var(--ukmc-yellow) 140%);
  display:flex;align-items:center;justify-content:center;text-align:center;color:rgba(21,32,113,.55);
  font-family:'Poppins';font-weight:600;font-size:14px;padding:24px;box-shadow:0 24px 50px rgba(0,0,0,.3)}
.hero-img-sub{position:absolute;bottom:0;right:24px;width:46%;min-height:150px;border-radius:16px;
  background:linear-gradient(150deg,#fff,var(--ukmc-off-white));border:1px solid var(--ukmc-line);
  display:flex;align-items:center;justify-content:center;text-align:center;color:var(--ukmc-gray);
  font-family:'Poppins';font-weight:600;font-size:12.5px;padding:16px;box-shadow:0 20px 40px rgba(0,0,0,.25)}

/* Sidebar */
.sidebar-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:20px;box-shadow:var(--ukmc-shadow);
  padding:28px;position:sticky;top:96px}
.sidebar-fee{font-family:'Poppins';font-weight:700;color:var(--ukmc-blue);font-size:15px;margin-bottom:18px;
  background:var(--ukmc-off-white);border-radius:10px;padding:12px 14px}
.keyfacts dt{font-family:'Poppins';font-weight:600;font-size:12px;letter-spacing:.04em;text-transform:uppercase;
  color:var(--ukmc-gray);margin-bottom:2px}
.keyfacts dd{font-size:14.5px;color:var(--ukmc-ink);margin-bottom:14px;padding-bottom:14px;border-bottom:1px solid var(--ukmc-line)}
.keyfacts dd:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}

/* Accordion */
.accordion-ukmc .accordion-item{border:1px solid var(--ukmc-line);border-radius:14px!important;margin-bottom:14px;overflow:hidden}
.accordion-ukmc .accordion-button{font-family:'Poppins';font-weight:600;color:var(--ukmc-blue);
  background:var(--ukmc-off-white);padding:20px 24px;font-size:16.5px}
.accordion-ukmc .accordion-button:not(.collapsed){background:var(--ukmc-blue);color:#fff;box-shadow:none}
.accordion-ukmc .accordion-button:not(.collapsed)::after{filter:invert(1)}
.accordion-ukmc .accordion-button:focus{box-shadow:0 0 0 3px rgba(248,192,0,.4)}
.accordion-ukmc .accordion-body{padding:24px;color:var(--ukmc-gray)}
.accordion-ukmc .accordion-body h6{color:var(--ukmc-blue);font-family:'Poppins';font-weight:600;margin-top:18px;margin-bottom:8px}
.accordion-ukmc .accordion-body h6:first-child{margin-top:0}
.accordion-ukmc .accordion-body ul{padding-left:20px}
.accordion-ukmc .accordion-body li{margin-bottom:6px}

.module-chip{display:flex;justify-content:space-between;background:#fff;border:1px solid var(--ukmc-line);
  border-radius:10px;padding:10px 14px;margin-bottom:8px;font-size:14.5px}
.module-chip .credits{color:var(--ukmc-gray);font-size:13px;white-space:nowrap;margin-left:10px}

.compliance-note{background:#FFF7E0;border:1px solid var(--ukmc-yellow);border-radius:12px;padding:14px 18px;
  font-size:14px;color:var(--ukmc-ink);display:flex;gap:10px;align-items:flex-start}

/* City cards */
.city-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:16px;padding:22px;height:100%}
.city-card h6{font-family:'Poppins';font-weight:700;color:var(--ukmc-blue);margin-bottom:10px}

/* Testimonials */
.testimonial-card{background:#fff;border:1px solid var(--ukmc-line);border-radius:16px;padding:26px;height:100%;box-shadow:var(--ukmc-shadow)}
.testimonial-card .avatar{width:44px;height:44px;border-radius:50%;background:var(--ukmc-light-blue);
  display:flex;align-items:center;justify-content:center;font-family:'Poppins';font-weight:700;color:var(--ukmc-blue)}

/* Form */
.form-ukmc label{font-family:'Poppins';font-weight:600;font-size:13.5px;color:var(--ukmc-ink);margin-bottom:6px;display:block}
.form-ukmc .form-control,.form-ukmc .form-select{border-radius:10px;border:1px solid var(--ukmc-line);
  padding:12px 14px;margin-bottom:16px;transition:box-shadow .2s ease,border-color .2s ease}
.form-ukmc .form-control:focus,.form-ukmc .form-select:focus{border-color:var(--ukmc-yellow);box-shadow:0 0 0 4px rgba(248,192,0,.22)}

/* Statement band */
.band-blue{background:radial-gradient(120% 180% at 50% 0%,#1C2A8C 0%,var(--ukmc-blue) 60%,var(--ukmc-blue-deep) 100%);color:#fff}
.band-blue h2{color:#fff}

</style>


<!-- PAGE HERO -->
<header class="page-hero">
  <div class="glow-blob"></div>
  <div class="container-xxl position-relative" style="z-index:2">
    <nav class="breadcrumb-ukmc mb-4 reveal in-view">
      <a href="#">Home</a><span>/</span><a href="#">Courses</a><span>/</span><span style="color:#fff">Psychology</span>
    </nav>
    <div class="row reveal in-view">
      <div class="col-lg-9">
        <span class="badge-fy mb-3">Foundation Year Route</span>
        <h1 class="mb-3" style="color:#fff;font-size:38px">BSc (Hons) Psychology with <span class="hero-highlight">Foundation Year</span></h1>
        <p style="opacity:.9;font-size:17px;max-width:70ch">
          A comprehensive introduction to psychological theory, research and application — covering cognitive,
          biological, developmental and social psychology, alongside research methods and applied practice.
        </p>
      </div>
    </div>
    <div class="hero-collage mt-4 reveal in-view">
      <div class="hero-img-main">
        <img src="{{ asset('front/assets/img/course/bsc-hons-psychology-with-foundation-year-banner.jpg') }}" alt="BSc (Hons) Psychology with Foundation Year">
      </div>
      <div class="hero-img-sub">
        <img src="{{ asset('front/assets/img/course/bsc-hons-psychology-with-foundation-year course.jpg') }}" alt="BSc (Hons) Psychology with Foundation Year">
      </div>
    </div>
  </div>
</header>

<!-- MAIN CONTENT -->
<section class="section">
  <div class="container-xxl">
    <div class="row g-5">

      <!-- LEFT: CONTENT -->
      <div class="col-lg-8">

        <div class="reveal mb-4">
          <div class="compliance-note">
            <span class="icon">ℹ️</span>
            <span>This course is not yet approved by the British Psychological Society (BPS).</span>
          </div>
        </div>

        <div class="reveal mb-5">
          <span class="eyebrow">Course overview</span>
          <h2 class="h3 mb-3">Understanding people, behaviour and society</h2>
          <p style="color:var(--ukmc-gray)">
            The BSc (Hons) Psychology with Foundation Year is designed to give you a strong academic and
            practical understanding of psychology, beginning with a foundation year that builds essential
            study skills and subject knowledge. The course develops knowledge across key psychological
            domains — biological, cognitive, social and developmental psychology — alongside research methods
            and applied practice.
          </p>
          <p style="color:var(--ukmc-gray)">
            You'll explore how psychological theory applies to real-world contexts such as health, education
            and organisational settings, with a strong focus on critical thinking, research and communication
            skills. Graduates may progress into careers in mental health support, human resources, education,
            research and social services, or continue to postgraduate study in a specialised area of
            psychology. The degree is awarded by Health Sciences University.
          </p>
        </div>

        <div class="reveal mb-5">
          <span class="eyebrow">Course details</span>
          <h2 class="h3 mb-4">Everything you need to know</h2>

          <div class="accordion accordion-ukmc" id="courseAccordion">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-curriculum">Curriculum</button>
              </h2>
              <div id="acc-curriculum" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <h6>Foundation Year (Level 3)</h6>
                  <p style="font-size:14.5px">Builds a strong academic and subject-based introduction to prepare you for degree-level study — core biological concepts, human anatomy and physiology, and the foundations of psychology and mental health, alongside communication, research and independent-learning skills. A key feature is the extended project, applying your learning to a chosen topic.</p>
                  <div class="module-chip"><span>FDY3001 Human Sciences I</span></div>
                  <div class="module-chip"><span>FDY3002 Introduction to Healthcare</span></div>
                  <div class="module-chip"><span>FDY3003 Personal and Professional Development</span></div>
                  <div class="module-chip"><span>FDY3004 Foundation Year Extended Project</span></div>
                  <div class="module-chip"><span>FDY3005 Human Sciences II</span></div>
                  <div class="module-chip"><span>FDY3009 Foundations of Psychology, Counselling and Mental Health</span></div>

                  <h6>Level 4</h6>
                  <p style="font-size:14.5px">Introduces the fundamental principles and core domains of psychology, research methods and data analysis, historical and conceptual perspectives, learning theory, and the impact of digital environments through cyberpsychology.</p>
                  <div class="module-chip"><span>PSY4102 Quantitative Research Methods</span></div>
                  <div class="module-chip"><span>PSY4103 Applying Psychology</span></div>
                  <div class="module-chip"><span>PSY4104 Conceptual and Historical Perspectives</span></div>
                  <div class="module-chip"><span>PSY4105 Introduction to Learning Theory</span></div>
                  <div class="module-chip"><span>PSY4107 Cyberpsychology</span></div>
                  <div class="module-chip"><span>SES4001 Introduction to Research Methods</span></div>

                  <h6>Level 5</h6>
                  <p style="font-size:14.5px">Builds on foundational knowledge across developmental, social, biological and cognitive psychology, with advanced research methods to critically evaluate evidence and apply theory to practice.</p>
                  <div class="module-chip"><span>PSY5203 Developmental Psychology</span></div>
                  <div class="module-chip"><span>PSY5204 Social Psychology</span></div>
                  <div class="module-chip"><span>PSY5205 Biological Psychology</span></div>
                  <div class="module-chip"><span>PSY5206 Applied Psychological Skills</span></div>
                  <div class="module-chip"><span>PSY5207 Cognitive Psychology</span></div>
                  <div class="module-chip"><span>SES5001 Research Methods</span></div>

                  <h6>Level 6</h6>
                  <p style="font-size:14.5px">Advanced study and specialisation, including a dissertation involving independent research and an optional placement for practical, professional experience.</p>
                  <div class="module-chip"><span>SES6000 Dissertation</span></div>
                  <div class="module-chip"><span>PSY6302 Individual Differences</span></div>
                  <div class="module-chip"><span>PSY6310 Contemporary Issues in Psychology</span></div>
                  <p style="font-size:13px;color:var(--ukmc-gray);margin:14px 0 6px">Optional modules:</p>
                  <div class="module-chip"><span>PSY6305 Working with Teams</span></div>
                  <div class="module-chip"><span>PSY6307 Cognitive Neuroscience</span></div>
                  <div class="module-chip"><span>PSY6314 Clinical Psychology</span></div>
                  <div class="module-chip"><span>PSY6315 Positive Psychology</span></div>
                  <div class="module-chip"><span>PSY6316 Psychology Placement</span></div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-entry">Entry requirements</button>
              </h2>
              <div id="acc-entry" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <h6>Mandatory requirements</h6>
                  <ul>
                    <li>All applicants, whichever entry route, must attend the Prepare for Foundation (PFF) or Prepare for Degree (PFD) admissions assessment and successfully complete it, along with submitting full eligibility documentation, to receive a final offer.</li>
                    <li>The assessment covers a variety of activities assessing academic ability, engagement and conduct relevant to the course.</li>
                    <li>Applicants should demonstrate genuine commitment and motivation for higher education study in this subject.</li>
                  </ul>
                  <h6>Academic and advanced entry routes</h6>
                  <ul>
                    <li>Applicants with a Level 3 or equivalent qualification are categorised as "Academic Route" when they submit evidence of prior learning. More information on Level 3 and equivalent qualifications is available at <a href="http://www.ucas.com" target="_blank" rel="noopener">ucas.com</a>.</li>
                    <li>Not all UKMC courses offer advanced entry — the course title indicates whether it is a "top up" or a 4-year "foundation year" route. Admissions will assess based on the documentation provided, or applicants can contact admissions for clarification.</li>
                  </ul>
                  <h6>Non-academic and mature student route</h6>
                  <ul>
                    <li>Mature students with relevant work experience wishing to further their career through higher education are welcomed.</li>
                    <li>These applicants are processed through the PFF (Foundation Route, Level 3) or PFD (Year One, Level 4+) activity. Additional entry requirements may apply for Level 4+ or accredited courses.</li>
                  </ul>
                  <h6>Awarding partner and verification notes</h6>
                  <p>UKMC works to the awarding university's admissions entry requirements, which may be updated from time to time. Admissions may request further documentation to confirm eligibility at any stage, in line with the partner's Admissions Policy, regulatory requirements, and UKMC's own Fraud Prevention and Verification Statement.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-teaching">Teaching</button>
              </h2>
              <div id="acc-teaching" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>Teaching is delivered through a blended learning approach — lectures, seminars, workshops and project-based learning — with interactive, practice-focused activities that build professional skills alongside academic understanding.</p>
                  <p>You're supported throughout by the Virtual Learning Environment (VLE), where learning materials, assessment briefs and feedback are accessed. Teaching emphasises collaboration, reflective practice and applied learning.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-assess">Assessments</button>
              </h2>
              <div id="acc-assess" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>Assessment evaluates both academic knowledge and practical skills through a range of methods:</p>
                  <ul>
                    <li>Written coursework such as essays and reports</li>
                    <li>Laboratory reports and research projects</li>
                    <li>Presentations and group work</li>
                    <li>Portfolios and reflective assignments</li>
                    <li>Online tests and case studies</li>
                    <li>Dissertation and research project</li>
                  </ul>
                  <p>Assessments build critical thinking, research capability and communication skills, applying theory to real-world scenarios to prepare you for employment or further study. Continuous feedback supports your development throughout the course.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-why">What makes this degree special?</button>
              </h2>
              <div id="acc-why" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>With a strong emphasis on employability, real-world application and understanding human behaviour, studying Psychology at UKMC in partnership with Health Sciences University (HSU) will help you develop the knowledge, skills and confidence to make a meaningful impact in people's lives. Students who study with us:</p>
                  <ul>
                    <li>Develop a scientific understanding of human behaviour, cognition, emotion and mental wellbeing.</li>
                    <li>Explore contemporary issues including mental health, resilience, wellbeing, social influence and behaviour change.</li>
                    <li>Build highly sought-after skills in critical thinking, research, data analysis, communication and problem-solving.</li>
                    <li>Apply psychological knowledge to real-world challenges across healthcare, education, business and community settings.</li>
                    <li>Learn from experienced academics and practitioners who bring psychology to life through practical examples and current research.</li>
                    <li>Develop their professional identity and transferable skills from day one, preparing for a wide range of careers and postgraduate opportunities.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-career">Future career paths</button>
              </h2>
              <div id="acc-career" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>A BSc (Hons) Psychology from UKMC, delivered in partnership with Health Sciences University (HSU), opens doors to a wide range of careers where understanding people and behaviour is key, including:</p>
                  <ul>
                    <li>Clinical and Mental Health Services</li><li>Counselling and Wellbeing Support</li>
                    <li>Educational Psychology and Education</li><li>Forensic and Criminal Justice Services</li>
                    <li>Health and Community Services</li><li>Human Resources and Talent Development</li>
                    <li>Marketing and Consumer Behaviour</li><li>Research and Data Analysis</li>
                    <li>User Experience (UX) Research</li><li>Behaviour Change and Public Health</li>
                    <li>Youth, Family and Community Support</li><li>Organisational and Business Psychology</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-cities">Study in cities that help you understand people</button>
              </h2>
              <div id="acc-cities" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                <div class="accordion-body">
                  <p>This course, delivered by UKMC in partnership with Health Sciences University (HSU), is taught across some of the UK's most diverse and dynamic cities.</p>
                  <div class="row g-3 mt-2">
                    <div class="col-md-4">
                      <div class="city-card">
                        <h6>Manchester</h6>
                        <p class="mb-0" style="font-size:14.5px">One of the UK's leading centres for healthcare, education, research and innovation — home to major NHS trusts, universities, charities and community organisations exploring mental health, wellbeing and human behaviour.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="city-card">
                        <h6>Derby</h6>
                        <p class="mb-0" style="font-size:14.5px">A city with a strong sense of community and a growing health, education and public services sector — valuable opportunities to understand how psychology supports individuals, families, workplaces and communities.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="city-card">
                        <h6>Sunderland</h6>
                        <p class="mb-0" style="font-size:14.5px">A welcoming, ambitious city with strong links to healthcare, education and community development, and close connections across the wider North East region.</p>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0">Wherever you study, you'll build the knowledge, skills and professional networks that support your future career.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- STUDENT STORIES -->
        <div class="reveal">
          <span class="eyebrow">Student stories</span>
          <h2 class="h3 mb-4">What our students say</h2>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="testimonial-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="avatar">A</div>
                  <div><strong style="font-family:'Poppins'">Adil Majid Mohammed</strong></div>
                </div>
                <p class="mb-0" style="font-size:15px;color:var(--ukmc-gray)">"Studying at UKMC has been an enriching experience, both academically and personally. As a Student Ambassador at the Manchester Campus, I've developed strong leadership and communication skills, gaining invaluable experience for future opportunities."</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="testimonial-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="avatar">R</div>
                  <div><strong style="font-family:'Poppins'">Ruta Paznekaite</strong></div>
                </div>
                <p class="mb-0" style="font-size:15px;color:var(--ukmc-gray)">"I truly enjoy my course at UKMC. The lecturers are incredibly supportive and always positive towards students. The assistance from our Student Success Tutors is tremendously helpful and enriching."</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT: SIDEBAR -->
      <div class="col-lg-4">
        <div class="sidebar-card reveal">
          <div class="sidebar-fee">FY £9,535 · Y1 £9,535 · Y2 £9,535 · Y3 £9,535</div>
          <dl class="keyfacts">
            <dt>Level</dt><dd>Undergraduate</dd>
            <dt>Awarding body</dt><dd>Health Sciences University</dd>
            <dt>Duration</dt><dd>4 years</dd>
            <dt>Mode of study</dt><dd>Full time</dd>
            <dt>Delivery</dt><dd>Weekdays, Evening</dd>
            <dt>Intakes</dt><dd>January, May and September</dd>
            <dt>Campus</dt><dd>Manchester, Derby, Sunderland</dd>
          </dl>
          <a href="https://mymac.ukmc.ac.uk/invite/ukmc" class="btn btn-ukmc-primary w-100 mb-2">Apply Now</a>
          <a href="#enquire" class="btn btn-ukmc-outline-blue">Register your interest</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- STATEMENT BAND -->
<div class="band-blue section text-center">
  <div class="container-xxl reveal">
    <h2 class="mb-3">Ready to take the <span class="hero-highlight">next step?</span></h2>
    <p class="mb-4" style="opacity:.9;max-width:56ch;margin-inline:auto">Register your interest and a member of the team will talk you through entry routes, funding and start dates.</p>
    <a href="#enquire" class="btn btn-ukmc-primary">Register your interest</a>
  </div>
</div>

<!-- ENQUIRY FORM -->
<section class="section section-alt" id="enquire">
  <div class="container-xxl">
    <div class="row justify-content-center text-center mb-5 reveal">
      <div class="col-lg-7">
        <span class="eyebrow">Get in touch</span>
        <h2>Reach out to us for any enquiries</h2>
        <p style="color:var(--ukmc-gray)">We'll be happy to help — a member of the admissions team will be in touch shortly.</p>
      </div>
    </div>
    <div class="row justify-content-center reveal">
      <div class="col-lg-7">
        <form class="form-ukmc bg-white p-4 p-lg-5 rounded-4" style="box-shadow:var(--ukmc-shadow)">
          <div class="row">
            <div class="col-md-6"><label for="fname">Full name *</label><input type="text" class="form-control" id="fname"></div>
            <div class="col-md-6"><label for="femail">Email address *</label><input type="email" class="form-control" id="femail"></div>
          </div>
          <div class="row">
            <div class="col-md-6"><label for="fphone">Phone *</label><input type="tel" class="form-control" id="fphone"></div>
            <div class="col-md-6">
              <label for="fintake">Preferred intake *</label>
              <select class="form-select" id="fintake"><option>January 2027</option><option>May 2027</option><option>September 2027</option></select>
            </div>
          </div>
          <label for="fcampus">Preferred campus location *</label>
          <select class="form-select mb-3" id="fcampus">
            <option>College House, Manchester</option><option>Derby Campus</option><option>Sunderland Campus</option>
          </select>
          <button type="submit" class="btn btn-ukmc-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection