<?php if (is_array($comment)) : ?>
<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create('')?>">
        <fieldset>
        <legend>Edit comment</legend>
        <p><label>Comment:<br/><textarea name='content'><?=$comment['content']?></textarea></label></p>
        <p><label>Name:<br/><input type='text' name='name' value='<?=$comment['name']?>'/></label></p>
        <p><label>Homepage:<br/><input type='text' name='web' value='<?=$comment['web']?>'/></label></p>
        <p><label>Email:<br/><input type='text' name='mail' value='<?=$comment['mail']?>'/></label></p>
        <p class=buttons>
            <input type='hidden' name='redirect' value='<?=$this->url->create($this->di->request->extractRoute())?>'>
            
            <input type='hidden' name='id' value='<?=$id?>'>
            <input type='hidden' name='sourcePage' value='<?=$sourcePage?>'>
            
            <input type='submit' name='doEdit' value='Save' onClick="this.form.action = '<?=$this->url->create('comment/doEdit')?>'"/>
            <input type='reset' value='Reset'/>
            <input type='submit' name='doRemoveOne' value='Remove' onClick="this.form.action = '<?=$this->url->create('comment/removeOne')?>'"/>
        </p>
        </fieldset>
    </form>


<?php endif; ?>
</div>