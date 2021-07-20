<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    thêm sản phẩm mới
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
                                    <input class=" form-control" id="price" name="price" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Giá khuyến mãi</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="sellprice" name="sellprice" type="text">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Ảnh đại diện</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="image" name="image" type="file">
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
                                    <input class="form-control " id="ordernum" name="ordernum" type="number">
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
    </div>
    <!-- page end-->
</div>