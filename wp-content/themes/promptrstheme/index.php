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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa voluptate quas est quibusdam libero suscipit adipisci ad incidunt a, assumenda odio, tempore quae officiis nobis, ab inventore veniam quidem?</p>
</div>
<div class="centerdiv">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis praesentium totam libero cumque, illum dolor aperiam temporibus eos incidunt. Laborum officiis mollitia maiores magni culpa delectus ab illum molestias atque.Voluptatum recusandae, earum, quos illum eius praesentium iure nisi laborum molestias a, autem dolore eligendi cupiditate ea delectus quod inventore. Distinctio repudiandae voluptates accusamus aspernatur ipsum voluptate quas nostrum vero.</p>
</div>
<button type="button" class="btn btn-success"><a href="<?php echo home_url().'/contact'?>">Contact Us</a></button>
<?php get_footer(); ?>
