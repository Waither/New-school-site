<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZS1 :: Dodaj</title>
    <style>
        html {
            height: 100%;
            background: rgb(106,17,203);
            background: linear-gradient(180deg, rgba(106,17,203,1) 0%, rgba(207,103,103,1) 50%, rgba(106,17,203,1) 100%); 
        }
        body {
            color: #222222;
            margin: 0;
            padding: 0;
            height: 100%;
            
        }
        section {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #menu {
            width: 60%;
            height: auto;
            background-color: white;
            border-radius: 20px;
            text-align: center;
        }
        form{
            display: block;
            justify-content: center;
            align-items: center;
        }
        p{
            width: 600px;
            margin: 10px auto;
        }
        input {
            width: 300px;
            height: 30px;
        }
        textarea {
            width: 300px;
            height: 200px;
            resize: none;
        }
        span {
            margin-bottom: 10px;
        }
        .inputy {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <section>
        <div id="menu">
            <form action="" method="POST">
                <h1>Dodaj aktualność</h1>
                <div class="inputy">
                    <input type="text" name="temat" id="temat" placeholder="Temat">
                </div>
                <div class="inputy">
                    <input type="text" name="autor" id="autor" placeholder="Autor">
                </div>
                <div class="inputy">
                    <p>Główne zdjęcie (w rozdzielczości 500x300 pikseli):</p>
                    <input type="file" name="zdjecieglowne" id="zdjecieglowne">
                </div>
                <div class="inputy">
                    <textarea placeholder="Tekst"></textarea>
                </div>
                <div class="inputy">
                    <p>Dodatkowe zdjęcia:</p>
                    <span>1. </span><input type="file" name="zdjecie1" id="zdjecie1"><br>
                    <span>2. </span><input type="file" name="zdjecie2" id="zdjecie2"><br>
                    <span>3. </span><input type="file" name="zdjecie3" id="zdjecie3"><br>
                    <span>4. </span><input type="file" name="zdjecie4" id="zdjecie4"><br>
                    <span>5. </span><input type="file" name="zdjecie5" id="zdjecie5"><br>
                    <span>6. </span><input type="file" name="zdjecie6" id="zdjecie6"><br>
                    <span>7. </span><input type="file" name="zdjecie7" id="zdjecie7"><br>
                    <span>8. </span><input type="file" name="zdjecie8" id="zdjecie8"><br>
                    <span>9. </span><input type="file" name="zdjecie9" id="zdjecie9"><br>
                    <span>10. </span><input type="file" name="zdjecie10" id="zdjecie10">
                </div>
                <div class="inputy">
                    <input type="submit" value="Wyślij">
                </div>
                <span id="zle"></span>
            </form>
        </div>
    </section>
    <script>

    </script>
    <?php

    ?>
</body>
</html>