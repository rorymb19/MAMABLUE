@extends('layout')

@section('content')
<div class="bg-light p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
    <img src="{{ asset('images/rory.jpg') }}" class="profile-img d-block mx-auto mb-3" alt="Rory Barnachea">
    <h2 class="text-center fw-bold">RORY BARNACHEA</h2>

    <div class="mt-4">
        <h4>About Me</h4>
        <p>Hi! I’m Rory Barnachea. I’m 19 years old and I live in Pudoc East, Tagudin, Ilocos Sur. I am 3rd year college of BS Information Technology.</p>
    </div>

    <div class="mt-4">
        <h4>Motto</h4>
        <p>When I am weakestgit init, God is my strength.</p>
    </div>

    <div class="mt-4">
        <h4>Hobbies</h4>
        <ul>
            <li>Swimming</li>
            <li>Listening to music</li>
            <li>Watching K-drama</li>
        </ul>
    </div>

    <div class="mt-4">
        <h4>Contact Me</h4>
        <p>
            <i class="fab fa-facebook-square text-primary me-2"></i>
            <a href="https://www.facebook.com/share/1C3Vhi5BaG/" target="_blank">facebook.com/rorybarnachea</a>
        </p>
        <p>
            <i class="fab fa-instagram text-danger me-2"></i>
            <a href="https://www.instagram.com/pretty_ror05?igsh=MTJwcWU3d25yMm93MA==" target="_blank">@pretty_ror05</a>
        </p>
    </div>
</div>
@endsection
