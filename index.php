<html>
    <head>
        <title>kartkowka</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <?php
            $con = new mysqli("51.123.43.245", "admin", "123456", "quiz");
        
            $wys = $con->query("Select id, content FROM questions WHERE");
        
            $wyp = $wys->fetch_all(MYSQLI_ASSOC);
            for($i=0;$i<count($wyp); $i++){
                        echo $wyp[$i]["content"]."<br>";
                }
        $odp = $con->query("SELECT `id`, `content` FROM `answers` 
                                JOIN questions_has_answers ON questions_has_answers.answers_id=answers.id
                                WHERE questions_has_answers.questions_id = 1");
        
        $wypodp = $odp->fetch_all(MYSQLI_ASSOC);
                for($i=0; $i<count($wypodp); $i++){
                    echo $wypodp[$i]["content"]."<br>";
            
        ?>
    </body>