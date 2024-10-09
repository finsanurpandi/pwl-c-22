<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Student</h1>
    <h3>Display Data</h3>
    {{ $nama }}
    <br/>
    {{ $kelas}}
    <br/>
    {!! $prodi !!}
    <br/>
    
    <h3>control structure</h3>
    @if($kelas == 'IF B 2022')
        Ini adalah kelas B
    @else
        Ini bukan kelas B
    @endif
    <br/>
    @foreach($alphabets as $alphabet)
        No. {{ $loop->iteration }} = 
        @if($loop->last)
            {{ $alphabet }}
        @else
            {{ $alphabet }} <br/>
        @endif
    @endforeach

    <form method="POST" action="#">
        @csrf
        @method('PATCH')
    </form>
    @php

    @endphp
</body>
</html>