<?php
   include './app/views/partials/head.php';
?>
    <form action="traitementFormulaire.view.php" method="POST">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="title" class="form-control" name="title" placeholder="Enter your title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <input type="content" class="form-control" name="content" placeholder="Enter your content">
        </div>

        <div class="form-group">
            <label for="création_date">création_date</label>
            <textarea class="form-control" name="création_date" rows="4" placeholder="Création date"></textarea>
        </div>

        <div class="form-group">
            <label for="start_task">start_task</label>
            <textarea class="form-control" name="start_task" rows="4" placeholder="start_task"></textarea>
        </div>

        <div class="form-group">
            <label for="stop_task">stop_task</label>
            <textarea class="form-control" name="stop_task" rows="4" placeholder="stop_task"></textarea>
        </div>


        <div class="form-group">
            <label for="point">point</label>
            <input class="form-control" name="point" rows="4" placeholder="Enter your point"></input>
        </div>



        <button type="submit" class="btn btn-primary">Sent</button>
    </form>
<?php
   include './app/views/partials/footer.php';
?>