<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        width: 400px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        text-align: center;
    }

    .card img {
        width: 50%;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-primary {
        width: 100%;
        background: linear-gradient(to right, #007bff, #6610f2);
        color: #fff;
        border: none;
    }

    h2 {
        color: #007bff;
    }

    .alert {
        border-radius: 5px;
        margin-top: 10px;
    }
</style>

<body>
    <div class="card">
        <img src="<?= base_url('images/fevicon.png'); ?>" alt="Logo">

        <h2>Login</h2>

        <?php if (session()->get('error')): ?>
        <div class="alert alert-danger">
            <?= session()->get('error') ?>
        </div>
        <?php endif; ?>

        <?= form_open('admin/doLogin'); ?>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" required>
            <?php if (isset($validation) && $validation->hasError('email')): ?>
            <small class="text-danger"><?= $validation->getError('email') ?></small>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required>
            <?php if (isset($validation) && $validation->hasError('password')): ?>
            <small class="text-danger"><?= $validation->getError('password') ?></small>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
        <?= form_close(); ?>
    </div>

    <!-- Bootstrap JS and Popper.js (required for some Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
