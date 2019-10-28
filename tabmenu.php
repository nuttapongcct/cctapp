<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
</head>
<body>
    <div id="app">
        <div class="column" id="navbar" style="border-bottom: 1px solid #f5f5f5;">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <a href="home.php" title="" ><img src="https://uppic.cc/d/5neC" alt="" width="55px"/></a>
                    </div>
                    <div class="level-item">
                        <a href="home.php">
                            <p class="title is-5 is-bold" style="margin-left:10px;text-align:center;">CHAROENCHAI TRANSFORMER</p>
                        </a>
                    </div>
                    
                </div>
                <div class="level-right">
                    <div style="margin-right:5px;text-align:center;">
                        <a href="login.php">
                            <button class="button">Login</button>
                        </a>

                    <b-dropdown
                        position="is-bottom-left"
                        aria-role="menu">
                        <a
                            class="navbar-item"
                            slot="trigger"
                            role="button">
                            <span>Menu</span>
                            <b-icon icon="menu-down"></b-icon>
                        </a>

                        <b-dropdown-item custom aria-role="menuitem">
                            <div class="level-item">
                                <img src="https://uppic.cc/d/5neC" width="35px" style="margin-right:10px;">
                                <p class="title is-6 is-bold">Charoenchai Tranformer</p>
                            </div>
                        </b-dropdown-item>
                        <hr class="dropdown-divider">
                        <b-dropdown-item value="home" aria-role="menuitem">
                            <a href="home.php">
                                <b-icon icon="home"></b-icon>
                                Home
                            </a>
                        </b-dropdown-item>
                        <b-dropdown-item value="products" aria-role="menuitem">
                            <b-icon icon="cart"></b-icon>
                            Products
                        </b-dropdown-item>
                        <b-dropdown-item value="blog" disabled aria-role="menuitem">
                            <b-icon icon="book-open"></b-icon>
                            Blog
                        </b-dropdown-item>
                        <hr class="dropdown-divider" aria-role="menuitem">
                        <b-dropdown-item value="settings">
                            <b-icon icon="settings"></b-icon>
                            Settings
                        </b-dropdown-item>
                        <b-dropdown-item value="logout" aria-role="menuitem">
                            <b-icon icon="logout"></b-icon>
                            Logout
                        </b-dropdown-item>
                    </b-dropdown></div>
                </div>
            </div>
        </div> 
    </div>
    <?php include 'script.php' ?>
</body>
</html>

<style>
#navbar {
  background-color: #fafafa;
  position: fixed;
  top: 0px;
  z-index: 1;
  width: 100%;
  transition: top 0.3s;
}
</style>