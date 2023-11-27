<HTML>
<head>
    <title>MediocreBuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="alert alert-primary">MediocreBuy</div>

    <?php
        //define SQL connection params

        $sql_server_address = '127.0.0.1';
        $sql_username = 'root';
        $sql_password = 'root';
        $sql_shop_dbname = 'classicmodels';
        $sql_port = 3306;
        $database = new mysqli($sql_server_address, $sql_username, $sql_password, $sql_shop_dbname, $sql_port);

        //search request handling
        $results = null;
        if($_POST){
            dd($database);
            $results = $database->query("SELECT productName");
        }
    ?>
    <div class="container">
    <form method="POST">
        <div class="input-group">
            <input type="text" class="form-control" style="width" id="search_phrase" name="searchbar" placeholder="Wyszukaj...">
            <div class="iput-group-append">
                <input class="form-control" type="submit" value="🔍" />
            </div>
        </div>
    </form>
    </div>
</body>
</HTML>