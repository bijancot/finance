<div class="min-vh-100 general-padding bg-light-purple">
    <div class="p-5">
        <div class="card-section">
            <div class="head">
                <p>Global Cost</p>
                <input type="date">
            </div>
            <div class="body">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <?php
                            $template = array('table_open' => '<table id="tblDashboard" class="table-custom">');
                            $this->table->set_template($template);
                            $this->table->set_heading('No', 'No. STNK', 'Merk', 'Umur Kendaraan', 'Jenis Pengeluaran', 'Jumlah Transaksi', 'Total transaksi');
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($GlobalCost as $row) {
                                $this->table->add_row(
                                    $no++,
                                    $row->kendaraan_stnk,
                                    $row->kendaraan_merk,
                                    $row->umur_kendaraan,
                                    $row->pengeluaran_jenis,
                                    // $row->region_kota,
                                    $row->jumlah_transaksi,
                                    $row->total_transaksi

                                );

                            ?>
                            <?php }
                            echo $this->table->generate(); ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="foot">
            </div>
        </div>
        <div class="card-section">
            <div class="head">
                <p>Daftar Kendaraan</p>
            </div>
            <div class="body">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <!-- <?php
                            $template = array('table_open' => '<table id="tblDashboard" class="table-custom">');
                            $this->table->set_template($template);
                            $this->table->set_heading('No','No. STNK', 'Merk', 'Umur Kendaraan', 'Jenis Pengeluaran', 'Jumlah Transaksi', 'Total transaksi');
                            ?> -->
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <?php
                            $no = 1;
                            foreach ($DaftarKendaraan as $row) {
                                // $tgl = date_format(date_create($row->kendaraan_tanggal_beli), 'j M Y');
                                $this->table->add_row(
                                    $no++,
                                    $row->kendaraan_stnk,
                                    $row->kendaraan_merk,
                                    $row->umur_kendaraan,
                                    $row->pengeluaran_jenis,
                                    // $row->region_kota,
                                    $row->jumlah_transaksi,
                                    $row->total_transaksi

                                );

                            ?>
                            <?php }
                            echo $this->table->generate(); ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="foot">
            </div>
        </div>
    </div>
</div>