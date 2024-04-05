<?php
/*
 * copying from dash-ui and modified by awaludin
 * 5 april 2024

 * MIT License

Copyright (c) 2024 Awaludin

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

 */
?>

@extends('layouts.authentication')

@section('title', 'Masuk | Sistem Persewaan Mobil')

@section('contents')
<div class="mb-4">
    <!-- <a href="../index.html"><img src="..assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a> -->
    <h3 style="color:rgb(98, 75, 255);">Sistem Persewaan Mobil</h3>
    <p class="mb-6">Masukkan Informasi Pengguna.</p>
</div>
<!-- Form -->
<form id="form-data">
    <!-- Username -->
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required="">
    </div>
    <!-- Password -->
    <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
    </div>
    <!-- Checkbox -->
    <!-- <div class="d-lg-flex justify-content-between align-items-center
        mb-4">
    <div class="form-check custom-checkbox">
        <input type="checkbox" class="form-check-input" id="rememberme">
        <label class="form-check-label" for="rememberme">Remember
            me</label>
    </div>

    </div> -->
    <div>
    <!-- Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" id="login" onClick="postData('{{ route('authenticate') }}', event)">Masuk</button>
    </div>

    <div class="d-md-flex justify-content-between mt-4">
        <div class="mb-2 mb-md-0">
        <a href="{{ route('registrasi.index') }}" class="fs-5">Registrasi</a>
        </div>
        <div>
        <!-- <a href="forget-password.html" class="text-inherit
            fs-5">Forgot your password?</a>
        </div> -->

    </div>
    </div>


</form>
</div>
@endsection

@push('scripts')
<script>
    $(function(){
        $('#login').on('click', function(e){
            e.preventDefault();
        })
    })
</script>
@endpush