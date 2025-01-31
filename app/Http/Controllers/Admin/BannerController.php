<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $banners = Banner::all(); // Получение всех баннеров
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048', // Максимальный размер 2MB
        ]);

        $path = $request->file('image')->store('banners', 'public');

        Banner::create([
            'image_path' => $path,
            'link' => $request->input('link'), // Если нужна ссылка
        ]);

        return redirect()->route('admin.banners.index')->with('success', 'Баннер добавлен!');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image' => 'image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banners', 'public');
            $banner->image_path = $path;
        }

        $banner->link = $request->input('link'); // Если нужна ссылка
        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Баннер обновлён!');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banners.index')->with('success', 'Баннер удалён!');
    }
}
