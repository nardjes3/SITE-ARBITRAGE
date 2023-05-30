<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="/css/insPhiCss/liste.css">
 
@section('content')
    <div class="container">
        <h2>Video List</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
 
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
 
        @if(count($videos))
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Video</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                    <tr>
                        <td>{{ $video->title }}</td>
                        <td>
                            <video width="320" height="240" controls autoplay loop >
                                <source src="'public/'{{$video->path}}" type="video/mp4">
                            </video>
                        </td>
                        
                        <td>
                            <form action="{{ route('delete-video') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this video?')">
                                @csrf
                                <input type="hidden" name="id" value="{{ $video->id }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>
        @else
            <p>No videos found.</p>
        @endif
    </div>




</html>