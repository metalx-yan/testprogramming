<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>  
  <div class="container">
    <div style="margin-top: 10%;">
      <form action="{{ route('test1.store' )}}" method="POST">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">X : </label>
          <div class="col-sm-4">
            <input type="text" name="x" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Y : </label>
          <div class="col-sm-4">
            <input type="text" name="y" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <button class="col-md-5 btn btn-success">Submit</button>
          </div>
        </div>
        <div>
          
        </div>
      </form>
    </div>
  </div>
</body>
</html>