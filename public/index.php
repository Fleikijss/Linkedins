<!DOCTYPE html>
<?php
  define('PRIVATE_DIR', __DIR__ . "/../private");
?>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Linkedin - by Jānis</title>
    <link rel="stylesheet" href="css/style.css" id="stylesheet" />

    <?php include(PRIVATE_DIR . "/parts/top_menu.php"); ?>
    <main>
        <div>
            <div class="card">
            <nav class="left-sidemenu">
                <a href="#Home" class='active'>Home</a>
                <a href="#About">About</a>
                <a href="#Jobs">Jobs</a>
                <a href="#People">People</a>
                <a href="#Ads">Ads</a>
            </nav>
            </div>
        </div>
          <div class="content">
            <div class="card new">
                <img class="new__avatar" src="images/Ellipse.png" alt="avatar">
                <form id="new_post_form" action="api.php?api-name=new_post" method="POST">
                    <textarea class="new__input" type="text" name="new_post" placeholder="Start a post"></textarea>
                </form>
            </div>
            <?php
              include(PRIVATE_DIR . '/parts/post.php');
            ?>
          </div>
        <div>
            <div class="card">
            </div>
        </div>
    </main>

        <button onclick="changeThemeColor()" style="position:fixed; bottom: 5px; left: 5px;">
            Change Theme colors
        </button>

        <script src="js/request.js"></script>
        <script src="js/script.js"></script>

    <script>
        let design = 'light';
        function changeThemeColor() {
            if (design == 'light') {
                design = 'dark';
            }
            else {
                design = 'light';
            }
            document.querySelector('#stylesheet').setAttribute('href', 'css/' + design + '-style.css');
        }

        function triggerNav(selector) {
            document.querySelector(selector).classList.toggle('main-menu__right--open');
        }
    </script>
</html>
