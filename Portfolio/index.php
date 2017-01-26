<?php require_once 'template.php'; ?>
<?php template("Meghz - Resume", content()); ?>
<?php function content() { ob_start(); ?>
<div id="menu">
    <div>
        <ul>
            <li data-menuanchor="home" class="active">
                <a href="#home">
                    Home
                </a>
            </li>
            <li data-menuanchor="experience">
                <a href="#experience">
                    Experience
                </a>
            </li>
            <li data-menuanchor="skills">
                <a href="#skills">
                    Skills
                </a>
            </li>
            <li data-menuanchor="projects">
                <a href="#projects">
                    Projects
                </a>
            </li>
            <li data-menuanchor="contact">
                <a href="#contact">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</div>

<div id="fullpage" class="fullpage-wrapper" style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px);">
    
	<div class="section active" id="home-section" data-anchor="home" style="background: url('../images/background.png') repeat;">
        <div class="intro">
            <div class="home-content" id="about" style="font-family: 'Comic Sans MS', sans-serif; ">
                <img id="icon-image" src="images/meghz.jpg">
                <h1 style="font-family: 'Permanent Marker', cursive; color: #38529F;">
                    Meghanath Reddy
                </h1>
            </br>
        </br>
        <div>
            <h2>
                Software Engineer
            </h2>
        </br>
    </br>
    <h3>
        <a href="https://www.google.com/maps/place/2250+Holly+Hall+St,+Houston,+TX+77054/@29.6849033,-95.3992631,17z/data=!3m1!4b1!4m2!3m1!1s0x8640c006d2fe05e1:0x2cd9ca749bbd4510" target="_blank">
            <span class="glyphicon glyphicon-map-marker" aria-hidden="true">
            </span>
        </a>
        Houston, Texas
    </h3>
</div>
</div>
</div>
</div>

	<div class="section" id="experience-section" data-anchor="experience">
<div class="slide">
<div class="intro">
<div class="thumbnail experience-tile experience-content">
    <div class="caption">
        <h2 class="title">
            Software Engineer
        </h2>
        <h3 class="middle" style="color: #012169">
            Schlumberger
        </h3>
        <h3 class="middle">
            August, 2015 - Present
        </h3>
        <div class="tags">
		<label class="tag">
            .NET
        </label>
        <label class="tag">
            C#
        </label>
        <label class="tag">
            JavaScript
        </label>
        <label class="tag">
            jQuery
        </label>
        <label class="tag">
            WCF
        </label>
        <label class="tag">
            MVC
        </label>
        <label class="tag">
            Entity Framework
        </label>
        <label class="tag">
            RAZOR
        </label>
        </div><div class="summary">
            <h3>
                Summary
            </h3>
            <ul>
                <li>
                    Responsible for full stack web development of Reliability dashboard which displays real-time software, hardware and diagnostic metrics.
                </li>
                <li>
                    Developed web services to process the real-time acquisition data from the field to cater internal business needs.

                </li>
                <li>
                    Designed and developed an automated software deployment system to reduce the commercialization and testing effort for field engineers.
                </li>
                <li>
                    Experienced all the stages of software development from concept to commercialization/deployment. 
                </li>
				
				<li>
                    <b>On the Job Training</b> - Applying Advanced Design patterns (Industrial Logic) | Lean Object-Oriented Design (Industrial Logic).
                </li>
				
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<div class="slide">
<div class="intro">
<div class="thumbnail experience-tile experience-content">
    <div class="caption">
        <h2 class="title">
            Software Engineering Intern
        </h2>
        <h3 class="middle" style="color: #CE1126">
            Halliburton
        </h3>
        <h3 class="middle">
            May, 2014 - August, 2014
        </h3>
        <div class="tags"><label class="tag">
            .NET
        </label>
        <label class="tag">
            C#
        </label>
        <label class="tag">
            WPF
        </label>
        <label class="tag">
            MVVM
        </label>
        <label class="tag">
            XAML
        </label>
        <label class="tag">
            NUnit
        </label>
        </div><div class="summary">
            <h3>
                Summary
            </h3>
            <ul>
                <li>
                    Designed and developed a WPF software application using C#, XAML and .NET Framework 4.0.
                </li>
                <li>
                    Extensively used the MVVM architecture for interactive GUI and easy maintenance.
                </li>
                <li>
                    Implemented Unit testing for the individual modules and components in the view model.
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<div class="slide">
<div class="intro">
<div class="thumbnail experience-tile experience-content">
    <div class="caption">
        <h2 class="title">
            Graduate Research Assistant
        </h2>
        <h3 class="middle" style="color: #500000">
            Texas A&#38M University-College Station
        </h3>
        <h3 class="middle">
            January, 2014 - July, 2015
        </h3>
        <div class="tags"><label class="tag">
            JAVA-EE
        </label>
        <label class="tag">
            LAMP
        </label>
        <label class="tag">
            REST
        </label>
        <label class="tag">
            Jersey
        </label>
        <label class="tag">
            PHP
        </label>
        <label class="tag">
            JavaScript
        </label>
        <label class="tag">
            Ajax
        </label>
        <label class="tag">
            jQuery
        </label>
        <label class="tag">
            ORM
        </label>
        <label class="tag">
            JUnit
        </label>
		</div>
        <h4 class="middle">
            Professor: Dr. Frank Shipman
        </h4>
        <div class="summary">
            <h3>
                Summary
            </h3>
            <ul>
                <li>
                    <span class="label label-danger">
                        Thesis
                        <br>
                            <br>
                            </span>
                            Data prediction games and their use for educational purposes
                        </li>
                        <li>
                            Developed a Fantasy Climate Change game to evaluate the effect of communication in prediction games.
                        </li>
                        <li>
                            Deployed the web application and conducted a user study with 50 participants for evauluation and analysis.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide">
    <div class="intro">
        <div class="thumbnail experience-tile experience-content">
            <div class="caption">
                <h2 class="title">
                    Graduate Teaching Assistant
                </h2>
                <h3 class="middle" style="color: #500000">
                    Texas A&#38M University-College Station
                </h3>
                <h3 class="middle">
                    September, 2014 - July, 2015
                </h3>
                <h4 class="middle">
                    Course: Graduate Software Engineering
                </h4>
                <h4 class="middle">
                    Instructor: Dr. Hank Walker
                </h4>
                <div class="summary">
                    <h3>
                        Summary
                    </h3>
                    <ul>
                        <li>
                            Assisted the instructor in preparing handouts, grading the assignments, and evaluating the projects.
                        </li>
                        <li>
                            Provided lab support and instructed concepts of software engineering, agile methodologies and SDLC.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide">
    <div class="intro">
        <div class="thumbnail experience-tile experience-content">
            <div class="caption">
                <h2 class="title">
                    Graduate Teaching Assistant
                </h2>
                <h3 class="middle" style="color: #500000">
                    Texas A&#38M University-College Station
                </h3>
                <h3 class="middle">
                    August, 2013 - May, 2014
                </h3>
                <h4 class="middle">
                    Course: Intermediate Programming and Design
                </h4>
                <h4 class="middle">
                    Instructor: Dr. Bjarne Stroustrup and Dr. Walter C Daugherity
                </h4>
                <div class="summary">
                    <h3>
                        Summary
                    </h3>
                    <ul>
                        <li>
                            Conducted the lab sessions in Windows and UNIX environments, and taught various programming concepts of C++.
                        </li>
                        <li>
                            Assisted the instructor in preparing and grading the assignments, projects and homework’s in C++ language.
                        </li>
                        <li>
                            Contributed to the delivery of teaching and tutorials, and providing personal academic support and mentoring for undergraduate sections.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slide">
    <div class="intro">
        <div class="thumbnail experience-tile experience-content">
            <div class="caption">
                <h2 class="title">
                    Student
                </h2>
                <h3 class="middle" style="color: #500000">
                    Texas A&#38M University-College Station
                </h3>
                <h3 class="middle">
                    August, 2013 - August, 2015
                </h3>
                <h4 class="middle">
                    Master of Science in Computer Science
                </h4>
                <div class="summary">
                    <span class="label label-danger">
                        Thesis
                        <br>
                            <br>
                            </span>
                            Data prediction games and their use for educational purposes
                        </div>
                        <br>
                            <div class="summary">
                                <h3>
                                    Courses:
                                </h3>
                                <ul>
                                    <li>
                                        Analysis of Algorithms
                                    </li>
                                    <li>
                                        Software Engineering
                                    </li>
                                    <li>
                                        Computer-Human Interaction
                                    </li>
                                    <li>
                                        Computer Architecture
                                    </li>
                                    <li>
                                        Computer Architecture
                                    </li>
                                    <li>
                                        Programming Languages
                                    </li>
                                    <li>
                                        Data Structures
                                    </li>
                                    <li>
                                        Database Systems
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="section" id="skills-section" data-anchor="skills">
            <div class="intro">
                <div id="skills-grid" class="skills-content">
                    <h2>
                        Stay hungry, Stay Foolish - Steve Jobs!
                    </h2>
                </br>
                <div class="row">
                    <div class="col-xs-12 col-md-6" id="skills-grid-1">
                    </div>
                    <div class="col-xs-12 col-md-6" id="skills-grid-2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="projects-section" data-anchor="projects">
        <div class="slide">
            <div class="intro">
                <div class="thumbnail projects-tile projects-content">
                    <div class="caption">
                        <h2 class="title">
                            Fantasy Climate Change
                            <br>
                                <br>
                                    <span class="label label-danger">
                                        Thesis
                                    </span>
                                </h2>
                                <div class="tags"><label class="tag">
                                    JAVA-EE
                                </label>
                                <label class="tag">
                                    LAMP
                                </label>
                                <label class="tag">
                                    REST
                                </label>
                                <label class="tag">
                                    MVC
                                </label>
                                <label class="tag">
                                    Jersey
                                </label>
                                <label class="tag">
                                    PHP
                                </label>
                                <label class="tag">
                                    JavaScript
                                </label>
                                <label class="tag">
                                    jQuery
                                </label>
                                <label class="tag">
                                    AJAX
                                </label>
                                <label class="tag">
                                    Custom ORM
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            This thesis investigates asynchronous and synchronous communication and their influence on player commitment. A comparative analysis of use in a prototype prediction game provided insights into the relationships between the different modes of communication and player engagement.
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="documents/thesis.pdf" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Read more...
                                        </span>
                                    </a>
                                    <a href="documents/thesis_abstract.png" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Abstract
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="slide">
            <div class="intro">
                <div class="thumbnail projects-tile projects-content">
                    <div class="caption">
                        <h2 class="title">
                            Smarty - Class Manager and Progress Tracker
                            <br>
                                <br>
                                </h2>
                                <div class="tags"><label class="tag">
                                    JAVA-EE
                                </label>
                                <label class="tag">
                                    LAMP
                                </label>
                                <label class="tag">
                                    REST
                                </label>
                                <label class="tag">
                                    MVC
                                </label>
                                <label class="tag">
                                    Jersey
                                </label>
                                <label class="tag">
                                    PHP
                                </label>
                                <label class="tag">
                                    JavaScript
                                </label>
                                <label class="tag">
                                    jQuery
                                </label>
                                <label class="tag">
                                    AJAX
                                </label>
                                <label class="tag">
                                    Hibernate
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            A collaborative class management and progress tracking web application using PHP, JavaScript, AJAX, JAX-RS, Hibernate and Tomcat. Deployed and maintaining with active users on a small scale LAMP server.

                                        </li>
                                    </ul>
                                </div>
                                <h3>

                                    <a href="http://smarty.meghz17.com/login.php" target='_blank' style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Link
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
				
				
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    Marine Cadastre
                                </h2>
                                <div class="tags"><label class="tag">
                                    JAVA-EE
                                </label>
                                <label class="tag">
                                    LAMP
                                </label>
                                <label class="tag">
                                    REST
                                </label>
                                <label class="tag">
                                    Jersey
                                </label>
                                <label class="tag">
                                    JavaScript
                                </label>
                                <label class="tag">
                                    jQuery
                                </label>
                                <label class="tag">
                                    Hibernate
                                </label>
                                <label class="tag">
                                    JUnit
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            A web application to efficiently track vessel and cadastre management over the national marine borders.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    Pinning Sheet - WPF Standalone Application
                                </h2>
                                <div class="tags"><label class="tag">
                                    .NET
                                </label>
                                <label class="tag">
                                    C#
                                </label>
                                <label class="tag">
                                    WPF
                                </label>
                                <label class="tag">
                                    MVVM
                                </label>
                                <label class="tag">
                                    XML
                                </label>
                                <label class="tag">
                                    XAML
                                </label>
                                <label class="tag">
                                    ReSharper
                                </label>
                                <label class="tag">
                                    NUnit
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            The project mainly focused on developing a WPF standalone application using C# and XAML. It reduces the overhead involved in deriving the mathematical model manually and automates the process. It is mainly used in the field to calculate the number of pins required while using different firing heads and with different models.
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="documents/Internship%20Report.pdf" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Read more...
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    Online Banking System Using Design Patterns
                                </h2>
                                <div class="tags"><label class="tag">
                                    JAVA-SE
                                </label>
                                <label class="tag">
                                    Design Patterns
                                </label>
                                <label class="tag">
                                    Swing
                                </label>
                                <label class="tag">
                                    JDBC
                                </label>
                                <label class="tag">
                                    MySQL
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            Developed a prototype of Online-Banking system implementing several design patterns in JAVA.
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="documents/banking-system-design.pdf" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Read more...
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    Online Recommendation and Study System
                                </h2>
                                <div class="tags"><label class="tag">
                                    PHP
                                </label>
                                <label class="tag">
                                    AJAX
                                </label>
                                <label class="tag">
                                    JavaScript
                                </label>
                                <label class="tag">
                                    jQuery
                                </label>
                                <label class="tag">
                                    HTML5
                                </label>
                                <label class="tag">
                                    CSS3
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            Implemented a recommendation system using the Content based filtering and Colloborative filtering algorithm for the recommendation.
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="documents/online_study_recommendation.pdf" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Read more...
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    Paris Traceroute Optimization Using Load Balancers
                                </h2>
                                <div class="tags"><label class="tag">
                                    C++
                                </label>
                                <label class="tag">
                                    TCP
                                </label>
                                <label class="tag">
                                    FTP
                                </label>
                                <label class="tag">
                                    HTTP
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            Designed the Paris trace route with more efficiency and improved performance using the Load Balancer.
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="documents/paris-traceroute.pdf" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Read more...
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    High-Performance Neural Branch Predictor with Perceptrons
                                </h2>
                                <div class="tags"><label class="tag">
                                    C++
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            Implemented the Low Power Analog Neural Branch Prediction with Perceptrons.
                                        </li>
                                    </ul>
                                </div>
                                <h3>
                                    <a href="documents/614-Project-Report.pdf" style="text-decoration: none; float: right">
                                        <span class="label label-danger" style="font-family: 'Comic Sans MS',  sans-serif;">
                                            Read more...
                                        </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="intro">
                        <div class="thumbnail projects-tile projects-content">
                            <div class="caption">
                                <h2 class="title">
                                    Multi Associativity - LRU and Random Cache Implementation
                                </h2>
                                <div class="tags"><label class="tag">
                                    C++
                                </label>
                                </div><div class="summary">
                                    <h3>
                                        Summary
                                    </h3>
                                    <ul>
                                        <li>
                                            Implemented a multilevel associations cache having the flexibility of LRU and Random methods as a part of the graduate Computer Architecture graduate coursework.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
	<div class="section" id="contact-section" data-anchor="contact" style="background: url('../images/background.png') repeat;">
                <div class="intro">
                    <div class="contact-content">
                        <div id="contact-info">
                            <div class="row">
                                <div class="col-md-6" style="padding-bottom: 8%">
                                    <h3 class="title">
                                        <span class="label label-danger">
                                            meghmeg17@gmail.com
                                        </span>
                                    </h3>
                                </div>
                                <div class="col-md-6" style="padding-bottom: 8%">
                                    <h3 class="title">
                                        <span class="label label-danger">
                                            +1 979-(739)-5339
                                        </span>
                                    </h3>
                                </div>
                            </div>
                            <div id="icons-big">
                                <a href="https://www.linkedin.com/in/meghanathreddy" target="_blank" title="My professional network!">
                                    <img class="icon-image" src="images/linkedin.png" >
                                </img>
                            </a>
                            <a href="https://www.facebook.com/meghnath" target="_blank" title="My social network!">
                                <img class="icon-image" src="images/facebook.png" >
                            </img>
                        </a>
                        <a href="https://www.instagram.com/meghz17/" target="_blank" title="My image network :P!">
                            <img class="icon-image" src="images/instagram.png">
                        </img>
                    </a>
                </div>
                <label style="margin: 3%;">
                    Please contact if you have any suggestions or queries!
                </label>
            </div>
            <div id="disqus_thread">
                <h3 class="title">
                    <a href="#" id="discussion">
                        <span class="label label-default">
                            Discussion
                            <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true">
                            </span>
                        </span>
                    </a>
                </h3>
                <noscript>
                    Please enable JavaScript to view the
                    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
                        comments powered by Disqus.
                    </a>
                </noscript>
            </div>
        </div>
    </div>
</div>
</div>

<div id="infoMenu">
	<div id="view-resume" style="z-index: 4;">
    <a href="documents/Junnutula, Meghanath, Resume.pdf" target="_blank">
        <img class="resume-image" src="images/resume.gif">
    </a>
</div>
	<div class="scroll-bottom" style="display: block; z-index: 3;">
    <a href="#" style="color: gray">
        Scroll
    </a>
    <br>
        <span class="glyphicon glyphicon-menu-down" aria-hidden="true">
        </span>
    </div>
    <div class="scroll-top" style="display: none; z-index: 3;">
        <span class="glyphicon glyphicon-menu-up" aria-hidden="true">
        </span>
        <br>
            <a href="#" style="color: gray">
                Scroll
            </a>
        </div>
	<div id="icons" style="display: block; z-index: 3;">
            <a href="https://www.linkedin.com/in/meghanathreddy" target="_blank" title="My professional network!">
                <img class="icon-image" src="images/linkedin.png">
            </a>
            <a href="https://www.facebook.com/meghnath" target="_blank" title="My social network!">
                <img class="icon-image" src="images/facebook.png">
            </a>
            <a href="https://www.instagram.com/meghz17/" target="_blank" title="My image network :P!">
                <img class="icon-image" src="images/instagram.png">
            </a>
        </div>
    </div>
    
	<script type="text/javascript">
        changeBackground();
        skillsLoad1();
        skillsLoad2();
        $(document).ready(function() {
			
        $('#fullpage').fullpage({
        anchors: ['home', 'experience', 'skills', 'projects', 'contact'],
        menu: '#menu',
        css3: true,
        scrollingSpeed: 1000,
        scrollOverflow: true,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',
        keyboardScrolling: true,
        animateAnchor: true,
        afterLoad: function(anchorLink, index){
        if(index == fullpage.childElementCount){
        $(".scroll-bottom").hide();
        $(".scroll-top").show();
        $("#icons").hide();
        }
        else{
        $(".scroll-bottom").show();
        $(".scroll-top").hide();
        $("#icons").show();
        }
        },
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
        if(slideIndex == 0)
        {
        }
        else if(slideIndex == 5)
        {
        }
        else
        {
        }
        },
        onLeave: function(index, nextIndex, direction){
        }
        });

	
		if(("#fp-tableCell").scrollHeight > ("#fp-tableCell").clientHeight)
		{
			$("#menu").style.boxShadow = "5px 5px 8px #888";
		}
		
        });
				

        $(".scroll-bottom a").click(function(e){
        $.fn.fullpage.moveSectionDown();
        });
        $(".scroll-top a").click(function(e){
        $.fn.fullpage.moveSectionUp();
        });
        
		
		
        /**
        * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
        */
        /* var disqus_config = function () {
        this.page.url = 'http://resume.meghz17.com/'; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = 'meg17031992meg'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = '//meghz17.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })(); */
    </script>
    <?php return ob_get_clean(); } ?>