<?php 
/*
Template Name: All Posts
*/
get_header();
?>
<?php 
if ( have_posts() ) : 
while ( have_posts() ) : the_post();
?>
<style>
.allblog {padding: 140px 0 40px 0; margin-bottom: 40px;}
.thumbnail img {height: 200px; object-fit: cover; object-position: top;}
.pagination {
clear:both;
padding:20px 0;
position:relative;
font-size:11px;
line-height:13px;
}

.pagination span, .pagination a {
display:block;
float:left;
margin: 2px 2px 2px 0;
padding:6px 9px 5px 9px;
text-decoration:none;
width:auto;
color:#fff;
background: #555;
}

.pagination a:hover{
color:#fff;
background: #3279BB;
}

.pagination .current{
padding:6px 9px 5px 9px;
background: #3279BB;
color:#fff;
}
</style>

<section class="allblog">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row" style="display: flex; flex-wrap: wrap;">
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$type = 'post';
 $args = array(
   'post_type' => $type,
   'post_status' => 'publish',
   'posts_per_page' => 12,
   'ignore_sticky_posts'=> true,
   'paged' => $paged,
 );
 $my_query = null;
 $my_query = new WP_Query($args);
if( $my_query->have_posts() ):

while ($my_query->have_posts()) : $my_query->the_post();
?>
<div class="col-sm-3" style="margin-bottom: 30px;">
<a href="<?php the_permalink(); ?>">
<div class="thumbnail">
<?php 
if ( has_post_thumbnail() ) {
   the_post_thumbnail();
} else {
echo '<img src="https://dummyimage.com/600x400/ccc/000" />';
}
?>
</div>
<h4><?php the_title(); ?></h4>
</a>
</div>
<?php
endwhile;


previous_posts_link('prev', $my_query->max_num_pages);
   echo ' &mdash; ';
   next_posts_link('next', $my_query->max_num_pages);

else :
_e( 'Sorry, no posts matched your criteria.' );
endif;
wp_reset_query();
?>
</div>
</div>
<div class="col-sm-12">
<?php //kriesi_pagination($my_query->max_num_pages);  ?>
</div>
</div>
</div>
</section>

<?php
endwhile; 
endif; 
?>
<?php get_footer(); ?>


============================



function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}