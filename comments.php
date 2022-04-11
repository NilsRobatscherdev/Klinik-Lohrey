<?php
    if( post_password_required() ){
        return;
    }
?>

<div class="container comments-area" id="comments">
    <div class="row">
        <div class="col-lg-12">
            <?php
                 $fields = array(
                    'author'            => '<div class="form-group col-lg-6"><div class="label-title"><label for="author">' . _('Name') . '</label> <span class="required">*</span></div> <input id="author"  name="author" type="text" class="form-control comments-input" value="' . esc_attr($commenter['comment_author']) . '" required="required" /></div>',
                    'email'             => '<div class="form-group col-lg-6"><div class="label-title"><label for="email">' . _('Email') . '</label> <span class="required">*</span></div> <input id="email" name="email" type="text" class="form-control comments-input" value="' . esc_attr($commenter['comment_author_email']) . '" required="required" /></div>',
                    //'url'               => '<div class="form-group col-lg-6"><div class="label-title"><label for="url">' . _('Website') . '</label> <span class="required">*</span></div> <input id="url" name="url" type="text" class="form-control comments-input" value="' . esc_attr($commenter['comment_author_url']) . '" required="required" /></div>',
                    'cookies'           => '<p class="comment-form-cookies-consent col-lg-12"><input class="wp-comment-cookies-consent-checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />' .'<label for="wp-comment-cookies-consent">Meinen Namen und E-Mail in diesem Browser speichern, bis ich wieder kommentiere.</label></p>',
                );

                $args = array(
                    'submit_field'      => '<p class="form-submit col-lg-6"><input name="submit" type="submit" id="submit" class="btn btn-submit" value="Kommentar Abschicken"><input type="hidden" name="comment_post_ID" value="219" id="comment_post_ID"><input type="hidden" name="comment_parent" id="comment_parent" value="0"></p>',
                    'comment_field'     => '<div class="form-group col-lg-12"><div class="label-title"><label for="comment">' . _x('Comment', 'noun'). '</label></div><textarea id="comment" name="comment" class="form-control" rows="8" required="true"></textarea></div>',
                    'fields'            => apply_filters( 'comment_form_default_fields', $fields),
                );
                comment_form($args);
            ?>
        </div>

        <ul class="commentlist col-lg-12">
            <?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
        </ul>
    </div>
</div>