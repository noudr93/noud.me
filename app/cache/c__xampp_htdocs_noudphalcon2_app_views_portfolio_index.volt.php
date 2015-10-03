
<h1>Portfolio</h1>

<ul>
    <?php foreach ($portfolio as $item) { ?>
        <li><?php echo $this->tag->linkto('portfolio/show/' . $item->id, $item->title); ?></li>
    <?php } ?>
</ul>