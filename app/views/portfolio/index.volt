{#

{{ content() }}

<div align="right">
    {{ link_to("portfolio/new", "Create portfolio") }}
</div>

{{ form("portfolio/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search portfolio</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="id">Id</label>
        </td>
        <td align="left">
            {{ text_field("id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="title">Title</label>
        </td>
        <td align="left">
            {{ text_field("title", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="short_description">Short Of Description</label>
        </td>
        <td align="left">
            {{ text_field("short_description", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="body">Body</label>
        </td>
        <td align="left">
                {{ text_area("body", "cols": "30", "rows": "4") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="image">Image</label>
        </td>
        <td align="left">
            {{ text_field("image", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="status">Status</label>
        </td>
        <td align="left">
            {{ text_field("status", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
#}
<h1>Portfolio</h1>

<ul>
    {% for item in portfolio %}
        <li>{{ linkto('portfolio/show/' ~ item.id, item.title) }}</li>
    {% endfor %}
</ul>