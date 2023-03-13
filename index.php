<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body style="display: grid; font-family: sans-serif; height: 100vh; place-items:center; margin: 0;">
    <h1>HELLO World!</h1>
    <p>One option to start a local server:</p>
    <pre>php -S localhost:8888</pre>
    <p>Note that this file must be named index</p>

    <p>All PHP code must be inside a PHP tag</p>
    <p> PHP code tag starts with a less-than and a question mark, then php</p>
    <p> PHP code tag ends with a question mark and a greater-than.</p>

    <?php echo 'Hello World from php using echo'; ?>
    <br />
    <?php print 'Hello World from php using print'; ?>


    <pre>echo 'Hello World from php using echo';</pre>
    <pre>print 'Hello World from php using print';</pre>

    <?php
        date_default_timezone_set("America/Denver");
        echo "The time in Utah is " . date("h:i:s a") . '.';
    ?>

    <br />
    <?php $greeting = "Hello"; ?>
    <?php echo $greeting . ' Everyone!'; ?>
    <?php echo "$greeting Everyone!"; ?>

    <?php $bookName = "Green Eggs and Ham"; 
        $hasBeenRead = true;
    ?>

    <p>Have you read <?php echo $bookName; ?>?</p>
    <?php if($hasBeenRead) {
        $message = "Yes, I have read $bookName";
    } else {
        $message = "No, I have not read $bookName";
    }?>

    <p><?= $message ?></p>
    <p>A shortcode for less-than, question mark, php, echo is less-than question mark equals. And an ending semicolon is not needed.</p>


    <?php
        $books = [
            "Green Eggs and Ham",
            "The Cat in the Hat",
            "Hop on Pop",
            "Fox in Socks",
            "Dr. Seuss's ABC",
            "The Sneetches and Other Stories",
        ];
    ?>

    <p>There are 2 different ways to show a foreach in PHP. One uses curly braces, and the other uses a colon and then a closing php tag with endforeach.</p>
    <img src="./static/images/loop1.png" alt="loop1" style="margin: 1rem auto;" />
    <ul>
        <?php foreach($books as $book) { ?>
            <li><?= $book ?></li>
        <?php } ?>
    </ul>

    <img src="./static/images/loop2.png" alt="loop1" style="margin: 1rem auto;"/>
    <ul>
        <?php foreach($books as $book):  ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

    <footer style="width: 100%; padding: 1rem 0; display: flex; background: #FFFFE0; align-items: center; justify-content: center; margin-top: 1rem;">
    <p>&copy; <?php echo date("Y"); ?></p>
    </footer>

                            
</body>
</html>