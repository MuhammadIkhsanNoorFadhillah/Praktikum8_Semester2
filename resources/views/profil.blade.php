@php
    $username = 'Muhammad Ikhsan Noor Fadhillah';
    $role = 'Admin';
@endphp

@if ($role =='Admin')
    <h3>Selamat Datang, {{$username}}! Anda Adalah Seorang {{$role}}</h3>
@else
    <h3>Selamat Datang, {{$username}}! Anda Adalah Seorang User</h3>
@endif
