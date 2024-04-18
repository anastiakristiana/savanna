<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::redirect('/', '/en');

Route::get('/{locale}', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('home');
})->name('home');

Route::get('/{locale}/category', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('category');
})->name('category');
Route::get('/{locale}/news', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('news');
})->name('news');

Route::get('/changeLocale/{locale}/{path?}', function ($locale, $path = null) {
    if (array_key_exists($locale, config('app.locales'))) {
        session()->put('locale', $locale);
    }

    // Redirect to the same page with the new language
    if ($path) {
        return redirect($locale . '/' . $path);
    } else {
        return redirect()->route('home', $locale);
    }
})->name('changeLocale');*/

Route::redirect('/', '/en');

Route::get('/{locale}', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('home');
})->name('home');

Route::get('/{locale}/residence', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('residence');
})->name('residence');

Route::get('/{locale}/contact-us', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('contact');
})->name('contact-us');
/*Route::get('/{locale}/detailnews', function ($locale) {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('detailnews');
})->name('detailnews');*/
Route::get('/{locale}/news/{slug}', [NewsArticleController::class, 'show'])->name('news.show');


/*Route::get('/{locale}/news', [NewsArticleController::class, 'index'] {
    if (! array_key_exists($locale, config('app.locales'))) {
        abort(404);
    }

    App::setLocale($locale);

    return view('news');
})->name('news');*/
Route::get('/{locale}/news', [NewsArticleController::class, 'index'])->name('news');

/*Route::get('/changeLocale/{locale}/{path?}', function ($locale, $path = null) {
    if (array_key_exists($locale, config('app.locales'))) {
        session()->put('locale', $locale);
    }

    // Redirect to the same page with the new language
    if ($path) {
        return redirect($locale . '/');
    } else {
        // Check the current route and redirect accordingly
        $currentRoute = request()->route()->getName();
        if ($currentRoute === 'category') {
            return redirect()->route('category', $locale);
        } elseif ($currentRoute === 'news') {
            return redirect()->route('news', $locale);
        } else {
            return redirect()->route('home', $locale);
        }
    }
})->name('changeLocale');*/
Route::get('/{locale}/calculator', function ($locale) {	
    if (! array_key_exists($locale, config('app.locales'))) {	
        abort(404);	
    }	
    App::setLocale($locale);	
    return view('calculator');	
})->name('calculator');	

Route::get('/{locale}/developer', function ($locale) {	
    if (! array_key_exists($locale, config('app.locales'))) {	
        abort(404);	
    }	
    App::setLocale($locale);	
    return view('developer');	
})->name('developer');

Route::get('/{locale}/concept', function ($locale) {	
    if (! array_key_exists($locale, config('app.locales'))) {	
        abort(404);	
    }	
    App::setLocale($locale);	
    return view('concept');	
})->name('concept');

Route::get('/changeLocale/{locale}/{path?}', function ($locale, $path = null) {
    if (array_key_exists($locale, config('app.locales'))) {
        session()->put('locale', $locale);
    }

    // Redirect to the same page with the new language
    if ($path) {
        return redirect($locale . '/');
    } else {
        return redirect()->route('home', $locale);
    }
})->name('changeLocale');

Route::get('/news/filter', 'NewsArticleController@filter')->name('news.filter');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
