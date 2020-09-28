<!-- Content to be replaced -->
@extends('welcome')
@section('abc')
<div>
<table>
    <tr>
        <th>Name</th>
        <th>Password</th>
    </tr>
    @foreach($usr as $row)
        <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['password']}}</td>
        </tr>
    @endforeach
</table>
</div>
@endsection

