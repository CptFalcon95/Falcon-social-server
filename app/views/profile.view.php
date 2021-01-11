<?php
requireTemplate('partials/head'); 
requireTemplate('partials/navigation');
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="profile-details">
                <div class="card mt-2">
                    <img src="/images/undraw_profile.svg" class="card-img-top rounded px-4 pt-4" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-md-9"></div>
    </div>
</div>

<?php requireTemplate('partials/footer'); ?>