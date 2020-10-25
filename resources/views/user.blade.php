<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownik</h4>
    {{-- {{ $errors }} --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="usercontroller1" method="post" novalidate>
        {{ @csrf_field() }}
        <input type="email" name="address" autofocus placeholder="E-mail">
        @error('address')
            <span>{{ $message }}</span>
        @enderror
        <br><br>
        
        <input type="text" name="surname" placeholder="Nazwisko">
        @error('surname')
            <span>{{ $message }}</span>
        @enderror
        <br><br>

        <input type="submit" value="Zatwierdz>">
    </form>
</body>
</html>