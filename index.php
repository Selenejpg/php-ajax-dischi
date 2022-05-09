<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi php</title>
</head>
<body>
    
    <div id="app">
        <div v-for="index in arrayDischi">{{index}}</div>
    </div>

<!-- Vue cdn -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<!-- Axios cdn -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Main js -->
<script src="./JS/main.js"></script>
</body>
</html>