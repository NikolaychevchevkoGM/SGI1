<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../ASSETS/CSS/kanban.css" type="" >
    <title>Espacio de trabajo Kanban</title>
  </head>
  <body>

    <?php require_once('lateral.php');?>
    <?php require_once('head.php');?>


    <div class="modal" id="toDo_form">
      <div class="header">
        <div class="title">Añadir Tarea</div>
        <button class="btn close-modal">&times;</button>
      </div>
      <div class="cuerpo">
          <input type="text" id="hacer_input">
          <input type="submit" value="Add ToDo" id="hacer_submit">
      </div>
    </div>

    <div class="toDo-container">
      <div class="status" id="no_status">
        <h1>Sin estado</h1>
        <button id="add_btn" data-target-modal="#toDo_form">+Add ToDo</button>
      </div>
      <div class="status">
        <h1>Sin iniciar</h1>
      </div>
      <div class="status">
        <h1>En progreso</h1>
      </div>
      <div class="status">
        <h1>Completado</h1>
      </div>
    </div>

    <div id="overlay"></div>

    <script src="../../ASSETS/JS/kanban.php"></script>
  </body>
</html>
