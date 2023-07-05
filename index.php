<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- my style -->
    <link rel="stylesheet" href="./styles/style.css">
    <!-- axios 1.4.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
    <body>
        <div id="app">
            <header>
                <div class="container">
                    <img src="./images/Spotify_icon.svg.png" alt="Spotify Logo" id="logo" class="py-3">
                </div>
            </header>
            <main>
                <div class="container d-flex flex-wrap">
                    <div class="card mx-3 my-4 p-4" v-for="(disc, index) in discs" :key="index">
                        <img :src="disc.poster" alt="Disc Poster">
                        <div class="card-body text-center text-white">
                            <h5 class="card-title fw-semibold">
                                {{disc.title}}
                            </h5>
                            <p class="card-text">
                                {{disc.author}}
                            </p>
                            <p class="card-text fw-semibold">
                                {{disc.year}}
                            </p>
                        </div>
                    </div>
                </div>
            </main>
            
            
        </div>

        <script src="./script/main.js"></script>
    </body>
</html>