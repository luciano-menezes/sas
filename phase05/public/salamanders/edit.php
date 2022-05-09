<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');

$pageTitle = 'Edit Salamander';
$id = $_GET['id'];

// need to remove this line but right now it works.
$salamander = find_salamander_by_id($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';
    // show that $result is not necessary

    $result = update_salamander($salamander);
    if ($result === true) {
        redirect_to(url_for('salamanders/show.php?id=' . $id));
    } else {
        $errors = $result;
        //var_dump($errors);
        // exit();
    }
} else {
    $salamander = find_salamander_by_id($id);
}

?>
<?php echo display_errors($errors); ?>

<form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="name">
        <p>Name:<br> <input type="text" name="name" value="<?= h($salamander['name']); ?>"></p>
    </label>
    <label for="habitat">
        <p>Habitat: <br>
            <textarea rows="4" cols="50" name="habitat">
            <?= h($salamander['habitat']); ?>
        </textarea>
        </p>
    </label>
    <label for="description">
        <p>Description:<br>
            <textarea rows="4" cols="50" name="description">
            <?= h($salamander['description']); ?>
        </textarea>
        </p>
    </label>
    <label for="submit">
        <p><input type="submit" value="Edit Salamander"></p>
    </label>
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>