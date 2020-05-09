<?php include 'header.php'; ?>
    <div class="container">
        <div>
            <a href="" class="btn btn-primary">Edit</a>
        </div>
<?php if (isset($_SESSION['profile'])): ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Adrress</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
<?php else: ?>
    <h2>
        <strong>Lỗi:</strong>Vui lòng đăng nhập lại
    </h2>
<?php endif; ?>

    </div>
<?php include 'foodter.php'?>