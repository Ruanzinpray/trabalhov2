<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact form</title>
    <link rel='stylesheet' type='text/css' media='screen' href='aaaaa.css'>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="brand"><img src="img/logo.png" height="100" width="100" /></a>
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Loja</a>

      <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contate-nos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrinho.php">Carrinho</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Departamentos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">aaa</a></li>
                <li><a class="dropdown-item" href="#">bbbbbbbb</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">ccccccccccccccc</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Entre / Cadastre-se</a>
          
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            </li>
          </form>

        </div>
      </div>
  </nav>
<link href="form.css" rel="stylesheet">

<div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">Contate-nos</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Seu nome</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Seu email</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">aaaaaaaa</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>


    </form>
    </div>

</div>

</body>
</html>

