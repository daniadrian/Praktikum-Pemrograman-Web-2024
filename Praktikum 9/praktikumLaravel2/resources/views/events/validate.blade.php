<!doctype html>
<html>

<head>
    <title>Event Validation</title>
</head>

<body>
    @include('flash-message')
    <form action="{{ route('validate.event') }}" method="post">
        @csrf
        <label for="location">Location:</label>
        <input type="text" id="location" name="location"><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <input type="submit" value="Validate">
    </form>
</body>

</html>
