<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
        body{
            background-color:darkgrey;
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
                        <input type="text"  name="id" readonly class="form-control">
                    </td>
                    <td>
                        <input type="text"   name="name" class="form-control">
                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block ">
                                    SAVE
                                </button>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-secondary btn-block ">
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

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="" class="btn btn-outline-warning btn-block btn-sm">
                                    แก้ไข
                                </a>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-outline-danger btn-block btn-sm">
                                ลบ
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                    <th colspan="3" class="text-right">
                        รายการข้อมูลทั้งหมดที่ค้นพบ ? รายการ
                    </th>
                </tr>
                </tfoot>
            </table>
        </form>
    </div>

</div>

</body>
</html>