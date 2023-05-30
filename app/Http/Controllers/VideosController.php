<?php
namespace App\Http\Controllers;

use App\Models\vidphi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    public function getVideoUploadForm()
    {
        return view('InsPhi.video-upload');
    }

    public function uploadVideo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4,video/flv',
        ]);

        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;

        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));

        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);

        if ($isFileUploaded) {
            $video = new vidphi();
            $video->title = $request->title;
            $video->path = $filePath;
            $video->save();

            return back()
                ->with('success', 'Video has been successfully uploaded.');
        }

        return back()
            ->with('error', 'Unexpected error occurred');
    }

    public function getVideoList()
    {
        $videos = vidphi::all();
        return view('InsPhi.video-list', compact('videos'));
    }

    public function deleteVideo(Request $request)
    {
        $video = vidphi::find($request->id);

        if ($video) {
            Storage::disk('public')->delete($video->path);
            $video->delete();

            return back()
                ->with('success', 'Video has been successfully deleted.');
        }

        return back()
            ->with('error', 'Unexpected error occurred');
    }

    public function test()
    {
        $videos = DB::table('vidphis')->get(); // Mettez à jour le nom de la table ici
        return view('InsPhi.test', compact('videos'));
    }

    public function showVideos()
    {
        $videos = DB::table('vidphis')->get(); // Mettez à jour le nom de la table ici
        return view('InsPhi.test', ['videos' => $videos]);
    }
}
