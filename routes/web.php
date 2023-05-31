<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RefereController;
use App\Http\Controllers\ArbitreAuthController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AnalyController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\videocontroller;
use App\Http\Controllers\InsTechAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\InsPhiAuthController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\PayeController;
use App\Http\Controllers\ArbitreController;
use Dompdf\Dompdf;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\InsTechController;
use App\Http\Controllers\InsPhiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/send', function () {
    return view('Arbitre/sendPdf');
});

Route::post('envoyer-pdf', [PDFController::class, 'envoyerPDF'])->name('envoyer.pdf');


Route::get('/dash', function () {
    return view('Admin/dash');
});



Route::get('/payee', function () {
    return view('Admin/payee');
});



Route::get('/instructor', function () {
    return view('Admin/instructor');
});

Route::get('/repport', function () {
    return view('Admin/report');
});
Route::get('/calendar', function () {
    return view('Admin/calendar');
});
Route::get('/ligue', function () {
    return view('Admin/ligue');
});
Route::get('/ligue2', function () {
    return view('Admin/ligue2');
});

    

Route::get('profilAdmin', [adminController::class, 'show']);
Route::get('profilAdmin/{id}', [adminController::class, 'edit']);
Route::post('profilAdmin', [adminController::class, 'update']);



Route::view('list', 'Admin.list_ar');
Route::post('list', [RefereController::class, 'addArbi']);

Route::get('listTh', [InsTechController::class, 'show']);
Route::get('listPh', [InsPhiController::class, 'show']);


Route::get('list', [RefereController::class, 'show']);


Route::get('edit/{id}', [RefereController::class, 'edit']);
Route::post('edit', [RefereController::class, 'update']);

Route::get('delete/{id}', [RefereController::class, 'delete']);
Route::view('analytics', 'Admin.analytic');
Route::get('/analytics', [AnalyController::class, 'statistic']);

Auth::routes();
Route::view('design', 'Admin.calendar');
Route::post('design', [DesignController::class, 'adddesign']);
Route::get('ligue/{id}', [DesignController::class, 'show']);
Route::get('ligue2/{id}', [DesignController::class, 'show2']);

Route::get('payee',[ArbitreController::class, 'show']);
Route::get('/upStatut/{id}', [ArbitreController::class, 'upStatut']);

Route::get('/save-pdf', 'PDFController@savePDF');

Route::get('/repport',[ArbitreController::class, 'showPdf']);
/*************************   SABAH ***********************************/



Route::get('/choix1', function () {
    return view('InsTech/choix1');
});

Route::get('/choix2', function () {
    return view('InsTech/choix2');
});

Route::get('/cv2', function () {
    return view('InsTech/cv2');
});

Route::get('/prflinstech', function () {
    return view('InsTech/prflinstech');
});

Route::get('/questions', function () {
    return view('InsTech/questions');
});
Route::get('/videos', function () {
    return view('InsTech/videos');
});
Route::get('/ptqb', function () {
    return view('InsTech/ptqb');
});

Route::get('/ptqa', function () {
    return view('InsTech/ptqa');
});

Route::get('/ptvb', function () {
    return view('InsTech/ptvb');
});

Route::get('/ptva', function () {
    return view('InsTech/ptva');
});

Route::get('/test', function () {
    return view('InsTech/test');
});

Route::get('/results', function () {
    return view('InsTech/results');
});


Route::get('/start_vid', function () {
    return view('InsTech/start_vid');
});

Route::get('/end_vid', function () {
    return view('InsTech/end_vid');
});

Route::get('/choix_test', function () {
    return view('InsTech/choix_test');
});
Route::get('/choix_level', function () {
    return view('InsTech/choix_level');
});
Route::get('/choix_level2', function () {
    return view('InsTech/choix_level2');
});
Route::get('/choix_level22', function () {
    return view('InsTech/choix_level22');
});
Route::get('/test_mcq', function () {
    return view('InsTech/test_mcq');
});
Route::get('/arbi_home', function () {
    return view('arbitre/arbitre_dashboard');
});
Route::get('/laws', function () {
    return view('arbitre/Laws/laws');
});



Route::view('site_arbi/question','InsTech/question');
Route::get('site_arbi/questions',[UserController::class,'show']);
Route::post('site_arbi/questions',[UserController::class,'AddData']);
Route::get('site_arbi/delete/{id}',[UserController::class,'delete']);
Route::get('site_arbi/update/{id}',[UserController::class,'showdata']);
Route::post('update',[UserController::class,'update']);
Route::get('site_arbi/InsTech/add/{id}',[UserController::class,'showdata']);
Route::post('add',[UserController::class,'add']);
Route::get('/add', function () {
    return view('InsTech/add');
});


Route::view('site_arbi/videos','InsTech/videos');
Route::get('site_arbi/videos',[UserController::class,'show2']);
Route::post('site_arbi/videos',[UserController::class,'AddData2']);
Route::get('site_arbi/delete2/{id}',[UserController::class,'delete2']);
Route::get('site_arbi/update2/{id}',[UserController::class,'showdata2']);
Route::post('update2',[UserController::class,'update2']);
Route::get('site_arbi/InsTech/add2/{id}',[UserController::class,'showdata2']);
Route::post('add2',[UserController::class,'add2']);
Route::get('/add2', function () {
    return view('InsTech/add2');
});
//view qst
Route::view('site_arbi/test_mcq','InsTech/test_mcq');
Route::view('site_arbi/view_qst','view_qst');
Route::get('site_arbi/view_qst/{id}',[UserController::class,'showdata3']);



Route::view('site_arbi/ptqb','InsTech/ptqb');
Route::get('site_arbi/ptqb',[UserController::class,'show3']);


Route::view('site_arbi/ptqa','InsTech/ptqa');
Route::get('site_arbi/ptqa',[UserController::class,'show4']);

Route::view('site_arbi/ptvb','InsTech/ptvb');
Route::get('site_arbi/ptvb',[UserController::class,'show6']);


Route::view('site_arbi/ptva','InsTech/ptva');
Route::get('site_arbi/ptva',[UserController::class,'show7']);






Route::get('/index_u',[App\Http\Controllers\VideoController::class,'index']);

Route::post('/insert_video',[App\Http\Controllers\VideoController::class,'insert'])->name('insert.file');


Route::view('site_arbi/results','InsTech/results');
Route::get('site_arbi/results',[UserController::class,'show_results']);



Route::view('site_arbi/test_mcq_beg','InsTech/test_mcq_beg');
Route::get('site_arbi/test_mcq_beg',[UserController::class,'show8']);
Route::view('site_arbi/view_qst','view_qst');
Route::get('site_arbi/view_qst/{id}',[UserController::class,'showdata3']);

Route::view('site_arbi/test_mcq_adv','InsTech/test_mcq_adv');
Route::get('site_arbi/test_mcq_adv',[UserController::class,'show10']);
Route::view('site_arbi/view_qst','view_qst');
Route::get('site_arbi/view_qst/{id}',[UserController::class,'showdata3']);


Route::view('site_arbi/test_vid','InsTech/test_vid');
Route::get('site_arbi/test_vid',[UserController::class,'show9']);
Route::view('site_arbi/view_vid','view_vid');
Route::get('site_arbi/view_vid/{id}',[UserController::class,'showdata6']);


Route::view('site_arbi/test_vid_adv','InsTech/test_vid_adv');
Route::get('site_arbi/test_vid_adv',[UserController::class,'show13']);

Route::get('/create_test',[UserController::class,'create_test']);
Route::get('/set_selected_test',[UserController::class,'set_selected_test']);
Route::get('/set_selected_test_video',[UserController::class,'set_selected_test_video']);

Route::get('/create_test2',[UserController::class,'create_test2']);
Route::get('/set_selected_test',[UserController::class,'set_selected_test']);
Route::get('/set_selected_test_video',[UserController::class,'set_selected_test_video']);

/***************** SABAH **************************************************/
/************ authentication *********************/
// Routes for arbitre authentication
Route::view('arbitre/login', 'auth/arbitre_login')->name('arbitre.login.view');//view route
Route::post('arbitre/login/post', [ArbitreAuthController::class,'login'])->name('arbitre.login');
Route::get('arbitre/logout', [ArbitreAuthController::class,'logout'])->name('arbitre.logout');

// Routes for admin authentication
Route::view('admin/login/view', 'auth/admin_login')->name('admin.login.view');//view route
Route::post('admin/login', [AdminAuthController::class,'login'])->name('admin.login');
Route::get('admin/logout', [AdminAuthController::class,'logout'])->name('admin.logout');

// Routes for ins_phi authentication
Route::view('InsPhi/login/view', 'auth/InsPhi_login')->name('ins_phi.login.view');//view route
Route::post('InsPhi/login', [InsPhiAuthController::class,'login'])->name('ins_phi.login');
Route::get('InsPhi/logout', [InsPhiAuthController::class,'logout'])->name('ins_phi.logout');

// Routes for Customer authentication
Route::view('ins_tech/login/view', 'auth/ins_tech_login')->name('ins_tech.login.view');//view route
Route::post('ins_tech/login', [InsTechAuthController::class,'login'])->name('ins_tech.login');
Route::get('ins_tech/logout', [InsTechAuthController::class,'logout'])->name('ins_tech.logout');

//Route::get('/arbitre', function () {return view('InsTech/techins');})->name("arbitre.dashboard");
Route::get('/prflinstech', [UserController::class, 'show_prfl']);
//Route::get('/techins', [UserController::class, 'show_ins']);
Route::group(['middleware' => 'arbitre'], function () {
    Route::get('/quiz', [UserController::class,'show_test']);
    Route::get('/arbitre', function () {return view('arbitre/arbitre_dashboard');})->name("arbitre.dashboard");
    Route::get('/quiz_vid', [UserController::class,'show_test2']);
    
});
Route::group(['middleware' => 'instricteur_tech'], function () {
    Route::get('/InsTech', function () {
        return view('InsTech/techins');
    })->name("ins_tech.dashboard");
    
});
Route::group(['middleware' => 'sec_commission'], function () {
    Route::get('/dash', function () {
        return view('Admin/dash');
    })->name("Admin.dash");
    
});
Route::group(['middleware' => 'instructor_phi'], function () {
    Route::get('/InsPhi', function () {
        return view('InsPhi/insPH');
    })->name("InsPhi.insPH");
    
});
Route::get('/add_note', [UserController::class,'add_note']);
Route::get("/create_password",[UserController::class,'create_password']);

/**************************Arbitre*******************/
Route::get('/Mypayement/{id}',[ArbitreController::class, 'Payed']);

Route::post('/convert-pdf', [PDFController::class, 'convertAndStorePDF']);
Route::get('/Salaire', function () {
    return view('Arbitre/Salaire');
});

Route::get('/MyRepport', function () {
    return view('Arbitre/MyRepport');
});

Route::get('/myDesign/{id}',[ArbitreController::class, 'designed']);


/******************************Arslane ****************************************/
Route::get('/insPH', function () {
    return view('InsPhi/insPH');
})->name('layout');

Route::get('/video', function () {
    return view('InsPhi/video');
})->name('video');


Route::get('/test', function () {
    $videoPath = public_path('videos');
    $videos = File::allFiles($videoPath);

    return view('InsPhi/test', compact('videos'));
})->name('test');


Route::get('/programme', function () {
    return view('InsPhi/programme');
})->name('programme');

Route::get('/profile', function () {
    return view('InsPhi/profile');
})->name('profile');

Route::get('/game-rules', function () {
    return view('InsPhi/game-rules');
})->name('game-rules');

Route::get('/affprogramme', function () {
    return view('InsPhi/index');
})->name('index');




Route::get('/formulaire', [\App\Http\Controllers\ProgrammeController::class, 'create'])->name('formulaire');
Route::post('/programmes', [\App\Http\Controllers\ProgrammeController::class, 'store'])->name('programmes.store');
Route::get('/confirmation', [\App\Http\Controllers\ProgrammeController::class, 'confirmation'])->name('confirmation');
/*Route::get('/affprogramme', [\App\Http\Controllers\ProgrammeController::class, 'index'])->name('index');*/
Route::get('/affprogramme', [\App\Http\Controllers\ProgrammeController::class, 'maFonction'])->name('index');
/*Route::get('/programmes/{programme}/edit',[\App\Http\Controllers\ProgrammeController::class, 'edit'])->name('programmes.edit');
Route::put('/programmes/{programme}',[\App\Http\Controllers\ProgrammeController::class, 'update'])->name('programmes.update');*/
Route::put('/programmes/modifier/{semaine}', [\App\Http\Controllers\ProgrammeController::class, 'updateBySemaine'])->name('programmes.updateBySemaine');
Route::get('/programmes/edit/{semaine}', [\App\Http\Controllers\ProgrammeController::class, 'editBySemaine'])->name('programmes.editBySemaine');
// Afficher le formulaire pour ajouter une vidéo

//route afprog pour amal
Route::get('/afprog', [\App\Http\Controllers\ProgramController::class, 'maFonction'])->name('afprog');

Route::get('video-upload', [ \App\Http\Controllers\VideosController::class, 'getVideoUploadForm' ])->name('get.video.upload');
Route::post('video-upload', [ \App\Http\Controllers\VideosController::class, 'uploadVideo' ])->name('store.video');


Route::get('/video-list', [VideosController::class, 'getVideoList'])->name('video-list');
Route::get('/delete-video-form', [VideosController::class, 'getDeleteVideoForm'])->name('get-delete-video-form');
Route::post('/delete-video', [VideosController::class, 'deleteVideo'])->name('delete-video');

//Route::get('/profile', [\App\Http\Controllers\InstructeurPhyController::class, 'showProfile'])->name('profile');
/******************************Arslane ****************************************/