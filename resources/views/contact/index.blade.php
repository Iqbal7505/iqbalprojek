<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact us</h2>
    
    @if(session('succes'))
        <p style="color:green">{{session('succes') }}</p>
    @endif

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <Form action="/contact" method="POST">
        @csrf 
        <label>Name:</label><br>
        <input typle="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input typle="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Phone:</label><br>
        <input typle="text" name="phone" value="{{ old('phone') }}"><br><br>

        <label>Message:</label><br>
        <textarea name="message" placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea><br><br>

        <button type="Submit">Kirim</button>
    </Form>
</body>
</html>
