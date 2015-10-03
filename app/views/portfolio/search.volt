
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("portfolio/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("portfolio/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Short Of Description</th>
            <th>Body</th>
            <th>Image</th>
            <th>Status</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for portfolio in page.items %}
        <tr>
            <td>{{ portfolio.getId() }}</td>
            <td>{{ portfolio.getTitle() }}</td>
            <td>{{ portfolio.getShortDescription() }}</td>
            <td>{{ portfolio.getBody() }}</td>
            <td>{{ portfolio.getImage() }}</td>
            <td>{{ portfolio.getStatus() }}</td>
            <td>{{ link_to("portfolio/edit/"~portfolio.getId(), "Edit") }}</td>
            <td>{{ link_to("portfolio/delete/"~portfolio.getId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("portfolio/search", "First") }}</td>
                        <td>{{ link_to("portfolio/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("portfolio/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("portfolio/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
