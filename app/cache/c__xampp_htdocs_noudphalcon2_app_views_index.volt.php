<!DOCTYPE html>
<html>
        <?php echo $this->partial('partials/head'); ?>
    <body>
        <?php echo $this->partial('partials/page'); ?>
        <div class="container">
        <?php echo $this->getContent(); ?>
            <?php if ($isFrontpage == 1) { ?>
                <div class="row">
                <?php foreach ($portfolio as $item) { ?>
                    <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo $item->image; ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $item->title; ?><i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $item->title; ?><i class="material-icons right">close</i></span>
                            <p><?php echo $item->body; ?>.</p>
                        </div>
                    </div>
                        </div>

                <?php } ?>
                </div>
            <?php } ?>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link rel="stylesheet" href="/noudmegit/public/css/style.css">
        <!--[if lt IE 9]>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
        <script src="/noudmegit/public/js/scripts.js"></script>
        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <?php echo $this->partial('partials/footer'); ?>
    </body>
</html>
