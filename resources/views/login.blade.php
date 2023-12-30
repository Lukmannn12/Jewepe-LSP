<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
</head>

<nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="Logo" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/"><strong>Artikel</strong></a>
                </li>
            </ul>
        </div>
    </nav>
<body>

    <section id="hero">
        <div id="hero-img">
            <img src="img/login.png" width="400" alt="hero banner">
        </div>
        <div id="hero-greeting">
        <div class="container crud-container">
            <h1 style="font-size: 30px; font-weight:700;" >Welcome To Admin!</h1>
            <p style="font-size: 20px;">Login your account</p>
            <form action="/loginuser" method="post">
                @csrf
            <div class="mb-3 pt-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Email Anda">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
            </form>
        </div>
        </div>
    </section>
</body>

</html>