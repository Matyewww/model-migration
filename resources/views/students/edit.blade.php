<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                <form action="{{   url('students'), $student->id }}" method="Post">
        @csrf
        <div class="form-group mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="fname" class="form-controler" value="{{ $student->fname }}"> 
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" name="lname" class="form-controler" value="{{ $student->lname }}">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-controler" value="{{ $student->phone number}}">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-controler" value="{{ $student->address }}">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-controler" value="{{ $student->city }}">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">email</label>
        <input type="text" name="email" class="form-controler" value="{{ $student->email }}">
        </div>
        
        <div class="form-group mb-3">
        <label class="form-label">Birthdate</label>
        <input type="date" name="date" class="form-controler" value="{{ $student->birthdate }}">
        </div>
        <div class="form-group mb-3">
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>