<html>

<head>
<title>
    提交
</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">

</head>
<body>


    <div class="container">

        <form action="/posts" method="post">

            {!! csrf_field() !!}
            <label for="label">
                Title
            </label>
            <p class="control">
                <input class="input" type="text" name="title">
            </p>



            <label for="label">
                Content
            </label>
            <p class="control">

                <textarea class="textarea" name="content" id="" cols="30" rows="10"></textarea>
            </p>


            <input class="button" type="submit" value="提交">

        </form>
        
    </div>


</body>

</html>