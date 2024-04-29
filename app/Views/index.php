<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<style>
    body {
        background-color: #e6ecf0; /* Warna latar belakang */
        color: #333; /* Warna teks */
        font-family: Arial, sans-serif; /* Jenis font */
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        color: #1da1f2; /* Warna teks judul */
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    .container {
        display: flex;
        justify-content: space-between; /* Agar tiga bagian berada pada ujung kiri dan kanan */
    }

    .sidebar,
    .profile-container,
    .suggestions {
        width: calc(33.33% - 20px); /* Lebar setiap bagian */
        margin: 20px;
        padding: 20px;
        background-color: #fff; /* Warna latar belakang */
        border-radius: 10px;
    }

    .sidebar ul,
    .suggestions ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li,
    .suggestions ul li {
        margin-bottom: 10px;
    }

    .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="container">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href=""><i class="fas fa-home"></i> Home</a></li>
                <li><a href=""><i class="fas fa-bell"></i> Notifications</a></li>
                <li><a href=""><i class="fas fa-envelope"></i> Messages</a></li>
                <li><a href=""><i class="fas fa-bookmark"></i> Bookmarks</a></li>
                <li><a href=""><i class="fas fa-list"></i> Lists</a></li>
                <li><a href=""><i class="fas fa-user"></i> Profile</a></li>
                <li><a href=""><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href=""><i class="fas fa-question"></i> Help</a></li>
            </ul>
        </div>

        <div class="profile-container">
            <h1>Twitter Profile</h1>
            <div>
                <img class="profile-picture" src="<?= $profile['profile_picture'] ?>" alt="<?= $profile['fullname'] ?>'s profile picture">
                <h2><strong>@<?= $profile['username'] ?></strong></h2>
                <p><?= $profile['fullname'] ?></p>
                <p><?= $profile['bio'] ?></p>
                <a href="">Followers <i class="followers"></i></a>
                <a href="">Following <i class="following"></i></a>
            </div>
            <div>
                <h2>Tweets</h2>
                <?php foreach ($profile['tweets'] as $tweet): ?>
                    <div>
                        <p><?= $tweet['content'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="suggestions">
            <h2>Who to Follow</h2>
            <ul>
                <li><a href=""><i class="fas fa-user"></i> @username1</a></li>
                <li><a href=""><i class="fas fa-user"></i> @username2</a></li>
                <li><a href=""><i class="fas fa-user"></i> @username3</a></li>
                <!-- Add more suggestions here -->
            </ul>
        </div>
    </div>
</body>

<?= $this->endSection() ?>
