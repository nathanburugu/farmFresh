<!DOCTYPE html>
<html>
<head>
	<title>Create Product Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="width-60vh">


	<div class="container mt-5">
		<h1>Create Crop</h1>
		<hr>

		<!-- Product Form -->
		<form action="" method="POST">
			<div class="form-group">
				<label for="name"> {{ __('Name') }}</label>
				<input type="text" class="form-control" @error('name')
                    is-invalid
                    @enderror id="name" name="name" required value={{ old{'name'} }} >
			</div>

			<div class="form-group">
				<label for="duration">Duration:</label>
				<input type="text" class="form-control" id="duration" name="duration" required>
                @error('name')
                <span class="invalid feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror
			</div>

			<div class="form-group">
				<label for="farmers">Acerage:</label>
				<input type="number" class="form-control" id="farmers" name="farmers" required>
			</div>

			<div class="form-group">
				<label for="notes">Notes:</label>
				<textarea class="form-control" id="notes" name="notes"></textarea>
			</div>

			<div class="form-group">
				<label for="pests">Pests:</label>
				<input type="text" class="form-control" id="pests" name="pests">
			</div>

			<div class="form-group">
				<label for="diseases">Diseases:</label>
				<input type="text" class="form-control" id="diseases" name="diseases">
			</div>

			<div class="form-group">
				<label for="image">Crop Image:</label>
				<input type="file" class="form-control-file" id="image" name="image" required>
			</div>

			<button type="submit" class="btn btn-primary">Create Product</button>
		</form>
	</div>
    </div>


	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>


{{-- <x-admin-master>
    @section('content')
<h1>
    Show Crops
</h1>
@if(Session::()
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Farmer's name</th>
                        <th>Duration</th>
                        <th>Acres</th>
                      <th>Farmers Notes</th>
                      <th>Update</th>
                        <th>Delete</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                    </tr>
                </tfoot>
                @foreach($crops as $crop)
                  <tbody>
                    <tr>
                      <td>{{$crop->name}}</td>
                      <td>
                        <!-- {{}} -->
                        Farmer's Name
                      </td>
                      <td>{{$crop->duration}}</td>
                        <td>{{$crop->acers}}</td>
                        <td>{{Str.limit($crop->notes)}}</td>
                        <td>
                            <button>
                                <a href="{{route('crop.edit', $crop->id)}}">Update</a>
                            </button>
                        </td>
                        <td>
                            <form action="{{route('crop.destroy', $crop->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>

                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
    @endsection
<x-admin-master> --}}
