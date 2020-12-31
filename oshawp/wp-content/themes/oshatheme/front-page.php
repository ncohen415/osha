<?php
/*
    Template Name: Home Page
 */


//Advanced Custom Fields

$home_page_image                    = get_field('home_page_image');
$description                        = get_field('description');
$register_instructions              = get_field('register_instructions');

//Sections
$stairways_ladders_link             = get_field('stairways_ladders_link');
$concrete_masonry_link              = get_field('concrete_masonry_link');
$electrical_link                    = get_field('electrical_link');
$confined_spaces_link               = get_field('confined_spaces_link');
$cranes_link                        = get_field('cranes_link');
$ergonomics_link                    = get_field('ergonomics_link');
$excavations_link                   = get_field('excavations_link');
$fire_prevention_protection_link    = get_field('fire_prevention_protection_link');
$materials_handling_link            = get_field('materials_handling_link');
$motor_vehicles_link                = get_field('motor_vehicles_link');
$roll_over_protection_link          = get_field('roll_over_protection_link');
$powered_industrial_vehicles_link   = get_field('powered_industrial_vehicles_link');
$scaffolds_link                     = get_field('scaffolds_link');
$tools_link                         = get_field('tools_link');
$welding_cutting_link               = get_field('welding_cutting_link');
$safety_leadership_link             = get_field('safety_leadership_link');


get_header(); ?>

<div class="main">
        <!-- BODY
    ========================================================================================================-->
    <div class="home-container">
        <div class="home-wrapper">
            <div class="image-wrapper">
                <img src="<?php echo $home_page_image; ?>" alt="">
            </div>
            <div class="description">
                <p>
                    <?php 
                       echo $description;
                    ?>
                </p>
            </div>
        </div>
        <div class="login">
            <p><?php echo $register_instructions; ?></p>
            <?php echo do_shortcode('[bbp-register]') ?>
        </div>
    <div class="info-container">
        <div class="info-wrapper">
            <div class="info-content-wrapper">
                <div class="info-questions-wrap">
                    <button class="accordion">Stairways & Ladders</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $stairways_ladders_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Concrete & Masonry</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $concrete_masonry_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Electrical</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $electrical_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Confined Spaces</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $confined_spaces_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Cranes</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $cranes_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Ergonomics</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $ergonomics_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Excavations</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $excavations_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Fire Prevention/Protection</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $fire_prevention_protection_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Materials Handling</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $materials_handling_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Motor Vehicles</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $motor_vehicles_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Roll over Protection</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $roll_over_protection_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Powered Industrial Vehicles</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $powered_industrial_vehicles_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Scaffolds</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $scaffolds_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Tools-Hand & Power</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $tools_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Welding & Cutting</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry direct trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $welding_cutting_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                    <button class="accordion">Foundations for Safety Leadership</button>
                    <div class="panel">
                        <div class="panel-inner">
                        <p>I'm baby street art everyday carry drect trade +1 letterpress church-key. Trust fund pickled enamel pin man bun street art celiac, lomo chambray truffaut etsy snackwave whatever organic activated charcoal viral. Skateboard banjo woke, bicycle rights PBR&B hot chicken vinyl hammock umami blue bottle mustache. </p>
                        <a href="<?php echo $safety_leadership_link; ?>"><button> Read More</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

       

        <!--main-->
    </div>

    <?php get_footer(); ?>

