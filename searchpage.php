<?php 

/* Template name: Custom Search */
get_header(); 

?>
<!-- SEARCH.PHP -->

<?php

// Set variables from the query string
    if($_GET['txt'] && ! empty($_GET['txt'])) {
        $searchText = $_GET['txt'];
    }

    // Generate a query based on the variables above
    $query = new WP_Query(array(
        's'         => $searchText
    ));

?>

<div class="pageContainer">

    <div class="pageSection">

        <h1>Search Results</h1>

        <p>Search results for '<?php echo $searchText; ?>'</p>
        
        <?php while($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a>
        <?php endwhile; ?>
        
    </div><!-- /.pageSection -->

</div><!-- /.pageContainer -->

<?php get_footer(); ?>