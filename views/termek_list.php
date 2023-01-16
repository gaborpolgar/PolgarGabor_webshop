<div class="row">
    <?php foreach ($termekek as $termek) : ?>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header">
                    <h2 class="card-title"><?php echo $termek['nev'] ?></h2>
                </div>
                <div class="card-body">
                    <?php echo $pizza['ar'] ?>
                </div>
        
                <div class="card-footer">
                    <img class="img-fluid" src="uploads/<?php echo $termek['kep'] ?>" alt="<?php echo $termek['nev'] ?>">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>