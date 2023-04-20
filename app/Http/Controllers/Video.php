<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Worker;
use App\Services\GitHub;
use Symfony\Component\HttpFoundation\Response;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use FFMpeg\Format\Video\X264;
use Illuminate\Support\Arr;

class Video extends Controller
{

    public function test() {
       $ara =  DB::select("SELECT 
        video.title as 'video_title',
        video.img as 'video_img',
        video.description as 'video_description',
        video.creationTime as 'video_creation_time',
        user.name as 'user_name'
        FROM user_video LEFT JOIN video ON
        video.id = user_video.id_video
        LEFT JOIN user on
        user.id = user_video.id_user");

        $mas = [];
        $vas = [];


        foreach ($ara as $user) {
            $mas = $user->user_name;
            array_push($vas, $mas);
        }

        return view('test', ['ara' => $vas]);
 
    }

    public function video(Request $request)
    {
        
        $file = $request->file('video')->storeAs('/public', 'video.mp4');;
        $title = $request->string('title');
        $img = $request->file('img')->storeAs('/public', 'avatar-video.jpg');
        $name = uniqid();
        mkdir("C:/OSPanel/domains/api-practika-RP-31/storage/app/public/video/$name");
        $highBitrate = (new X264)->setKiloBitrate(1000);
        FFMpeg::fromDisk('public')
        ->open("video.mp4")
        ->exportForHLS()
        ->setSegmentLength(10)
        ->setKeyFrameInterval(48) 
        ->addFormat($highBitrate)
        ->save('dir/adaptive_steve.m3u8');
        $pathPath = scandir('C:\OSPanel\domains\api-practika-RP-31\storage\app\public\dir');
        for($i = 2; $i < count($pathPath) ; $i++) {
            copy("C:/OSPanel/domains/api-practika-RP-31/storage/app/public/dir/$pathPath[$i]", "C:/OSPanel/domains/api-practika-RP-31/storage/app/public/video/$name/$pathPath[$i]");
            copy("C:/OSPanel/domains/api-practika-RP-31/storage/app/public/avatar-video.jpg", "C:/OSPanel/domains/api-practika-RP-31/storage/app/public//video/$name/avatar-video.jpg");
        }
        for($i = 2; $i < count($pathPath) ; $i++) {
            unlink("C:/OSPanel/domains/api-practika-RP-31/storage/app/public/dir/$pathPath[$i]");
        }
        return $title;
    }

}
