<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Assuming you have Bootstrap included (optional) */

    .user-row {
      display: flex; /* Arrange elements side-by-side */
      align-items: center; /* Vertically center content */
      padding: 10px 20px;
      border-bottom: 1px solid #ddd; /* Add a subtle separator line */
    }

    .username {
      flex: 1; /* Allow remaining space for user info */
      font-size: 20px;
      margin-right: 20px; /* Add spacing between name and button */
    }

    .follow-btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff; /* Adjust button color */
      color: #fff;
      font-weight: bold;
      cursor: pointer; /* Indicate clickable element */
    }
  </style>
</head>
<body>
  <div class="profile-container">
    @if (session('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif
    @foreach ($user as $user)
      <div class="user-row">
        <h2 class="username">{{$user->name}}</h2>
        <a href="/follow_user/{{$user->id}}/{{Auth::user()->id}}" class="follow-btn">Follow</a>
      </div>
    @endforeach
  </div>
</body>
</html>
