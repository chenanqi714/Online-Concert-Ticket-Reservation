<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add/Edit Concert Info</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/action.js"></script>
</head>
<body>

<div class="modal-content" style="width:80%;margin:20px auto">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="window.location.href ='index.html'">&times;</button>
<h4 class="modal-title">Music Concert Info</h4>
</div> 
<div class="modal-body">

  <div class="row">
    <div class="col-sm-12">

      <div class="panel panel-info">
        <div class="panel-heading">    
			<div style= "float:right;margin-top:7px;margin-right:10px">
				<a href="#">Delete</a>
			</div>

			<div style="width:70%;">
				<label for="concertname">Name:</label>
				<div style="display:inline-block;width:80%">
					<input id="concertname" type="text" value="Concert Name" class="form-control" style="width:100%" />
				</div>
			</div>
		</div>
		<div style="float:left">
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="height:250px" alt="Image">
		</div>
		<div style="float:left;margin-left:-100px">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Change Pic</button>
		</div>
		<div style="float:left;margin:10px;width:40%">
		
		<form id="formEditProduct" class="form-horizontal" action="#">
			<div class="form-group">
				<label class="control-label col-sm-4" for="description">Description:</label>
				<div class="col-sm-8">
				<textarea cols="10" rows="3" class="form-control" id="description" name="description">Description</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="player">Player:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="player" name="player" value="Player" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="price">Price:</label>
				<div class="col-sm-8" style="">
				<div class="row">
				<div class="col-sm-9" style="padding-right:5px">
					<input type="range" id="rangePrice" name="price" min="0" max="1000" />
				</div>
				<div class="col-sm-3" style="padding-left:5px">
					<input type="text" id="txtPrice" name="txtPrice" style="width:100%;padding:3px" />
				</div>
				</div>
				</div>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="schedule">Schedule:</label>
				<div class="col-sm-8">          
					<input type="datetime-local" class="form-control" id="schedule" name="schedule" />
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-warning">Confirm</button>
				</div>
			</div>
		</form>
		
		</div>
        <div class="panel-body"></div>
      </div>
    </div>
  </div>

</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
		<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Select a picture for the concert</h4>
        </div>
        <div id="modal-body" class="modal-body">
		
			<form class="form-horizontal" action="#">
			<div class="form-group">
				<div class="col-sm-12">
				<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="height:250px" alt="Image">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
				<input type="file" value="" />
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-12">
				<button type="submit" class="btn btn-warning">Confirm</button>
				</div>
			</div>
		</form>
        </div>
      </div>
    </div>
</div>

</body>
</html>
