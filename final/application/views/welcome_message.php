<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
        body{
            background-color: darkgrey;
        }
        .no-border td {
            border: none;
        }
	</style>
</head>
<body>
<br>
<div class="container">
    <div class="card text-white bg-info mb-3">
        <h5 class="card-header">Test show DB</h5>
        <form method="post" class="card-body">
            <table class="table table-dark">
                <thead>
                <tr class="no-border">
                    <td width="150">
                        <input type="text" value="<?= isset($item->id) ? $item->id : '' ?>" name="id" readonly class="form-control">
                    </td>
                    <td>
                        <input type="text" value="<?= isset($item->name) ? $item->name : '' ?>"  name="name" class="form-control">
                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block ">
                                    SAVE
                                </button>
                            </div>
                            <div class="col">
                                <a href="<?= base_url('/') ?>" class="btn btn-secondary btn-block ">
                                    CANCEL
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php if(count($items ) ==0) : ?>
                    <tr>
                        <td colspan="3" class="text-danger">
                            ไม่มีข้อมูลในระบบ !!!
                        </td>
                    </tr>
                <?php endif; ?>
                <?php foreach($items as $row):?>
                <tr>
                    <td><?=$row->id?></td>
                    <td><?=$row->name?></td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="<?= base_url("index.php/welcome/index/{$row->id}") ?>" class="btn btn-outline-warning btn-block btn-sm">
                                    แก้ไข
                                </a>
                            </div>
                            <div class="col">
                                <a onclick="return confirm('ต้องการลบข้อมูลนี้หรือไม่ ?')" href="<?= base_url("index.php/welcome/delete/{$row->id}") ?>" class="btn btn-outline-danger btn-block btn-sm">
                                ลบ
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th colspan="3" class="text-right">
                        รายการข้อมูลทั้งหมดที่ค้นพบ <?= count($items) ?> รายการ
                    </th>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>

</div>

</body>
</html>