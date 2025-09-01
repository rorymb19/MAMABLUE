@extends('layout')

@section('content')
<div class="bg-light p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
    <img src="{{ asset('images/sandy.jpg') }}" class="profile-img d-block mx-auto mb-3" alt="Sandy Micua">
    <h2 class="text-center fw-bold">SANDY MICUA</h2>

    <div class="mt-4">
        <h4>About Me</h4>
        <p>Hi! I’m Sandy Micua. I’m 20 years old and I live in Rissing Luna, La Union. I am 3rd year college of BS Information Technology.</p>
    </div>

    <div class="mt-4">
        <h4>Motto</h4>
        <p>The destination is still far, but I've made great progress.</p>
    </div>

    <div class="mt-4">
        <h4>Hobbies</h4>
        <ul>
            <li>Visiting my favorite places for peace and inspiration</li>
            <li>Exploring new spots and making quiet memories</li>
            <li>Watching movies</li>
        </ul>
    </div>

    <div class="mt-4">
        <h4>Contact Me</h4>
        <p><i class="fab fa-facebook-square text-primary me-2"></i><a href="https://www.facebook.com/sandy.micua.7?mibextid=kFxxJD" target="_blank">facebook.com/sandy.micua.7</a></p>
        <p><i class="fab fa-instagram text-danger me-2"></i><a href="https://www.instagram.com/dyy_mae?igsh=MW9wZnQzZWowcDN5eQ==" target="_blank">@dyy_mae</a></p>
    </div>
</div>
@endsection
