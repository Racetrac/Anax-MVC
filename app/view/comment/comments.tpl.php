<hr>

<?php if (is_array($comments) && !empty($comments)) : ?>

<div class='comments'>
<h3>Comments</h3>
<?php foreach ($comments as $id => $comment) : ?>
<form method=POST>
<input type='hidden' name='sourcePage' value='<?=$this->url->create($this->di->request->getCurrentUrl())?>'>
<input type='hidden' name='id' value='<?=$id?>'>
<input type='hidden' name='redirect' value='<?=$this->url->create($this->di->request->extractRoute())?>'>
<article>
    <span class='comment-name'><?=$comment['name']?> - </span>
    <span class='comment-time'><?=date("Y-m-d H:i:s", $comment['timestamp']) ?></span>
    <span class='comment-content'><?=$comment['content']?></span>
    <span class='comment-edit'><input type='Submit' onClick="this.form.action = '<?=$this->url->create('comment/edit')?>'" value='Edit'></span>
    <input type='submit' name='doRemoveOne' value='Remove' onClick="this.form.action = '<?=$this->url->create('comment/removeOne')?>'"/>
    <span class='comment-ip'><?=$comment['ip']?></span>

</article>
</form>
<?php endforeach; ?>
</div>
<?php endif; ?>