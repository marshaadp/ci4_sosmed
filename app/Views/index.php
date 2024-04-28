<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<style>
    h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

</style>

    <title>Twitter</title>
    </head>
<body>
    <h1>Twitter Profile</h1>

    <div>
        <img src="<?= $profile['profile_picture'] ?>" alt="<?= $profile['fullname'] ?>'s profile picture">
        <h2><strong>@<?= $profile['username'] ?></h2>
        <p><?= $profile['fullname'] ?></strong></p>
        <p><?= $profile['bio'] ?></p>

        <a href="">Followers <i class="followers"></i></a>
        <a href="">Following <i class="following"></i></a>
    </h3>
    </div>

    <div>
        <h2>Tweets</h2>
        <?php foreach ($profile['tweets'] as $tweet): ?>
            <div>
                <p><?= $tweet['content'] ?></p>
                <p><small><?= $tweet['timestamp'] ?></small></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<?= $this->endSection() ?>


