<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- VUE3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- BOOTSTRAP v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- FONT AWESOME v6.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AXIOS v1.4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" defer></script>

    <link rel="stylesheet" href="./styles/style.css">
    <script src="./script/main.js" type="application/javascript" defer></script>

    <title>Spotify Records</title>
</head>
<body>
    <div id="app">
        <header>
            <nav>
                <div class="logo-container my-container">
                    <i class="fa-brands fa-spotify"></i>
                </div>
            </nav>
        </header>
        <main>
            <div class="my-container">
                <ul>
                    <li v-for="record in records">
                        <div class="my-card">
                            <div class="poster-container">
                                <img :src="record.poster" :alt="record.author">
                            </div>
                            <div class="poster-info">
                                <h1>{{ record.title }}</h1>
                                <h2>{{record.author}}</h2>
                                <span>{{record.year}}</span>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>