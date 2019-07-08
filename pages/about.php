<?php 
    $about = $site->aboutList($database, $schoolContent); 
    $programs = $site->programList($database, $schoolContent);
?>
<div class="col-md-9">
    <!-- ABOUT US CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Nisga'a Elementary Secondary School</h2>
                </div>
                <p class="lead"><?php echo $about['web_desc']; ?></p>
            </div>
        </div>
    </section>
    
    <!-- PROGRAMS CONTENT -->
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>PROGRAMS</h2>
                </div>
                <p class="lead"><?php echo $programs['web_desc']; ?></p>
            </div>
        </div>
    </section>    
</div>