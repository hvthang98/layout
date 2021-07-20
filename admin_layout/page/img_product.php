<style>
    @media (min-width: 768px) {
        .col-sm-3 {
            width: 30%;
        }

        .col-sm-9 {
            width: 70%;
        }
    }

    .panel {
        padding: 10px;
    }

    .style-icon {
        color: black;
        font-size: 22px;
        margin-right: 10px;
    }

    .style-icon:hover {
        color: red;
    }

    .table>thead>tr>th {
        color: #000;
    }

    .table>tbody>tr>td {
        color: #747171;
    }
</style>

<div class="">
    <div class="panel-heading">
        Quản lý ảnh sản phẩm
    </div>

    <div class="row">
        <div class="col-sm-3 com-w3ls">
            <section class="panel">
                <div class="panel-body">
                    <a class="btn btn-compose">
                        Thêm ảnh
                    </a>
                </div>
                <div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" class="form-control" id="" title="chọn file ảnh">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Lưu</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-sm-9 mail-w3agile">
            <section class="panel">
                <header class="panel-heading wht-bg">
                    <h4 class="gen-case">Danh sách ảnh
                    </h4>
                </header>
                <div class="panel-body minimal">
                    <div class="table-inbox-wrap ">
                        <div class="table-responsive">
                            <table class="table" ui-jq="footable" ui-options="{
        " paging": { "enabled" : true }, "filtering" : { "enabled" : true }, "sorting" : { "enabled" : true }}">
                                <thead>
                                    <tr>
                                        <th style="width:50px;">STT</th>
                                        <th style="width:250px;">Ảnh sản phẩm</th>
                                        <th style="width:150px;">Trạng thái</th>
                                        <th style="width:150px;">Chú thích</th>
                                        <th>Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ảnh</td>
                                        <td>Ẩn/Hiện</td>
                                        <td>Ảnh đại diện</td>
                                        <td>
                                            <a href="" data-toggle="modal" class="btn btn-danger">
                                                Xóa
                                            </a>
                                            <a href="" data-toggle="modal" class="btn btn-success">
                                                Chọn làm ảnh đại diện
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                </div>
            </section>
        </div>
    </div>

</div>