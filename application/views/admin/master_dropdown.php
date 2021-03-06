<div class="min-vh-100 general-padding bg-light-purple">
    <div class="p-5">
        <div class="d-flex flex-row justify-content-between align-items-center mb-4">
            <button type="button" class="btn-table green" data-bs-toggle="modal" data-bs-target="#add_masterDropdownWil">Tambah</button>
        </div>
        <div class="card-section">
            <div class="head">
                <p>Master Wilayah</p>
            </div>
            <div class="body" style="padding: 15px;" id="tableDropdown">
                <?php
                $template = array('table_open' => '<table id="tblwilayah" class="table-custom" border="0">');
                $this->table->set_template($template);
                $this->table->set_heading('No', 'Menu Dropdown', 'List Dropdown', 'Aksi');

                $no = 1;
                foreach ($Dropdown as $row) {
                    $this->table->add_row(
                        $no++,
                        $row->dropdown_menu,
                        $row->dropdown_list,

                        '<button type="button" data-id="' . $row->dropdown_id . '" data-menu="' . $row->dropdown_menu . '" data-list="' . $row->dropdown_list . '"  class="btn-table edit_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#edit_masterDropdown">
                                        <span class="iconify-inline" data-icon="bx:bx-edit" data-width="20" data-height="20"></span>
                                    </button>
                                    <button type="button" data-id="' . $row->dropdown_id . '" class="btn-table red hapus_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#hapus_masterDropdown">
                                        <span class="iconify-inline" data-icon="carbon:trash-can"data-width="20" data-height="20"></span>
                                    </button>'
                    );
                }
                echo $this->table->generate(); ?>
            </div>
            <div class="foot">
            </div>
        </div>
        <!--Dropdown SIM--->
        <div class="card-section">
            <div class="head">
                <p>Master SIM</p>
            </div>
            <div class="body" style="padding: 15px;" id="tableDropdown">
                <?php
                $template = array('table_open' => '<table id="tblsim" class="table-custom">');
                $this->table->set_template($template);
                $this->table->set_heading('No', 'Menu Dropdown', 'List Dropdown', 'Aksi');

                $no = 1;
                foreach ($SIM as $row) {
                    $this->table->add_row(
                        $no++,
                        $row->dropdown_menu,
                        $row->dropdown_list,

                        '<button type="button" data-id="' . $row->dropdown_id . '" data-menu="' . $row->dropdown_menu . '" data-list="' . $row->dropdown_list . '"  class="btn-table edit_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#edit_masterDropdown">
                                        <span class="iconify-inline" data-icon="bx:bx-edit" data-width="20" data-height="20"></span>
                                    </button>
                                    <button type="button" data-id="' . $row->dropdown_id . '" class="btn-table red hapus_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#hapus_masterDropdown">
                                        <span class="iconify-inline" data-icon="carbon:trash-can"data-width="20" data-height="20"></span>
                                    </button>'
                    );
                }
                echo $this->table->generate(); ?>
            </div>
            <div class="foot">
            </div>
        </div>
        <!--Dropdown PT--->
        <div class="card-section">
            <div class="head">
                <p>Master PT</p>
            </div>
            <div class="body" style="padding: 15px;" id="tableDropdown">
                <?php
                $template = array('table_open' => '<table id="tblPT" class="table-custom">');
                $this->table->set_template($template);
                $this->table->set_heading('No', 'Menu Dropdown', 'List Dropdown', 'Aksi');

                $no = 1;
                foreach ($PT as $row) {
                    $this->table->add_row(
                        $no++,
                        $row->dropdown_menu,
                        $row->dropdown_list,

                        '<button type="button" data-id="' . $row->dropdown_id . '" data-menu="' . $row->dropdown_menu . '" data-list="' . $row->dropdown_list . '"  class="btn-table edit_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#edit_masterDropdown">
                                        <span class="iconify-inline" data-icon="bx:bx-edit" data-width="20" data-height="20"></span>
                                    </button>
                                    <button type="button" data-id="' . $row->dropdown_id . '" class="btn-table red hapus_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#hapus_masterDropdown">
                                        <span class="iconify-inline" data-icon="carbon:trash-can"data-width="20" data-height="20"></span>
                                    </button>'
                    );
                }
                echo $this->table->generate(); ?>
            </div>
            <div class="foot">
            </div>
        </div>
        <!--Dropdown Jenis Kendaraan--->
        <div class="card-section">
            <div class="head">
                <p>Master Jenis Kendaraan</p>
            </div>
            <div class="body" style="padding: 15px;" id="tableDropdown">
                <?php
                $template = array('table_open' => '<table id="tbljenken" class="table-custom">');
                $this->table->set_template($template);
                $this->table->set_heading('No', 'Menu Dropdown', 'List Dropdown', 'Aksi');

                $no = 1;
                foreach ($JenKen as $row) {
                    $this->table->add_row(
                        $no++,
                        $row->dropdown_menu,
                        $row->dropdown_list,

                        '<button type="button" data-id="' . $row->dropdown_id . '" data-menu="' . $row->dropdown_menu . '" data-list="' . $row->dropdown_list . '"  class="btn-table edit_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#edit_masterDropdown">
                                        <span class="iconify-inline" data-icon="bx:bx-edit" data-width="20" data-height="20"></span>
                                    </button>
                                    <button type="button" data-id="' . $row->dropdown_id . '" class="btn-table red hapus_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#hapus_masterDropdown">
                                        <span class="iconify-inline" data-icon="carbon:trash-can"data-width="20" data-height="20"></span>
                                    </button>'
                    );
                }
                echo $this->table->generate(); ?>
            </div>
            <div class="foot">
            </div>
        </div>
        <!--Dropdown Jenis Sparepart--->
        <div class="card-section">
            <div class="head">
                <p>Master Jenis Sparepart</p>
            </div>
            <div class="body" style="padding: 15px;" id="tableDropdown">
                <?php
                $template = array('table_open' => '<table id="tbljenspa" class="table-custom">');
                $this->table->set_template($template);
                $this->table->set_heading('No', 'Menu Dropdown', 'List Dropdown', 'Aksi');

                $no = 1;
                foreach ($JenSpa as $row) {
                    $this->table->add_row(
                        $no++,
                        $row->dropdown_menu,
                        $row->dropdown_list,

                        '<button type="button" data-id="' . $row->dropdown_id . '" data-menu="' . $row->dropdown_menu . '" data-list="' . $row->dropdown_list . '"  class="btn-table edit_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#edit_masterDropdown">
                                        <span class="iconify-inline" data-icon="bx:bx-edit" data-width="20" data-height="20"></span>
                                    </button>
                                    <button type="button" data-id="' . $row->dropdown_id . '" class="btn-table red hapus_masterDropdown btnEdit" data-bs-toggle="modal" data-bs-target="#hapus_masterDropdown">
                                        <span class="iconify-inline" data-icon="carbon:trash-can"data-width="20" data-height="20"></span>
                                    </button>'
                    );
                }
                echo $this->table->generate(); ?>
            </div>
            <div class="foot">
            </div>
        </div>


        <!-- Modal Tambah Dropdown -->
        <div class="modal fade" id="add_masterDropdownWil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-2">
                    <div class="modal-header">
                        <p class="font-w-700 color-darker mb-0">Tambah Dropdown</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-14px pt-0 d-flex flex-column">
                        <?= form_open_multipart('master/dropdown/store'); ?>
                        <div class="pb-4">
                            <div class="d-flex flex-column my-2 w-100">
                                <label class="my-2 color-secondary">Menu Dropdown</label>
                                <select name="menu" class="login-input regular" required>
                                    <option value="Wilayah">Wilayah</option>
                                    <option value="SIM">SIM</option>
                                    <option value="PT">PT</option>
                                    <option value="Jenis Kendaraan">Jenis Kendaraan</option>
                                    <option value="Jenis Sparepart">Jenis Sparepart</option>
                                </select>
                                <!-- <input type="" class="login-input regular" name="menu" value="Wilayah" disabled> -->
                            </div>
                            <div class="d-flex flex-column my-2 w-100">
                                <label class="my-2 color-secondary">List Dropdown</label>
                                <input type="text" class="login-input regular" name="list" placeholder="" required>
                            </div>
                        </div>
                        <button type="submit" class="btn-table submit-modal">Tambah data</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Dropdown -->
        <div class="modal fade" id="edit_masterDropdown" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-2">
                    <div class="modal-header">
                        <p class="font-w-700 color-darker mb-0">Ubah Data Dropdown</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-14px pt-0 d-flex flex-column">
                        <?= form_open_multipart('master/dropdown/update'); ?>
                        <div class="pb-4">

                            <div class="d-flex flex-column my-2 w-100">
                                <label class="my-2 color-secondary">Menu Dropdown</label>
                                <select id="mdlEdit_menu" name="menu" class="login-input regular" required>
                                    <option value="Wilayah">Wilayah</option>
                                    <option value="SIM">SIM</option>
                                    <option value="PT">PT</option>
                                    <option value="Jenis Kendaraan">Jenis Kendaraan</option>
                                    <option value="Jenis Sparepart">Jenis Sparepart</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column my-2 w-100">
                                <label class="my-2 color-secondary">List Dropdown</label>
                                <input type="text" id="mdlEdit_list" class="login-input regular" name="list" placeholder="" required>
                            </div>
                            <input type="hidden" id="mdlEdit_id" name="dropdown_id" value="">
                        </div>
                        <div class="d-flex flex-row">
                            <button type="submit" class="btn-table submit-modal ms-1">Simpan</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Dropdown -->
        <div class="modal fade" id="hapus_masterDropdown" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-2">
                    <div class="modal-header">
                        <p class="font-w-700 color-darker mb-0">Hapus Dropdown</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-14px pt-0 d-flex flex-column">
                        <?= form_open_multipart('master/dropdown/destroy'); ?>
                        <div class="pb-4">
                            <div class="d-flex flex-column my-2 w-100">
                                <p class="font-w-700 color-darker mb-0">Apakah anda yakin menghapus data ini ?</p>
                                <input type="hidden" id="dropdown_id" name="dropdown_id" value="">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <button type="submit" class="btn-table submit-modal ms-1">Hapus</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#tableDropdown tbody').on('click', '.btnEdit', function() {
                const id = $(this).data('id')
                const menu = $(this).data('menu')
                const list = $(this).data('list')

                $('#mdlEdit_id').val(id);
                $('#dropdown_id').val(id);
                $('#mdlEdit_menu').val(menu).change();
                $('#mdlEdit_list').val(list);
            })

            $(document).ready(function() {
                $('#tblwilayah').DataTable();
                $('#tblsim').DataTable();
                $('#tblPT').DataTable();
                $('#tbljenken').DataTable();
                $('#tbljenspa').DataTable();
            })
        </script>
        <div class="foot">
        </div>
    </div>
</div>