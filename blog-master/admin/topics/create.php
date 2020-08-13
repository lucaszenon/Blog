<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../admin.css">

  <title>Admin - Criar Tópico</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Transforma Júnior
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
      <ul>
        <li><a href="../posts/index.php">Administrar Posts</a></li>
        <li><a href="../topics/index.php">Administrar Tópicos</a></li>
        <li><a href="../users/index.php">Administrar Usuários</a></li>
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Adicionar Tópicos</a>
        <a href="index.php" class="btn btn-sm">Administrar Tópicos</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Criar Topic</h2>

        <form action="create.php" method="post">
          <div class="input-group">
            <label>Nome</label>
            <input type="text" name="name" class="text-input">
          </div>
          <div class="input-group">
            <label>Descrição</label>
            <textarea class="text-input" name="description" id="description"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="save-topic" class="btn" >Salvar Tópico</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

  <!-- Custome Scripts -->
  <script src="../../scripts.js"></script>

</body>

</html>
