<?php 

switch ( get_row_layout() ) {
    case 'page_title':
        get_template_part('template-parts/blocks/page-title');
        break;
    case 'text_and_media':
        get_template_part('template-parts/blocks/text-and-video');
        break;
    case 'text_and_image':
        get_template_part('template-parts/blocks/text-and-image');
        break;
    case 'content_highlight_grid':
        get_template_part('template-parts/blocks/content-highlight-grid');
        break;
    case 'logo_group':
        get_template_part('template-parts/blocks/logo-group');
        break;
    case 'image_gallery':
        get_template_part('template-parts/blocks/image-gallery');
        break;
    case 'text':
        get_template_part('template-parts/blocks/text');
        break;
    case 'key_points':
        get_template_part('template-parts/blocks/key-points');
        break;
    case 'blog_posts':
        get_template_part('template-parts/blocks/post-list', null, 'post');
        break;
    case 'case_studies':
        get_template_part('template-parts/blocks/post-list', null, 'case-study');
        break;
    case 'featured_post':
        get_template_part('template-parts/blocks/featured-post');
        break;
    case 'banner':
        get_template_part('template-parts/blocks/banner');
        break;
    default:
        echo '<p>' . get_row_layout() . ' - no code for that block...</p>';
        break;
}
                        
?>