<!-- Inside your form -->
<form method="POST" action="{{ route('conge.accept', $conge->id) }}">
    @csrf
    <!-- Add input for admin comments if needed -->
    <label for="admin_comments">Admin Comments:</label>
    <textarea name="admin_comments" id="admin_comments"></textarea>

    <button type="submit">Accept</button>
</form>

<form method="POST" action="{{ route('conge.reject', $conge->id) }}">
    @csrf
    <!-- Add input for admin comments if needed -->
    <label for="admin_comments">Admin Comments:</label>
    <textarea name="admin_comments" id="admin_comments"></textarea>

    <button type="submit">Reject</button>
</form>
