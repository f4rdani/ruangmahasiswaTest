<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .change-password-container {
            background-color: #ffffff;
            padding: 60px;
            border-radius: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #007bb6;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #007bb6;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bb6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #005f8d;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #007bb6;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 4px;
            color: white;
        }

        .alert-danger {
            background-color: #f44336;
        }

        .alert-success {
            background-color: #4CAF50;
        }
    </style>
</head>
<body>

    <div class="change-password-container">
        <h2>Change Password</h2>
        <p>Enter new password below.</p>

        <!-- Displaying success or error message -->
        <?php if ($this->session->flashdata('message')): ?>
            <div class="alert <?= strpos($this->session->flashdata('message'), 'danger') ? 'alert-danger' : 'alert-success' ?>">
                <?= $this->session->flashdata('message') ?>
            </div>
        <?php endif; ?>

        <!-- Form submission, sending data to the controller -->
        <form action="<?= base_url('Mahasiswa/gantipass_func') ?>" method="post">
            
            <input type="password" name="new_password1" placeholder="New password" required>
            <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
            
            <input type="password" name="new_password2" placeholder="Confirm new password" required>
            <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>

            <button type="submit">Change Password</button>
        </form>

        <a class="back-link" href="<?= base_url('Mahasiswa'); ?>">Back to Dashboard</a>
    </div>

</body>
</html>
