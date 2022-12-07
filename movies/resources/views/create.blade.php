@extends('layouts.master')


<form method="POST" action="/movies">
    {{-- <form method="POST" action="{{ route('/create') }}"> --}}

    @csrf

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Avatar">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Genre</label>
    <input type="text" name="genre" class="form-control" id="exampleFormControlInput1" placeholder="Sci-Fi">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Director</label>
    <input type="text" name="director" class="form-control" id="exampleFormControlInput1" placeholder="Christoper Nolan">
</div>

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Year</label>
    <input type="int" name="year" class="form-control" id="exampleFormControlInput1" placeholder="2012">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Storyline</label>
    <input type="text" name="storyline" class="form-control" id="exampleFormControlInput1" placeholder="/">
</div>

    <button type="submit">Add movie</button>
</form>
