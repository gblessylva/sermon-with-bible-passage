<?php 
class Manage_sermon_columns {
    public function __construct()
    {
        add_filter( 'manage_sermons_posts_columns', [$this, 'wondah_realestate_columns'] );
        add_action( 'manage_sermons_posts_custom_column', [$this, 'wondah_realestate_column'], 10, 2);
        add_filter( 'manage_edit-sermons_sortable_columns',[$this, 'wondah_sermons_sortable_columns']);
        // add_action( 'quick_edit_custom_box', [$this, 'sermons_custom_edit_box_pt'], 10, 3 );
        
    }

    public function wondah_realestate_columns( $columns) {
        

        $columns = array(
            'cb' => $columns['cb'],
            'image' => __( 'Image' ),
            'title' => __( 'Title' ),
            'verse' => __( 'Verse', 'sermon' ),
            'passage' => __( 'Passage', 'sermon' ),
          );
          
        return $columns;
    }
    public  function wondah_realestate_column( $column, $post_id ) {
      // Image column
      if ( 'image' === $column ) {
        echo get_the_post_thumbnail( $post_id, array(80, 80) );
      }

      if ( 'verse' === $column ) {
        $verse = get_post_meta( $post_id, '_sermon_bible_verse', true );
    
        if ( ! $verse ) {
          _e( 'No Verse for this sermon' );  
        } else {
          echo $verse;
        }
      }
      
      if ( 'passage' === $column ) {
        $passage = get_post_meta( $post_id, 'sermon_bible_passage', true );
    
        if ( ! $passage ) {
          _e( 'No Passage yet for this sermon' );  
        } else {
          echo $passage;
        }
      }
      
    }
        
    

      
}
new Manage_sermon_columns();