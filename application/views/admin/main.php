
<main>
    <div class="container py-5">
        <div class="card mt-5 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <select name="jml" class="custom-select">
                            <option disabled selected>Pilih Jumlah</option>
                            <option value="5">5</option>
                            <option value="12">10</option>
                            <option value="25">20</option>
                            <option value="60">50</option>
                            <option value="120">100</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="key" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md mb-3">
                                <button id="generate" type="button" class="btn btn-md btn-warning m-0 z-depth-0 w-100">
                                    Generate
                                </button>
                            </div>
                            <div class="col-md">
                                <button id="submit" type="button" class="btn btn-md btn-success m-0 z-depth-0 w-100">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table id="tabel" class="table table-striped table-bordered">
                    <thead class="unique-color-dark text-white">
                        <tr>
                            <td>No</td>
                            <td>Kode Voucher</td>
                            <td>Jumlah</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    
                    <tbody id="model">

                    </tbody>

                    <tfoot class="unique-color-dark text-white">
                        <tr>
                            <td>No</td>
                            <td>Kode Voucher</td>
                            <td>Jumlah</td>
                            <td>Status</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
