<!doctype html>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/Include/globals.php';?>
<?php include_once $GL_root . $GL_path . '/Include/session.php';?>
<html lang="<?php echo $_SESSION['lang']; ?>">

<head>
    <?php include_once $GL_root . $GL_path . '/Include/head_includes.php';?>
    <link href="/CSS/iv.css" rel="stylesheet" type="text/css">
    <title>Irregular Verbs</title>
    <link rel="canonical" href="https://www.c00lsch00l.eu/Games/irregular_verbs.php">
</head>

<body>
    <?php include_once $GL_root . $GL_path . '/Include/header.php';?>

    <div class="container my-5 p-2 cool_page">
        <!-- CONTENT -->

        <h1>Irregular Verbs</h1>

        <p>Practice irregular verbs.<br /> Select difficulty: easy - common verbs, primary school level; less easy -
            less common verbs are included (over 200 in total). <br />
            Displayed verb: choose which verb is displayed, random of first.
        </p>

        <div id="setup">
            <fieldset>
                <legend>Setup</legend>Difficulty:
                <input type="radio" name="level" value="easy" checked="checked" />Easy
                <input type="radio" name="level" value="hard" />Less Easy
                <br />Displayed verb:
                <input type="radio" name="fixed" value="first" />First
                <input type="radio" name="fixed" value="random" checked="checked" />Random
                <br />How many verbs (5-25):
                <input type="text" id="howmany" size="2" value="10" />
                <input type="button" id="start" value="Start/New set" class="btn cool_dark_orange"/>

            </fieldset>
            <br />
        </div>

        <div class="container" id="window">
            <div id="buttons">
                <form action="">
                    <input type="button" id="check" value="Check answers" class="btn cool_dark_orange"/>
                </form>
                <br />
            </div>
            <div id="board">
                <table>
                    <colgroup>
                        <col class="col1" />
                        <col class="col2" />
                        <col class="col2" />
                        <col class="col2" />
                    </colgroup>
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Simple Present</td>
                            <td>Simple Past</td>
                            <td>Past Participle</td>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div id="result" class = "my-3"></div>
        </div>


        <!-- END CONTENT  -->
    </div>




    <?php include_once $GL_root . $GL_path . '/Include/footer.php';?>
    <script src="irregular_verbs.js" type="text/javascript"></script>
</body>

</html>