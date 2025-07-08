<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Video Upload</title>
</head>
<body>
    <div>
        <h3>Upload a Video</h3>
        <hr>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.video.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="Enter Title">
            </div>
            <div>
                <label>Choose Video</label>
                <input type="file" name="video">
            </div>
            <hr>
            <button type="submit">Submit</button>
        </form>
    </div>

    <hr>

    <h3>Uploaded Videos</h3>
    @foreach($videos as $video)
        <div>
            <h5>{{ $video->title }}</h5>
            @if($video->video)
                <video width="320" height="240" controls>
                    <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif
            <form action="{{ route('admin.video.destroy', $video->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Video</button>
            </form>
        </div>
    @endforeach
</body>
</html>
