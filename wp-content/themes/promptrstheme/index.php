<?php get_header(); ?>
<div class="mainslideshowdiv">
    <?php echo do_shortcode('[crellyslider alias="promptsliderfirst"]')?>
    <a href="<?php echo home_url().'/contact'?>">Contact Us</a>
</div>
<div class="centerdiv">
<p><?php bloginfo('name')?></p>
<p><?php bloginfo('description')?></p>
</div>
<!-- use as a tag for home url -->
<!-- <p><?php echo home_url();?></p>  -->
<div class="parallaldiv">
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa voluptate quas est quibusdam libero suscipit adipisci ad incidunt a, assumenda odio, tempore quae officiis nobis, ab inventore veniam quidem?</p>
    </div>
</div>
<div class="centerdiv">
    <p>Call us for Emergency plumbing, refrigerator repair works.</p>
    <p>We know the importance of keeping fridges cool Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis praesentium totam libero cumque, illum dolor aperiam temporibus eos incidunt. Laborum officiis mollitia maiores magni culpa delectus ab illum molestias atque.Voluptatum recusandae, earum, quos</p>
</div>
<div class="repairlogodiv">
    <img src="<?php bloginfo('template_directory')?>/images/repairlogo.png" class="repairlogo">
    <p>Serving and satisfying NYC since 1999</p>
</div>
<!-- <div class="centerdiv">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis praesentium totam libero cumque, illum dolor aperiam temporibus eos incidunt. Laborum officiis mollitia maiores magni culpa delectus ab illum molestias atque.Voluptatum recusandae, earum, quos</p>
</div> -->
<?php get_footer(); ?>
