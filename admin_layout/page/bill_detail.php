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

    .table {
        margin-top: 20px;
    }

    .table>thead>tr>th {
        color: #000;
    }

    .table>tbody>tr>td {
        color: #747171;
    }
</style>

<div>
    <div class="panel-heading">
        Đơn hàng #id
    </div>
    <div class="row">
        <div class="col-sm-3">
            <section class="panel">
                <header class="panel-heading wht-bg">
                    <h5 class="gen-case">Chi tiết đơn hàng</h5>
                </header>
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 130px;">Mã đơn hàng</td>
                            <td>id</td>
                        </tr>
                        <tr>
                            <td>Khách hàng</td>
                            <td>Nguyen Van A</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>0123456789</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td>145/6 Trần Bá Giao, phường 5, quận Gò Vấp, Tp.HCM</td>
                        </tr>
                        <tr>
                            <td>User</td>
                            <td>admin@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Ngày đặt</td>
                            <td>01/01/2020</td>
                        </tr>
                        <tr>
                            <td>Ngày giao</td>
                            <td><p class="text-danger">08/01/2020</p></td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                                <p class="text-danger">Chưa xử lý</p>
                                <p class="text-primary">Đã xử lý</p>
                                <p class="text-primary">Đang giao hàng</p>
                                <p class="text-success">Đã giao hàng</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="panel">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Tạm tính</td>
                                <td>1,000,000 <span>VNĐ</span></td>
                            </tr>
                            <tr>
                                <td>Phí vận chuyển</td>
                                <td>0 <span>VNĐ</span></td>
                            </tr>
                            <tr>
                                <td>Tổng tiền</td>
                                <td>1,000,000 <span>VNĐ</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading wht-bg">
                    <h5 class="gen-case">Tùy chọn trạng thái đơn hàng</h5>
                </header>
                <form action="" method="">
                    <select class="form-control m-bot15" name="status">
                        <option selected value="0">Chưa sử lý</option>
                        <option value="1">Đã xử lý</option>
                        <option value="2">Đang giao hàng</option>
                        <option value="3">Đã giao hàng</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-success" onclick="questionLoading('Bạn có chắc chắn lưu trạng thái đơn hàng này')">Lưu</button>
                </form>
                
            </section>
        </div>
        <div class="col-sm-9 mail-w3agile">
            <section class="panel">
                <header class="panel-heading wht-bg">
                    <h4 class="gen-case">Danh sách sản phẩm
                    </h4>
                </header>
                <div class="panel-body minimal">
                    <div class="table-inbox-wrap ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;">STT</th>
                                        <th style="width: 180px;">Mã sản phẩm</th>
                                        <th style="width: 300px;">Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>adsadad</td>
                                        <td>Sản phẩm chất lượng công nghệ cao sử dụng sắt 1</td>
                                        <td>11,111,111</td>
                                        <td>1</td>
                                        <td>111</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>adsadad</td>
                                        <td>Sản phẩm chất lượng công nghệ cao sử dụng sắt 2</td>
                                        <td>11,111,111</td>
                                        <td>1</td>
                                        <td>111</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>