<?php require __DIR__ . '/partials/meta-google.php' ?>

<!-- vue -->
<div id="app">
    <!-- corpo della pagina -->
    <?php require __DIR__ . '/partials/header.php' ?>

    <main class="bg-dark pb-5">
        <div class="container">
            <div class="row row-cols-3 g-3 pt-5">
                <!-- inizio ciclo -->
                
                    <div v-for="elem in dischi">
                        <div class="col text-white text-center">
                            <img :src="elem.poster" alt="poster" class="mt-3 img-fluid width">
                            <h2 class="fs-5 mt-4">{{elem.title}}</h2>
                            <div>{{elem.author}}</div>
                            <span>{{elem.year}}</span>
                        </div>
                    </div>
            
                <!-- fine ciclo -->
            </div>
        </div>
    </main>
   
</div>



<?php require __DIR__ . '/partials/footer.php' ?>
 
