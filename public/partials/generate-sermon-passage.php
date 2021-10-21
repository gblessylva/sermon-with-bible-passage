<?php
class Generate_sermon_passage {
    public function __construct( ) {
        add_action('add_meta_boxes',  [$this, 'sermon_bible_passage_metabox_fileds']);
        add_action('save_post', [$this, 'save_sermon_custom_fields']);

    }

public function sermon_bible_passage_metabox_fileds(){
 
        add_meta_box(
                'sermon_bible_passage_metabox',
                'Sermon Bible Passage',
                [$this, 'sermon_bible_passage_metabox'],
                'sermons'
            );
    }
     
public function sermon_bible_passage_metabox(){
     
        global $post;
     
        // Get Value of Fields From Database
        $sermon_bible_verse = get_post_meta( $post->ID, '_sermon_bible_verse', true);
        $sermon_bible_passage = get_post_meta( $post->ID, 'sermon_bible_passage', true);
         
    ?>
         
    <div class="row">
        <div class="label">Add the Bible Verse <i>John 3: 16</i></div>
        <div class="widefat"><input class="widefat" type="text" name="_sermon_bible_verse" size= '30' value="<?php echo $sermon_bible_verse;?> " </div>
    </div>
     
    <br/>
    
     
    <br/>
     
    <div class="row">
        <div class="label">Enter Bible Passage <i>For God so love the World</i></div>
        <div class="widefat">
            <textarea class="widefat" rows="5" name="sermon_bible_passage"><?php echo $sermon_bible_passage; ?></textarea>
        </div>
    </div>
     
    <?php    
    }
    
public function save_sermon_custom_fields(){
        global $post;
        if(isset($_POST["_sermon_bible_verse"])) :
        update_post_meta($post->ID, '_sermon_bible_verse', $_POST["_sermon_bible_verse"]);
        endif;
     
        if(isset($_POST["_diwp_radio_field"])) :
        update_post_meta($post->ID, '_diwp_radio_field', $_POST["_diwp_radio_field"]);
        endif;
     
        if(isset($_POST["_diwp_checkbox_field"])) :
        update_post_meta($post->ID, '_diwp_checkbox_field', $_POST["_diwp_checkbox_field"]);
        endif;
     
        if(isset($_POST["_diwp_select_field"])) :
        update_post_meta($post->ID, '_diwp_select_field', $_POST["_diwp_select_field"]);
        endif;
     
        if(isset($_POST["sermon_bible_passage"])) :
        update_post_meta($post->ID, 'sermon_bible_passage', $_POST["sermon_bible_passage"]);
        endif;
     
    }
     
    
}
new Generate_sermon_passage();