<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create post</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="textarea"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 15px;
    }

    input[type="file"] {
      padding: 5px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div>
    <h2>Create new post</h2>
    <form action="/add_user_post" method="POST" enctype="multipart/form-data">
      @csrf
      <label>Post Title</label>
      <input type="text" name="title">
      <br><br>

      <label>Description</label>
      <textarea name="description" rows="5"></textarea>
      <br><br>

      <label>Image</label>
      <input type="file" name="image">
      <br><br>

      <label>Post type</label>
      <input type="text" placeholder="public/private" name="type">
      <br><br>

      <input type="submit">
    </form>
  </div>
</body>
</html>
