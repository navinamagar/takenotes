<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif
    
    <form action="{{ route('store') }}" method="post">
        @csrf
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <input type="text" name="title" value="{{ old('title') }}">
        
        @error('content')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <input type="text" name="content" value="{{ old('content') }}">
        <input type="submit" value="Submit">
    </form>

</body>
</html>