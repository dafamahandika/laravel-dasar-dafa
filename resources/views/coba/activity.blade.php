<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Activity</title>
</head>
<body>
     <h1>Activity</h1>
     <form action="{{route('storeActivity')}}" method="post">
          @csrf
          <label>
               Activity
               <input type="text" name="nama_activity" id="">
               <button>Submit</button>
          </label>
     </form>
</body>
</html>