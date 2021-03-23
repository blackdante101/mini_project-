<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include '../../templates/stylesheet.php'; ?>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>

<body class="bg-green">
    <div  class="container bg-white p-5">
        <div style="height:100%;" class="row">
           
                <div class="chatbox">
            <div class="header">
                <h1>DanteBot</h1>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Type a message">
                </div>
                <div>
                    <button type="submit" id="btn" class="send-btn btn bg-green text-white"><i class="fa fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
            </div>
            
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>