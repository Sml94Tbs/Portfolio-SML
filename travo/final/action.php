<!DOCTYPE html>
<html lang="fr">

<head>

    <head>
        <meta charset="UTF-8" />
        <link rel="icon" href="images/logo1.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ECEFRAM !</title>
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/action.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="mili">
                <div class="image-text">
                    <span class="image"><img src="images/logo1.jpg" alt=""></span>
                </div>
                <div class="text logo-text">
                    <span class="name">ECEFRAM</span>
                    <span class="prodession">Organisme</span>
                </div>
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="text" placeholder="Recherche..." />
                </li>
                <ul class="menu-link">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li>
                    <a href="index.php">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Retour</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home-action">
        <div class="home-action-content">
            <h1>Nom de la ville</h1>
            <h4>Voici ce que nous avons pu faire</h4>
        </div>
    </section>
    <script>
    const body = document.querySelector("body"),
        sidebar = body.querySelector("nav"),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    });

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";
        }
    });
    </script>
</body>

</html>