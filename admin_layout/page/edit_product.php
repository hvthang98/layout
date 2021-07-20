<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    thông tin sản phẩm
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="cmxform form-horizontal " id="" method="get" action="" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-3">Tên sản phẩm</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="name" name="name" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-3">Giá bán</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="price" name="price" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Giá khuyến mãi</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="sellprice" name="sellprice" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-3">Thương hiệu</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15" name="brands_id">
                                        <option value="">casio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Mô tả</label>
                                <div class="col-lg-6">
                                    <textarea class="ckeditor" id="content" name="content"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Thứ tự sắp xếp</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="ordernum" name="ordernum" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Trạng thái</label>
                                <div class="col-lg-6">
                                    <label>
                                        <input type="radio" name="status" id="" value="1" checked="checked">
                                        Hiện
                                        <input type="radio" name="status" id="" value="0">
                                        Ẩn
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Lưu</button>
                                    <button class="btn btn-default" type="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <!-- information product -->
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thông tin kỹ thuật
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="cmxform form-horizontal " id="" method="get" action="" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-3">Giới tính</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15" name="gender">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                        <option value="10">Nam và nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-3">Loại máy</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="type" name="type" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-3">Chất liệu kính</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="glass_material" name="glass_material" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Chất liệu khung viền</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="frames" name="frames" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Chống nước</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="waterproof" name="waterproof" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Đường kính mặt(mm)</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="diameter" name="diameter" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Độ dày mặt(mm)</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="thickness" name="thickness" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Chất liệu dây</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="strap_material" name="strap_material" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Độ dày dây (mm)</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="strap_width" name="strap_width" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Thay dây</label>
                                <div class="col-lg-6">
                                    <label>
                                        <input type="radio" name="strap_change" id="" value="1" checked="checked">
                                        Có
                                        <input type="radio" name="strap_change" id="" value="0">
                                        Không
                                    </label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Thời gian sử dụng(Giờ)</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="expiry_date" name="expiry_date" type="number" min=0>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-3">Nơi sản xuất</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="address" name="address" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Lưu</button>
                                    <button class="btn btn-default" type="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</div>