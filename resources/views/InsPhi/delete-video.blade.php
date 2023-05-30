<!DOCTYPE html>
<html>
 
@section('content')
    <div class="container">
        <h2>Delete Video</h2>
        <form action="{{ route('delete-video') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="video-select">Select video to delete:</label>
                <select class="form-control" id="video-select" name="id">
                    @foreach($videos as $video)
                        <option value="{{ $video->id }}">{{ $video->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>


</html>