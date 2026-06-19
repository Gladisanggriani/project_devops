<div class="content">
    <!-- Info -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Tambah Data</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                        <div class="mb-4">
                            <label class="form-label" for="one-ecom-product-name">Name Barang</label>
                            <input type="text" class="form-control" id="one-ecom-product-name" name="one-ecom-product-name" value="Dark Souls III">
                        </div>
                        <div class="mb-4">
                            <div class="mb-4">
                                <label class="form-label" for="">Kategori</label>
                                <select class="form-select" name="kategori_id">
                                    <option selected="">Pilih Kategori</option>
                                    <option value="3">cemilan</option>
                                    <option value="4">makanan sehat</option>
                                    <option value="5">obat - obatan terlarang</option>
                                    <option value="8">odol gigi</option>
                                    <option value="9">Alat Mandi</option>
                                    <option value="10">minuman</option>
                                </select>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="one-ecom-product-price">Harga</label>
                                    <input type="text" class="form-control" id="one-ecom-product-price" name="one-ecom-product-price" value="Rp.">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="one-ecom-product-stock">Stock</label>
                                    <input type="text" class="form-control" id="one-ecom-product-stock" name="one-ecom-product-stock" value="29">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <label class="form-label" for="one-ecom-product-stock">Expired</label>
                                    <form action="be_forms_plugins.html" method="POST" onsubmit="return false;">
                                        <div class="row">
                                            <div class="col-lg-8 col-xl-6">
                                                <div class="row mb-4">
                                                    <div class="col-xl-7">
                                                        <input type="text" class="js-flatpickr form-control" id="example-flatpickr-datetime-24" name="example-flatpickr-datetime-24" data-enable-time="true" data-time_24hr="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mb-">
                                <button type="submit" class="btn btn-alt-primary">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Info -->

    <!-- Media -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Media</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    <form class="dropzone dz-clickable" action="be_pages_ecom_product_edit.html">
                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Media -->
</div>