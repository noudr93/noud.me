
<?php echo $this->tag->form(array('portfolio/create', 'method' => 'post')); ?>

<table width="100%">
    <tr>
        <td align="left"><?php echo $this->tag->linkTo(array('portfolio', 'Go Back')); ?></td>
        <td align="right"><?php echo $this->tag->submitButton(array('Save')); ?></td>
    </tr>
</table>

<?php echo $this->getContent(); ?>

<div align="center">
    <h1>Create portfolio</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="title">Title</label>
        </td>
        <td align="left">
            <?php echo $this->tag->textField(array('title', 'size' => 30)); ?>
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="short_description">Short Of Description</label>
        </td>
        <td align="left">
            <?php echo $this->tag->textField(array('short_description', 'size' => 30)); ?>
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="body">Body</label>
        </td>
        <td align="left">
                <?php echo $this->tag->textArea(array('body', 'cols' => '30', 'rows' => '4')); ?>
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="image">Image</label>
        </td>
        <td align="left">
            <?php echo $this->tag->textField(array('image', 'size' => 30)); ?>
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="status">Status</label>
        </td>
        <td align="left">
            <?php echo $this->tag->textField(array('status', 'size' => 30)); ?>
        </td>
    </tr>

    <tr>
        <td></td>
        <td><?php echo $this->tag->submitButton(array('Save')); ?></td>
    </tr>
</table>

</form>
