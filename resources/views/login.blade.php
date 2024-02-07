<!DOCTYPE html>
<header>
   <head> <title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <style>
        body{
            background-image :url("1.webp");
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .card{
            border: none;
            height: 220px;
        }
        .forms-inputs{
            position: relative;
        }
        .forms-inputs span
        {
            position: absolute;
            top:-18px;
            left: 10px;
    
            background-color: #fff;
            padding: 5px 10px;
            font-size: 15px
        }
            .forms-inputs input
            {
                height: 50px;
                border: 2px solid #eee}
            .forms-inputs input:focus
            {box-shadow: none;outline: none;border: 2px solid #0d08a0}
        .btn
        {height: 50px}
        .success-data
        {display: flex;flex-direction: column}
        .btn-dark {
            background-color: #4536f1;
        }
        .bxs-badge-check
        {font-size: 90px}
    </style>
</header>
<body>
    <form action="login.php" method="POST" >
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data" v-if="!submitted">
                         </div> 
                        <div class="forms-inputs mb-4"> <span>ID</span> <input autocomplete="off" type="id" v-model="id" name="id" >
                            
                        </div>
                        <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Login</button> </div>
                    </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>