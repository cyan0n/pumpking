@extends('layouts.base')

@section('content')

<section class="gallery">
<div class="row">
    <div class="col-md-4">@each('submission.list-item', $users, 'user')</div>
</div>
</section>