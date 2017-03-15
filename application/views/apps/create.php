<h2><?php echo lang('title.form'); ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('apps/create'); ?>

    <label for="title"><?php echo lang('title'); ?></label>
    <input type="input" name="title" /><br />

    <label for="text"><?php echo lang('description');?></label>
    <textarea name="description"></textarea><br />

    <label for="works"><?php echo lang('question.works'); ?></label>
<select name="works">
  <option value="Yes"><?php echo lang('yes'); ?></option>
  <option value="No">No</option>
</select>

    <input type="submit" name="submit" value="<?php echo lang('submit.application'); ?>" />

</form>