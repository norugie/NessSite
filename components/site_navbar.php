<!-- Site Backend Connection Initialization -->
<?php

    require '../nisgaa/functions/site.php';
    $schoolInfo = 3;
    $schoolContent = 3;
    $info = $site->siteInformation($database, $schoolInfo);
    $quick_links = $site->linkList($database, 'Quick Links', $schoolContent);
    $events = $site->eventList($database, $schoolContent);

?>

<!-- Top bar-->
<div class="top-bar">
    <div class="row d-flex align-items-center">
    <div class="col-md-6 d-md-block d-none">
        <p>Contact us at <?php echo $info['school_phone']; ?> or <?php echo $info['school_email']; ?>.</p>
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-md-end justify-content-between">
        <div class="login"><a href="https://webdev.nisgaa.bc.ca/<?php if(isset($_SESSION['id']) && isset($_SESSION['type'])){ ?>cms/<?php } else { ?>login<?php } ?>" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-md-inline-block"><?php if(isset($_SESSION['id']) && isset($_SESSION['type'])){ ?>Hello, <?php echo $_SESSION['firstname']; ?><?php } else { ?>Login<?php } ?></span></a></div>
        <ul class="social-custom list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/nisgaa.sd92/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="mailto:<?php echo $info['school_email']; ?>"><i class="fa fa-envelope"></i></a></li>
        </ul>
        </div>
    </div>
    </div>
</div>
<!-- Top bar end-->
<!-- Navbar Start-->
<header class="nav-holder make-sticky">
<div id="navbar" role="navigation" class="navbar navbar-expand-lg">
    <a href="/" class="navbar-brand home"><img src="/nisgaa-icon-banner.png" alt="Nisga'a SD92 Icon" class="d-none d-md-inline-block"><img src="/nisgaa-icon-sd92.png" alt="Nisga'a SD92 Icon" class="d-inline-block d-md-none"><span class="sr-only">Nisga'a - go to homepage</span></a>
    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
    <div id="navigation" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item"><a href="/">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="/inquiries" class="nav-link">Inquiries</a></li>
        <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Resources <b class="caret"></b></a>
            <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="/general_resources" class="nav-link">General Resources</a></li>
            <li class="dropdown-item"><a href="/teacher_resources" class="nav-link">Teacher Resources</a></li>
            <li class="dropdown-item"><a href="/learning_resources" class="nav-link">Learning Resources</a></li>
            <li class="dropdown-item"><a href="/student_resources" class="nav-link">Student Resources</a></li>
            <li class="dropdown-item"><a href="/parent_resources" class="nav-link">Parent Resources</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="/news">School News</a></li>
        <li class="nav-item"><a href="/contacts" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#search"><i class="fa fa-search fa-lg"></i><span class="d-inline-block d-md-none">&nbsp;&nbsp;Search</span></a></li>
        </ul>
    </div>
</div>
</header>
<!-- Navbar End-->

<!-- Search Page -->

<div id="search">
    <button type="button" class="close">×</button>
    <form action="/search" method="POST">
        <input type="search" name="search" placeholder="Search for..." autocomplete="off" required>
        <button type="submit" class="btn btn-lg btn-primary">Search</button>
    </form>
</div>

<!-- Search Page End -->