<p>
Route::get('image/converter', function () {
    return view('imageconverter');
})->name('imageconverter');
Route::post('image/converter', ['App\Http\Controllers\ImageController', 'imageconverter'])->name('image.converter');
</p>