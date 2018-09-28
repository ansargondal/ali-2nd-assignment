<?php require_once "layouts/header.php"; ?>


<?php
//check if user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    die;
}
?>

<!-- Page Content -->
<div class="container">
    <div class="card users-card  m-5">
        <div class=" p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Follow Users </h6>
            <?php
            $stmt = $db->prepare('SELECT *  FROM  users');
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_OBJ);

            foreach ($users as $user): ?>

                <div class="media text-muted pt-3">
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex px-3 justify-content-between align-items-center w-100">
                            <span class="d-block">@<?= $user->username ?></span>

                            <?php
                            $stmt = $db->prepare('SELECT *  FROM follow WHERE follower_id = :follower_id
                                   AND user_id = :user_id');
                            $stmt->execute([':follower_id' => $_SESSION['user_id'],
                                ':user_id' => $user->id
                            ]);
                            $following = $stmt->fetch();
                            if ($following):
                                ?>
                                <a href="follow.php?action=unfollow&user_id=<?= $user->id ?>">Unfollow</a>
                            <?php
                            else:
                                ?>
                                <a href="follow.php?action=follow&user_id=<?= $user->id ?>">follow</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- /.row -->

</div>
<!-- /.container -->

<?php require_once "layouts/footer.php"; ?>
