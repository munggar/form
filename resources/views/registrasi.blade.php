<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/registrasi.css">
    <title>Join With Us!</title>
</head>

<body style="margin: 0px">
    <div class="bekgron">
    </div>
    <form action="/simpanreg" method="post">
        {{ csrf_field() }}
        <div class="login-box fadeIn">
            <div class="lb-header">
                <a href="/loginus" class="active" id="login-box-link">Ayo daftar menjadi bagian dari kami!</a>
                <div class="u-form-group fadeIn first">
                    <input type="text" name="name" placeholder="Nama" />
                </div>
                <div class="u-form-group fadeIn second">
                    <input type="text" name="username" placeholder="Username" />
                </div>
                <div class="u-form-group fadeIn third">
                    <input type="email" name="email" placeholder="Email" />
                </div>
                <div class="u-form-group fadeIn fourth">
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <div class="u-form-group fadeIn fourth">
                    <button type="submit">Daftar sekarang!</button>
                </div>
                <div class="u-form-group fadeIn fourth" style="color: white">Sudah Memiliki Akun?
                    <a href="/login" class="forgot-password"> Login Disini!</a>
                </div>
    </form>
    </div>
</body>