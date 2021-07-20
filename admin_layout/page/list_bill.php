<style>
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
    <div class="">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <div style="padding: 15px 10px 10px 10px">
                <form action="">
                    <input type="text" class="form-control search" placeholder=" Search" name="seach">
                </form>
            </div>
            <div class="table-responsive">
                <table class="table" ui-jq="footable" ui-options="{
        " paging": { "enabled" : true }, "filtering" : { "enabled" : true }, "sorting" : { "enabled" : true }}">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đặt hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th style="width: 300px">Địa chỉ</th>
                            <th>Tổng tiền</th>
                            <th>Thời gian đặt</th>
                            <th>Trạng thái</th>
                            <th>Tùy Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>id</td>
                            <td>Lorriane</td>
                            <td>0123456789</td>
                            <td>Tphcm</td>
                            <td>4,000,000</td>
                            <td>12/2/2020</td>
                            <td>Chưa xử lý</td>
                            <td>
                                <a href="" class="a-icon" title="Chi tiết đơn hàng">
                                    <i class="fa fa-file-text style-icon"></i>
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
</div>