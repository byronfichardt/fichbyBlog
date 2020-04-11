<div>
    <form action="/publish" method="post">
        @csrf
        <input type="text" name="title" required>
        <p>You can write your article using Markdown:</p>
        <input type="text" name="text" required>
        <button type="submit">Submit this Article</button>
    </form>
</div>
