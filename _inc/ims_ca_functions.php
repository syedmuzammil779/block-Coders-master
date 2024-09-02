<?php 
function imsCAAjaxRequest(){

    // Ajax Method Request
    $mode           = $_POST['mode']; //POST, UPDATE, DELETE, GET

    // IMS_ALBUM Detail Request
    $taxID          = 'ims_album';
    $termID         = $_POST['term_ID'];
    $termTitle      = $_POST['term_Title'];
    $termSlug       = Optimiser::uglify($termTitle);

    // Post Detail Request
    $catID          = 59;
    $postID         = $_POST['post_ID'];
    $postTitle      = $termTitle;
    $postSlug       = $termSlug;
    $postContent    = '[image-store album='.$termID.' all=true]';
    $postStatus     = 'Publish';
    $postType       = 'post';
    
    switch ($mode){
        case 'POST':

            //First Insert New Term
            wp_insert_term( 
                $termTitle,
                $taxID,
                array(
                    'description'   => '',
                    'slug'          => $termSlug,
                    'parent'        => 0     
                )
            );

            //Second Insert New Post
            $postARGS = array(
                'post_title'        => $postTitle,
                'post_type'         => $postType,
                'post_status'       => $postStatus,
                'comment_status'    => 'closed',
                'post_category'     => $catID,
                'post_content'      => $postContent
            );
            wp_insert_post( $postARGS );

            //Third Insert Term Meta
            $newTerm = get_term_by( 
                'slug',
                $termSlug,
                $taxID
            );

            $newPostSlug = get_post_field( 'post_name', get_post() );

            if ($newPostSlug == $newTerm):
                $newPID = $newPostSlug->id;
            endif;

            add_term_meta(
                $newTerm->term_id,
                'ims_ca_term-pid',
                $newPID,
                true
            );

            // Finally Create and Encode JSON Array
            $response = [
                'Message'   => 'Successfully added new album: '.$termTitle,
                'Album ID'  => $newTerm->term_id,
                'Post ID'   => $newPID
            ];

            wp_reset_postdata();

            return json_encode($response);

            break;
            
        case 'UPDATE':

            //First Update Term
            wp_update_term( 
                $termID,
                $taxID,
                array(
                    'name'          => $termName,
                    'slug'          => $termSlug   
                )
            );

            //First Update Post
            $postARGS = array(
                'ID'            => $postID,
                'post_title'    => $postTitle,
                'post_slug'     => $postSlug
            );

            wp_update_post( $postARGS );

            break;

    }
    wp_die();
}