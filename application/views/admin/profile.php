<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <p>
      <a href="<?= base_url().'admin/Profile/editProfile/'.$this->session->userdata('logged_in')['id'] ?>" class="btn btn-primary btn-sm"> Edit Profil</a>
    </p> <br>

    <?php if(isset($error)) { ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php } ?>

    <div class="row">
      <!-- panel left -->
      <div class="col-lg-8">
        <div class="">
          <div class="panel-heading">
            <!-- <b>Profil User</b> -->
          </div>
          <?php foreach ($user as $val): ?>

            <label for="">Nama</label>
            <p><?= $val->nama; ?></p>
            <hr>
            <label for="">Email</label>
            <p><?= $val->email; ?></p>
            <hr>
            <label for="">Tanggal Lahir</label>
            <p><?php
            $date = new DateTime($val->tgl_lahir);
            echo $date->format('d-m-Y'); ?></p>
            <hr>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-lg-4">
        <form method="post" action="<?=base_url()?>admin/Profile/resetPassword/<?= $this->session->userdata('logged_in')['id'] ?>">
          <div class="panel panel-default">
            <div class="panel-heading">
              <b>Reset Password</b>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <input type="password" name="old_password" class="form-control" value="" placeholder="Old Password">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control" value="" placeholder="New Password">
              </div>

              <div class="form-group">
                <input type="password" name="password2" class="form-control" value="" placeholder="Confirm Password">
              </div>

              <button type="submit" class="btn btn-primary">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
