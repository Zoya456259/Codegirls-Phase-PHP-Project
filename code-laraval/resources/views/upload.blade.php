<!DOCTYPE html>
<html>
<body>

<h2>Upload Image</h2>

<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <br><br>

    <label for="image">Select Image:</label>
    <input type="file" id="image" name="image"
           accept="image/*" required>

    <br><br>

    <button type="submit">Upload</button>
</form>
@if (session('success'))
    <p>Image uploaded successfully!</p>

    <img src="{{ asset('storage/' . session('success')) }}"
         width="200"
         alt="Uploaded Image">
@endif

</body>
</html>