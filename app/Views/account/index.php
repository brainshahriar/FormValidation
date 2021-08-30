<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Register</h3>
    <form method="post" action="<?= site_url('account/save') ?>">
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" value="<?= set_value('username') ?>">
            </td>
            <td>
                <?= $validation->getError('username') ?>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value="<?= set_value('password') ?>">
            </td>
            <td>
                <?= $validation->getError('password') ?>
            </td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td>
                <input type="password" name="confirmpassword" value="<?= set_value('confirmpassword') ?>">
            </td>
            <td>
                <?= $validation->getError('confirmpassword') ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" value="<?= set_value('email') ?>">
            </td>
            <td>
                <?= $validation->getError('email') ?>
            </td>
        </tr>
              <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="Save">
            </td>
        </tr>
    </table>
</form>
</body>
</html>