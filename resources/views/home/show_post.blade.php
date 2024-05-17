<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <style>
        .post-container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .post-image {
            float: left;
            margin-right: 20px;
            width: 150px;
            height: 150px;
            object-fit: cover; /* Resize image to fit container */
        }
        .post-content {
            overflow: hidden; /* Clear float for proper layout */
        }
        .post-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .post-info {
            font-style: italic;
            color: #aaa;
            margin-bottom: 15px;
        }
        .post-description {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="post-container">
        <div><img style="margin-bottom:20px;height:400px" width="400px" src="/postimage/{{$post->image}}" class="post_img"></div>
        <div class="post-content align-center" >
            <h2 class="post-title">{{ $post->title }}</h2>
            <p class="post-info">By {{ $post->name }} - {{ $post->time }}</p>
            <p class="post-description">{{ $post->description }}</p>
        </div>
    </div>
</body>
</html>
