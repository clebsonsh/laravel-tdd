<!DOCTYPE html>
<html lang="en">

<head>
    <title>Birdboard</title>
</head>

<body>
    <h1>Create a Project</h1>

    <form method="POST" action="/projects">
        @csrf
        <div>
            <label for="title">Title</label>

            <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Project title">
        </div>

        <div>
            <label for="description">Description</label>

            <textarea id="description" name="description" placeholder="Project description">{{ old('description') }}</textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
</body>

</html>
