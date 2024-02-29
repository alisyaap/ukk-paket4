<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Pengguna</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                    <?php if ($_SESSION['Level'] == 'Admin') { ?>
                        <a href="?page=tambah-user" class="btn btn-primary btn-icon-split btn-sm">Tambah User </a>
                     <?php } ?>
                    
                    </p>

                    <div class="table-responsive">
                        <table class="table table-striped" >
                        <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <?php if ($_SESSION['Level'] == "Admin") { ?>
                                        <th>Pilihan</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    $sql = $koneksi->query("SELECT * FROM user");
                                    while ($data= $sql->fetch_assoc()) {
                                        
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['NamaUser']; ?></td>
                                    <td><?php echo $data['Password']; ?></td>
                                    <td><?php echo $data['Level']; ?></td>
                                    <?php if ($_SESSION['Level'] == "Admin") { ?>
                                    <td><a type='button' href='?page=edit-user&UserID=<?= $data['UserID']; ?>' class='btn btn-sm btn-warning'>Edit</a>/<a type='button' href='?page=hapus-user&UserID=<?= $data['UserID']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

