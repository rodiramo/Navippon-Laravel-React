<?php

?>

@extends('layouts.main')

@section('title', 'My Profile')

@section('main')
    <header>

        <x-user-avatar :user="$user" />
        <h1>{{ $user->name }}'s Profile</h1>
        <p>Email: {{ $user->email }}</p>

        <a href="{{ route('profile.edit', ['id' => $user->user_id]) }}" class="btn btn-primary">Edit Profile</a>

    </header>

    @if (count($reservations) > 0)
        <div class="row">
            <h2>My Favourites</h2>
            @foreach ($reservations as $reservation)
                <div>
                    <div class="card">
                        <img class="mw-100" src="{{ Storage::url('imgs/' . $reservation->game->cover) }}"
                            alt="{{ $reservation->game->cover_description }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $reservation->game->title }}</h5>
                            <p class="card-text">{{ $reservation->game->description }}</p>
                            <a href="{{ route('reservations.confirmDelete', ['reservationId' => $reservation->id]) }}"
                                class="btn btn-danger">Delete</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No reservations yet.</p>
    @endif

@endsection
