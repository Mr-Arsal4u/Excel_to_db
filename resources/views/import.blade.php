<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Import and Export Excel
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control" required>
                    <br>
                    <button class="btn btn-success">Import Record</button>
                    {{-- <a class="btn btn-warning" href="{{ route('files') }}">All Files</a> --}}
                </form>
            </div>
        </div>
        <h2 class="text-center">All files </h2>
      @if ($records->count() > 0)
    @foreach ($records as $record)
        <div class="card mt-5">
            <div class="card-body">
                {{ $record->file->filename}}
                <a href="{{ route('details', ['id' => $record->id]) }}" class="btn btn-danger float-end">Details</a>
            </div>
        </div>
    @endforeach
@else
    <p>No files available.</p>
@endif



    </div>

</body>

</html>
