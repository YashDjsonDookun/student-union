<?php
    require_once("./assets/src/includes/config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <?php require_once("assets/src/includes/header.php");?>
                <main class="mdl-layout__content">
                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="banner">
                            <div class="banner-left">
                                <h2 id="welcome-message">Welcome To Student's Union</h2>
                                <div class="banner-left-content">
                                    <div class="banner-left-row">
                                        <img class="checkmark" src="assets/images/Component 1 – 1.png" alt="">
                                        <div class="checkmark-text">
                                            <h3>You Are The Student Union</h3>
                                            <p>At the same time as being enrolled as a student, you are enrolled as a member of the Students' Union.</p>
                                        </div>
                                    </div>
                                    <div class="banner-left-row">
                                        <img class="checkmark" src="assets/images/Component 1 – 1.png" alt="">
                                        <div class="checkmark-text">
                                            <h3>Mission & Values</h3>
                                            <p>To work as a democratic and transparent organization.o foster the cultural and intellectual recreations of its members.</p>
                                        </div>
                                    </div>
                                    <div class="banner-left-row">
                                        <img class="checkmark" src="assets/images/Component 1 – 1.png" alt="">
                                        <div class="checkmark-text">
                                            <h3>Vision</h3>
                                            <p>To promote the expansion and development of student services as provided by the University for the benefit of students.</p>
                                        </div>
                                    </div>
                                    <button style=" background-color: #429DD1; width: 80%; margin: 1vh auto; color: white; font-weight: bold;" id="learnMore-btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-learnmore">
                                        Learn More >
                                    </button>
                                </div>
                            </div>
                            <div class="banner-right">
                                <img id="proud-longhair" src="assets/images/proud-student-with-long-hair_1149-433.jpg.png" alt="">
                            </div>
                        </div>
                        <section class="sectionOne">
                            <div class="sectionOne-Top">
                                <div class="leftPortion">
                                    <h4><strong><u>Welcome To Student Union</u></strong></h4>
                                    <p>
                                        <br>
                                        YOU ARE THE STUDENTS' UNION!
                                        <br>
                                        <br>
                                        At the same time as being enrolled as a student, you are enrolled as a member of the Students' Union.
                                        One of the key objectives of your Students' Union is to resolve issues that students encounter while at university.
                                        <br>
                                        <br>
                                        The first step to resolving issues is identifying them.
                                        <br>
                                        <br>
                                        Whether you're on the move, on your phone, on campus, on facebook; wherever you are, we're listening!
                                        Let us know what's bothering you.
                                        <br>
                                        <br>
                                        You can come and see us at Reduit, Student Centre, find us regularly out and about on campus, email us, phone us, text us, post on our wall and group.
                                        Whatever suits you at the same time you need us; take your pick.</p>
                                </div>
                                <div class="rightPortion">
                                    <h4><strong><u>The Student's Union</u></strong></h4>
                                    <p>
                                        <br>
                                        The Students’ Union is the official organisation of the students of the University. It is run for students by the students under its own constitution and is the centre of student non-academic activities.
                                        <br>
                                        <br>
                                        The two main functions of the Union are:
                                        <br>
                                        <br>
                                        (i) to act as the representative body in all matters concerning the students; and
                                        (ii) to promote and provide for the welfare and the social, cultural and educational activities of the students.
                                        <br>
                                        <br>
                                        All students whether enrolled on a full-time or part-time basis are members of the Union. The Executive Committee of the Union is made up of four office-bearers elected from among the students and one elected representative from each of the five Faculties. The office-bearers are elected by all registered students of the University whereas the Faculty’s representatives are elected by students of each Faculty.
                                        <br>
                                        <br>
                                        The administrative business and all other activities take place at the Students’ Centre. The Union is empowered to recognise and finance students’ societies dealing with recreational activities as well as those that deal with academic subjects and those that cover topics of concern to the students.
                                        <br>
                                        <br>
                                        It has its own web page and a radio campus through which it communicates with the student community.
                                        <br>
                                        <br>
                                        The University has a close relationship with the Students’ Union and seeks wherever possible, to involve the Students’ Union in its decision making processes thus providing us with direct knowledge of and influence on the development of policies and procedures relating to teaching and learning and their welfare.</p>
                                </div>
                            </div>
                            <div class="sectionOne-Bottom">
                                <h4><strong><u>MISSION, VISION & VALUES</u></strong></h4>
                                <p>To represent and protect the members of the Union on matters affecting their interests and welfare.
                                    To work as a democratic and transparent organization.
                                    To actively pursue good relations with Clubs and Societies.
                                    To provide a recognized representative channel between its members and the university authorities, its subsidiaries and between representatives or organs of any other external body.
                                    To foster the cultural, intellectual, social and athletic recreations of its members.
                                    To provide a means for the nomination of the student representative. The Union may nominate student representative onto committee board concerning students' affairs.
                                    To promote the expansion and development of student services as provided by the University for the benefit of students.
                                    To ensure that no member is discriminated against on grounds of gender, marital status, family status, nationality, sexual orientation, religion, political belief, age, disability or race</p>
                            </div>
                        </section>
                        <section class="section-OfficeBearers">
                            <?php require_once("./assets/src/includes/ob.php")?>
                        </section>
                        <section class="section-appointment">
                            <div class="section-appointment-label">
                                <h4>In an emgergency? Need help Now?</h4>
                                <h5>Let Us Know What's Bothering You.</h5>
                            </div>
                            <div class="section-appointment-btn">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-appointment")>
                                    Book An Appointment
                                </button>
                            </div>
                        </section>
                        <section class="enrolment">
                            <div class="enrolment-content">
                                <div class="enrolment-left">
                                    <img src="http://sites2019.uom.ac.mu/studentsunion/images/advertopendays2020.jpg" alt="">
                                </div>
                                <div class="enrolment-right">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-apply" onClick="applyCourse()">
                                        Apply Now!
                                    </button>
                                </div>
                            </div>
                        </section>
                        <section class="section-facRep">
                            <h4><strong><u>Reach Out To Your Faculty Representatives</u></strong></h4>
                            <div class="section-facRep-tile">
                                <?php include("./assets/src/includes/showFacRep.php") ?>
                            </div>
                        </section>
                        <section class="wherearewe">
                            <h3><strong><u>Where To Find Us?</u></strong></h3>
                            <div class="wherearewe-content">
                                <div class="wherearewe-left">
                                    <div class="wherearewe-left-img">
                                        <img src="http://sites2019.uom.ac.mu/studentsunion/images/files/LOCATION.jpg" alt="">
                                    </div>
                                    <div class="wherearewe-left-text">
                                        <h4>University Of Mauritius Student's Union</h4>
                                        <p>Student's Union Office, 1st Floor Student Center, University Of Mauritius, Reduit</p>
                                        <p><span class="material-icons">phone</span><strong>Tel: 403-7400 Ext: 4016</strong></p>
                                        <p><span class="material-icons">mail</span><strong>Email: presidentsu@uom.ac.mu</strong></p>
                                    </div>
                                </div>
                                <div class="wherearewe-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4723.363465436116!2d57.49531131553646!3d-20.23416165306625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDE0JzAzLjAiUyA1N8KwMjknNTEuMCJF!5e1!3m2!1sen!2smu!4v1590582147952!5m2!1sen!2smu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </section>
                        <div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
                            <div style="margin: auto;" class="mdl-snackbar__text"></div>
                            <button class="mdl-snackbar__action" type="button"></button>
                        </div>
                        <section class="footer">
                            <?php require_once("./assets/src/includes/footer.php")?>
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </body>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
</html>