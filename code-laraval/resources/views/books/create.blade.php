<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>

    <h2>Add New Book</h2>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label>Book Title:</label>
        <input type="text" name="title" placeholder="Enter book title" required>
        <br><br>

        <label>Book Price:</label>
        <input type="number" name="price" placeholder="Enter book price" step="0.01" min="0" required>
        <br><br>

        <label>Book Author:</label>
        <input type="text" name="author" placeholder="Enter author name" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>