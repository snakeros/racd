<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('apps/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Content</label>
    <textarea name="text"></textarea><br />

    <label for="works">Does it works?</label>
    <textarea name="works"></textarea>

    <input type="submit" name="submit" value="Create news item" />

</form>