@extends('layouts.app')
@section('content')
<section class="page-intro"><div><div class="eyebrow">Temporary static data</div><h1>{{ $heading }}</h1></div><p>These five sample customer records are supplied by the <code>CustomerController</code> controller and rendered with a <code>@@foreach</code> loop.</p></section>
<div class="table-wrap">
    <table>
        <thead><tr><th>Full name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr><td>{{ $customer['full_name'] }}</td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td></tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
