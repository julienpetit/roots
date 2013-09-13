<?php
/**
 * Utility functions
 */
function add_filters($tags, $function) {
  foreach($tags as $tag) {
    add_filter($tag, $function);
  }
}

function is_element_empty($element) {
  $element = trim($element);
  return empty($element) ? false : true;
}

function get_first_image( $postID ) {
  $args = array(
    'numberposts' => 1,
    'order' => 'ASC',
    'post_mime_type' => 'image',
    'post_parent' => $postID,
    'post_status' => null,
    'post_type' => 'attachment',
  );

  $attachments = get_children( $args );

  if ( $attachments ) {
    foreach ( $attachments as $attachment ) {
      $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'medium' )  ? wp_get_attachment_image_src( $attachment->ID, 'medium' ) : wp_get_attachment_image_src( $attachment->ID, 'full' );

      $obj = wp_get_attachment_image_src( $attachment->ID , 'medium');
      return $obj[0];
    }
  }
}