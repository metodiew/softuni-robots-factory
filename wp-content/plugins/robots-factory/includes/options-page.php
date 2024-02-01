<?php
$robots_homepage_post_per_page = get_option( 'robots_homepage_post_per_page' );

if ( empty( $robots_homepage_post_per_page) ) {
    $robots_homepage_post_per_page = 3;
}


// Checks if the is submitted
if ( ! empty( $_POST['robots_save'] ) && $_POST['robots_save'] == 1 ) {

    if ( ! empty( $_POST['robots_homepage_post_number'] ) ) {
        $robots_posts_per_page = esc_attr( $_POST['robots_homepage_post_number'] );
        update_option( 'robots_homepage_post_per_page', $robots_posts_per_page, false );
    }

}
?>

<div class="wrap">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <form action="" method="post">
        <div>
            <label for="custom_option"><?php _e( 'Robots Number of posts on the homage', 'softuni' ); ?></label>
            <input type="number" id="robots_homepage_post_number" name="robots_homepage_post_number" value="<?php echo esc_attr( $robots_homepage_post_per_page );  ?>">
        </div>
        <div>
            <input type="submit" value="Update me">
        </div>
        <input class="primary" type="hidden" name="robots_save" value="1">
    </form>
</div>