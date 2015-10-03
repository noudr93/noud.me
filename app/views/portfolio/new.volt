
{{ form("portfolio/create", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("portfolio", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

{{ content() }}

<div align="center">
    <h1>Create portfolio</h1>
</div>

<table>
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
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
