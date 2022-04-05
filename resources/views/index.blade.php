<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site</title>
</head>
<body>
    Получить:
    <form action="{{ route('get') }}" method="post">
        @csrf
        <div>
            <label for="page_uid">Page_uid:</label>
            <input type="text" name="page_uid" id="page_uid" placeholder="Page_uid:">
        </div>

        <button type="submit">Send</button>
    </form>


    Отправить:
    <form action="{{ route('send') }}" method="post">
        @csrf
        <div>
            <label for="from">From:</label>
            <input type="text" name="from" id="from" placeholder="From:">
        </div>

        <div>
            <label for="to">To:</label>
            <input type="text" name="to" id="to" placeholder="To:">
        </div>

        <div>
            <label for="message">Message:</label>
            <input type="text" name="message" id="message" placeholder="Message:">
        </div>

        <button type="submit">Send</button>
    </form>
</body>
</html>
