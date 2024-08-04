<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Song Finder: {{ $header_title }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="style.css"> --}}
</head>
<body>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $header_title }}</h1>
          </div>
        </div>
      </div>
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                <form action="{{ route('adding') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Song Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required value="{{ old('song') }}" name="song" placeholder="Add Song Name"/>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="code">Artist <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required value="{{ old('artist') }}" name="artist" placeholder="Add Artist Name"/>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Song Cover<span style="color:red">*</span></label>
                                        <input type="file" name="image" style="padding:5px;" class="form-control" multiple accept="image/*" />
                                    </div>
                                </div>
                        </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mp3 Music<span style="color:red">*</span></label>
                                        <input type="file" name="audio" style="padding:5px;" class="form-control" multiple accept="audio/*" />
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
</div>

</body>
</html>
