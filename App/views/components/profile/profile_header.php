<div class="header container-fluid">
    <div class="container">
        <form action="" class="profile-photo-form">
            <img src="<?php echo public_path('images/profile_pic.jpg')?>" alt="" onclick="$('#profile-photo').click()">
            <i class="fas fa-camera" onclick="$('#profile-photo').click()"></i>
            <input type="file" id="profile-photo" onchange="$('#change-profile-photo-btn').click()" hidden>
            <input type="submit" id="change-profile-photo-btn" hidden>
        </form>
        <div class="profile-data">
            <p class="lead name"><?= $user->first_name ?> <?= $user->last_name ?> <span class="nickname">(<?= $user->nick_name ?>)</span></p>
            <p class="lead about">
                Hope<br>
                Computer Engineering <br>
                Programmer <br>
                Anime <br>
                Fightiiing <br>
            </p>
        </div>
        <hr>
        <nav class="navbar navbar-expand-lg pt-0">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active" id="my-posts-btn" onclick="switch_active_btn('my-posts-btn')">
                        <div class="nav-link btn">Posts</div>
                    </li>
                    <li class="nav-item" id="my-friends-btn" onclick="switch_active_btn('my-friends-btn')">
                        <div class="nav-link btn">Friends</div>
                    </li>
                    <li class="nav-item" id="my-friend-requests" onclick="switch_active_btn('my-friend-requests')">
                        <div class="nav-link btn">Friend Requests<span>5</span></div>
                    </li>
                    <li class="nav-item" id="blocked-users-btn" onclick="switch_active_btn('blocked-users-btn')">
                        <div class="nav-link btn">Blocked Users</div>
                    </li>
                    <li class="nav-item" id="edit-my-profile-btn" onclick="switch_active_btn('edit-my-profile-btn')">
                        <div class="nav-link btn">Edit</div>
                    </li>
                    <li class="nav-item" id="edit-my-profile-btn">
                        <div class="nav-link btn">Unfriend</div>
                    </li>
                    <li class="nav-item" id="edit-my-profile-btn">
                        <div class="nav-link btn">Block</div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link btn">
                            <a href="">Home</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link btn">
                            <a href="">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>