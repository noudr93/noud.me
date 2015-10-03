{#
<!DOCTYPE html>
<html>
    {{ partial('partials/head') }}
<body>
{{ content() }}
{% if isFrontpage == 1 %}
    {% for item in portfolio %}
        {{ item.title }}
    {% endfor %}
{% endif %}
</body>
</html>#}
