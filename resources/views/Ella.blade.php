@extends('layout')

@section('content')
<div class="bg-light p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
    <img src="{{ asset('images/ella.jpg') }}" class="profile-img d-block mx-auto mb-3" alt="Ella Estrella">
    <h2 class="text-center fw-bold">ELLA RAGMA. ESTRELLA</h2>

    <div class="mt-4">
        <h4>About Me</h4>
        <p>Hi! I’m Ella Estrella. I’m 21 years old and I live in Casilagan, Santa Cruz, Ilocos Sur. I am 3rd year college of BS Information Technology.</p>
    </div>

    <div class="mt-4">
        <h4>Motto</h4>
        <p>Even the smallest act of kindness can leave the biggest impact on someone’s life.</p>
    </div>

    <div class="mt-4">
        <h4>Hobbies</h4>
        <ul>
            <li>Playing lawn tennis</li>
            <li>Playing online games</li>
            <li>Watching Anime, GL Series, and Kdrama</li>
        </ul>
    </div>

    <div class="mt-4">
        <h4>Contact Me</h4>
        <p><i class="fab fa-facebook-square text-primary me-2"></i><a href="https://www.facebook.com/share/19zYR4HJKm/" target="_blank">facebook.com/ellaestrella</a></p>
        <p><i class="fab fa-instagram text-danger me-2"></i><a href="https://www.instagram.com/ellang_estrella?igsh=MWxnejQ0d2ZhY255aA==" target="_blank">@ellang_estrella</a></p>
    </div>
</div>
@endsection
