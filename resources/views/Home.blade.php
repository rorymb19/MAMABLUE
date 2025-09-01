@extends('layout')

@section('content')
<style>
    /* Custom styles for image and hover effect */
    .profile-img {
        width: 260px;
        height: 260px;
        border-radius: 50%;
        object-fit: cover;
        border: 6px solid white;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        margin-bottom: 3rem;
    }

    .names h4 {
        color: #3c2e2e;
        transition: color 0.3s, transform 0.3s;
        cursor: default;
    }

    .names h4:hover {
        color: #ff5e5e;
        transform: scale(1.05);
    }

    /* Container background with padding and rounded corners */
    .home-container {
        background: linear-gradient(to right, #ffe7e7, #fff9f0);
        padding: 4rem 2rem;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        max-width: 900px;
        margin: 3rem auto;
    }
</style>

<div class="home-container text-center">
    <h1 class="display-4 fw-bold mb-3" style="color:#4d2c2c;">Welcome Group Cheater</h1>
    <h3 class="text-secondary mb-5">BSIT 3-A</h3>

    <img src="{{ asset('images/group-photo.jpg') }}" alt="Group Photo" class="profile-img mx-auto d-block">

    <div class="names mt-5">
        <h4 class="fw-bold mb-3">Ella Estrella</h4>
        <h4 class="fw-bold mb-3">Sandy Micua</h4>
        <h4 class="fw-bold">Rory Barnachea</h4>
    </div>
</div>
@endsection
