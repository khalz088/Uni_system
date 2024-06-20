<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
Route::middleware('auth')->group(function () {

    Route::view('/location', 'location')->name('location.index');
    Route::view('/add', 'adminadd')->name('add.index');
    Volt::route('user_add', 'pages.dashboard.addusers')
        ->name('user.index');
    Volt::route('chatroom', 'pages.chat.chat')
        ->name('chatroom.index');

    Route::view('/add_doc', 'adddoc')->name('add-doc');

    Route::view('/add_vid','addvid')->name('add.vid');

    Volt::route('doc' , 'pages.doc.doc1' )->name('doc1');

    Volt::route('document/{course}' , 'pages.doc.doc2')->name('doc2');

    Volt::route('document_semister/{course}/{ntalevel}', 'pages.doc.doc3')->name('doc3');

    Volt::route('vid' , 'pages.vid.vid1' )->name('vid1');

    Volt::route('video/{course}' , 'pages.vid.vid2')->name('vid2');

    Volt::route('video_semister/{course}/{ntalevel}', 'pages.vid.vid3')->name('vid3');

   Volt::route('soateco_chatroom', 'pages.chat.soatecochat')->name('soateco');

   Volt::route('lecture_chatroom', 'pages.chat.lecturechat')->name('lecture');

   Volt::route('hod_chatroom' , 'pages.chat.hodchat')->name('hod');
});
