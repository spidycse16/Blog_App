<!DOCTYPE html>
<html lang="en">
<head>
  <title>All posts</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    /* Assuming you have Bootstrap included */

    /* Your existing styles for post grid and read more button */

    .nav-bar {
      background-color: #F0F0F0; /* Adjust background color */
      padding: 10px 20px;
      display: flex; /* Allow horizontal button placement */
      justify-content: space-between; /* Distribute buttons evenly */
    }


    .nav-btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff; /* Adjust button color */
      color: #fff;
      font-weight: bold;
      text-decoration: none;
      transition: background-color 0.2s ease-in-out; /* Smooth hover effect */
    }

    .nav-btn:hover {
      background-color: #0067cc; /* Adjust button hover color */
    }
    .services_section {
      padding: 50px 0; /* Adjust padding as needed */
    }

    .post-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between; /* Distribute items evenly */
      margin: 0 -15px; /* Remove horizontal gutters from Bootstrap rows */
    }

    .post-item {
      padding: 15px;
      border-radius: 5px;
      background-color: #fff; /* Light background for posts */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
      margin-bottom: 20px;
      transition: transform 0.2s ease-in-out; /* Smooth hover effect */
      text-align: center; /* Center content within each post item */
    }

    .post-item:hover {
      transform: translateY(-2px); /* Slight lift on hover */
    }

    .post-image {
      width: 100%; /* Ensure image fills the container */
      height: 200px; /* Adjust image height as needed */
      object-fit: cover; /* Resize image to fit container */
    }

    .post-title,
    .post-name {
      margin-bottom: 5px;
    }

    .btn-main {
      margin-top: 10px; /* Add some space above the button */
    }

    .read-more-btn {
      display: inline-block; /* Ensures inline behavior for styling */
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff; /* Adjust background color */
      color: #fff;
      font-weight: bold;
      text-decoration: none; /* Remove underline */
      transition: background-color 0.2s ease-in-out; /* Smooth hover effect */
    }

    .read-more-btn:hover {
      background-color: #0067cc; /* Adjust hover color */
    }
  </style>
</head>
<body>
  <div class="nav-bar">
    <div>
      <a href="/dashboard" class="nav-btn">Home</a>
      <a href="/user_create_post" class="nav-btn">Create Post</a>
      <li><x-app-layout>
      </x-app-layout></li>
    </div>
  </div>

  <div class="services_section layout_padding">
    <div class="container">
      <h1>All posts</h1>

      <div class="post-grid">
        <div class="row">
          @foreach ($post as $post)
            <div class="col-md-4 post-item text-center">
              <img src="postimage/{{$post->image}}" alt="{{ $post->title }}" class="post-image">
              <h4>{{ $post->title }}</h4>
              <p>{{ $post->name }}</p>
              <div class="btn-main">
                <a href="/show_blog/{{$post->id}}" class="read-more-btn">Read More</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>
</html>
