<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body style="background: transparent linear-gradient(to bottom, #9368e9 0%, #943bea 100%) repeat scroll 0 0/150% 150%;;">

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mx-auto d-block shadow-lg p-3 mb-5 bg-white rounded" style="width: 30rem; margin-top:10%; height: 30rem;">
                        <div class="card-body">
                            <h3 class="card-title text-center">Login User</h3>
                            <span class="m2"><?php echo $this->session->flashdata('pesan') ?></span>
                            <hr>
                            <form action="<?= base_url('auth/login_aksi'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="username">Username :</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Tulis disini.." autocomplete="off" autofocus>
                                    <?php echo form_error('username', '<div class="text-danger text-small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="username">Password :</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Tulis disini..">
                                    <?php echo form_error('password', '<div class="text-danger text-small">', '</div>') ?>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="contaier">
                            <nav>
                                <p class="copyright text-center">
                                    Copyright ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    <a href="#">Aritra Farma Batam</a>
                                </p>
                                <p class="copyright text-center"> JL Suprapto, Batu Aji, Kota Batam, Kepulauan Riau</p>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>