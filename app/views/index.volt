<!DOCTYPE html>
<html>
        {{ partial('partials/head') }}
    <body>
        {{ partial('partials/page') }}
        <div class="container">
        {{ content() }}
            {% if isFrontpage == 1 %}
                <div class="row">
                {% for item in portfolio %}
                    <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ item.image }}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ item.title }}<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ item.title }}<i class="material-icons right">close</i></span>
                            <p>{{ item.body }}.</p>
                        </div>
                    </div>
                        </div>

                {% endfor %}
                </div>
            {% endif %}
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
    {{ partial('partials/footer') }}
    </body>
</html>
