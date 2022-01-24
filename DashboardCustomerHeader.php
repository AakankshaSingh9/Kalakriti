<?php ?>
<html>

<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="#"></a>
                <span class="icon"><img src="../Mini Project/image/Logo.png" style="height:60px;"></span>
                <!--<span class="title"><h2>Brand Name</h2></span>-->
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Dashboard</h2>
                    </span>
                </a>
            </li>

            <li>
                <a href="../ChatApp/login.php">
                    <span class="icon"><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Message</h2>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Help</h2>
                    </span>
                </a>
            </li>
            <!--<li>
							<a href="#">
								<span class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
								<span class="title"><h2>Settings</h2></span>
							</a>
						</li>-->
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Password</h2>
                    </span>
                </a>
            </li>
            <li>
                <a href="Feedbackform.php">
                    <span class="icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Feedback</h2>
                    </span>
                </a>
            </li>
            <li>
                <a href="PostCustomer.php">
                    <span class="icon"><i class="fa fa-upload" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Post</h2>
                    </span>
                </a>
            </li>
            <li>
                <a href="#" id="logout">
                    <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                    <span class="title">
                        <h2>Sign Out</h2>
                    </span>
            </li>
        </ul>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"></div>
            <!--<div class="search">
							<label>
								<input type="text" placeholder="Search here"><i class="fa fa-search" aria-hidden="true"></i>
							</label>
						</div>-->
            <div class="user">
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">

            </div>
        </div>

</body>

</html>