@extends('layouts.app')
@section('content')
<section class="page-intro"><div><div class="eyebrow">About the project</div><h1>{{ $heading }}</h1></div><p>This activity demonstrates the first version of a POS system using Laravel's MVC structure. The routes map URLs to controller methods, and the controllers pass page data to reusable views.</p></section>
<section class="card about-panel"><p>The customer and user records are intentionally stored in static PHP arrays. This keeps the focus on routing, controllers, and views while preparing the application for a database in the next module.</p></section>
@endsection
