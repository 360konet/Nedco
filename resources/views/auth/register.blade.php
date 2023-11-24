<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NEDCo</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
  }

  .signup-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 400px;
  }

  .signup-container h1 {
    text-align: center;
    margin-bottom: 20px;
  }

  .signup-form input {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .signup-form button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  select{
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
</style>
</head>
<body>

<div class="signup-container">
<img src="{{asset('nabco.jpg')}}" width="90%" alt="logo">

  <h1>I.T HelpDesk</h1>
  <center><h3>Sign up</h3></center>
  <form method="POST" class="signup-form" action="{{ route('register') }}" enctype="multipart/form-data">
   @csrf
    <!-- <input type="file" name="profile_picture" accept="image/*" onchange="previewImage(event)" name="profile-picture" accept="image/*" placeholder="Profile Picture">
    <div id="imagePreview">
        <img id="preview" src="#" height="100px" width="100px" alt="Image Preview" style="display: none;">
    </div>
    <script>
        function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById('preview');
    
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }

      </script> -->
    <input type="text" name="name" placeholder="Username" required>
    <div class="form-group">
    <select name="type" class="signup-form input" id="department_id">
        <option value="" disabled selected>Select Department</option>
        @foreach($departments as $department)
            <option value="{{ $department->name }}">{{ $department->name }}</option>
        @endforeach
    </select>
</div>


    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone_number" placeholder="Phone Number" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit" value="submit">Sign Up</button>
    <br>
    <a href="{{url('/login')}}">Already having an account? Sign in</a>
  </form>
</div>
</body>
</html>
