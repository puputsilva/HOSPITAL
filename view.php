<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Silva Hospital</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <section
      class="h-100 w-100"
      style="
        box-sizing: border-box;
        position: relative;
        background-image: linear-gradient(
          to right,
          rgba(255, 252, 250, 1),
          rgba(255, 255, 255, 1)
        );
      "
    >
      <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-2 .modal-backdrop.show {
          background-color: #000;
          opacity: 0.6;
        }

        .header-3-2 .modal-item.modal {
          top: 2rem;
        }

        .header-3-2 .navbar {
          padding: 2rem 2rem;
        }

        .header-3-2 .navbar-light .navbar-nav .nav-link {
          font: 300 0.875rem/1.5rem Poppins, sans-serif;
          color: #303030;
          padding: 0rem 1.25rem 0rem 0rem;
          margin-right: 0;
          margin-left: 0;
        }

        .header-3-2 .navbar-light .navbar-nav .nav-link:hover {
          font: 500 0.875rem/1.5rem Poppins, sans-serif;
          color: #243142;
        }

        .header-3-2 .navbar-light .navbar-nav .active {
          position: relative;
          width: fit-content;
        }

        .header-3-2 .navbar-light .navbar-nav .active > .nav-link,
        .header-3-2 .navbar-light .navbar-nav .nav-link.active,
        .header-3-2 .navbar-light .navbar-nav .nav-link.show,
        .header-3-2 .navbar-light .navbar-nav .show > .nav-link {
          font-weight: 500;
        }

        .header-3-2 .navbar-light .navbar-toggler-icon {
          background-image: urlurl(
            "data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"
          );
        }

        .header-3-2 .btn:focus,
        .header-3-2 .btn:active {
          outline: none !important;
        }

        .header-3-2 .btn-fill {
          font: 500 0.875rem/1.25rem Poppins, sans-serif;
          border: 1px solid #ff7468;
          background-color: #ff7468;
          border-radius: 999px;
          padding: 0.75rem 1.5rem;
          transition: 0.3s;
        }

        .header-3-2 .btn-fill:hover {
          background-color: #ff8378;
          border: 1px solid #ff8378;
        }

        .header-3-2 .btn-no-fill {
          font: 500 0.875rem/1.25rem Poppins, sans-serif;
          color: #303030;
          padding: 0.75rem 2rem;
        }

        .header-3-2 .btn-no-fill:hover {
          color: #243142;
        }

        .header-3-2 .modal-item .modal-dialog .modal-content {
          border-radius: 8px;
        }

        .header-3-2 .responsive li {
          padding: 1rem;
        }

        .header-3-2 .hr {
          padding-left: 2rem;
          padding-right: 2rem;
        }

        .header-3-2 .hero {
          padding: 4rem 2rem;
        }

        .header-3-2 .left-column {
          margin-bottom: 0.75rem;
          width: 100%;
        }

        .header-3-2 .title-text-big {
          font: 600 2.25rem / normal Poppins, sans-serif;
          margin-bottom: 1.25rem;
          color: #243142;
        }

        .header-3-2 .text-caption {
          font: 300 1rem/1.5rem Poppins, sans-serif;
          letter-spacing: 0.025em;
          color: #303030;
          margin-bottom: 5rem;
        }

        .header-3-2 .btn-get {
          font: 600 1rem/1.5rem Poppins, sans-serif;
          padding: 1rem 2rem;
          border-radius: 999px;
          border: 1px solid #ff7468;
          background-color: #ff7468;
          transition: 0.3s;
        }

        .header-3-2 .btn-get:hover {
          background-color: #ff8378;
          border: 1px solid #ff8378;
        }

        .header-3-2 .btn-outline {
          font: 400 1rem/1.5rem Poppins, sans-serif;
          padding: 1rem 1.5rem;
          border-radius: 999px;
          background-color: transparent;
          border: 1px solid #5d6e86;
          color: #5d6e86;
          transition: 0.3s;
        }

        .header-3-2 .btn-outline:hover {
          border: 1px solid #ff7468;
          color: #ff7468;
        }

        .header-3-2 .btn-outline:hover div path {
          fill: #ff7468;
        }

        .header-3-2 .btn-outline:hover div rect {
          stroke: #ff7468;
        }

        .header-3-2 .right-column {
          width: 100%;
        }

        .header-3-2 .hero-right {
          right: 2rem;
          bottom: 0;
        }

        .header-3-2 .card-outer {
          padding-left: 0;
          z-index: 1;
        }

        .header-3-2 .card {
          transition: 0.4s;
          top: 0px;
          left: 0px;
          background-color: #ffffff;
          padding: 1.25rem;
          border-radius: 0.75rem;
          width: 100%;
          margin-top: 2.5rem;
          box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
        }

        .header-3-2 .card:hover {
          top: -3px;
          left: -3px;
          transition: 0.4s;
          box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
        }

        .header-3-2 .card-name {
          font: 600 1rem/1.5rem Poppins, sans-serif;
          margin-bottom: 0.25rem;
        }

        .header-3-2 .card-job {
          font: 300 0.75rem/1rem Poppins, sans-serif;
          color: #aaa6a6;
          margin-bottom: 0;
        }

        .header-3-2 .card-price-left {
          font: 500 1rem/1.5rem Poppins, sans-serif;
          margin-bottom: 0.125rem;
          color: #ff7468;
        }

        .header-3-2 .card-caption {
          font: 300 0.75rem/1rem Poppins, sans-serif;
          color: #aaa6a6;
          margin-bottom: 0;
        }

        .header-3-2 .card-price-right {
          font: 500 1rem/1.5rem Poppins, sans-serif;
          margin-bottom: 0.125rem;
          color: #1b8171;
        }

        .header-3-2 .btn-hire {
          font: 600 1rem/1.5rem Poppins, sans-serif;
          padding: 0.75rem 4rem;
          border-radius: 0.75rem;
          margin-bottom: 0.125rem;
          border: 1px solid #ff7468;
          background-color: #ff7468;
          transition: 0.3s;
        }

        .header-3-2 .btn-hire:hover {
          background-color: #ff8378;
          border: 1px solid #ff8378;
        }

        .header-3-2 .form {
          border-radius: 999px;
          background-color: #fff3f2;
          box-sizing: border-box;
          font-size: 14px;
          padding: 0rem 1rem;
          padding-right: 0.5rem;
          outline: none;
        }

        .header-3-2 .form div input[type="text"] {
          background-color: #fff3f2;
          box-sizing: border-box;
          font-size: 14px;
          padding: 0rem 0.5rem;
          outline: none;
          width: 100%;
        }

        .header-3-2 .center-search {
          bottom: 0.5rem;
        }

        @media (min-width: 576px) {
          .header-3-2 .modal-item .modal-dialog {
            max-width: 95%;
            border-radius: 12px;
          }

          .header-3-2 .navbar {
            padding: 2rem;
          }

          .header-3-2 .title-text-big {
            font-size: 3rem;
            line-height: 1.2;
          }
        }

        @media (min-width: 768px) {
          .header-3-2 .navbar {
            padding: 2rem 4rem;
          }

          .header-3-2 .hr {
            padding-left: 4rem;
            padding-right: 4rem;
          }

          .header-3-2 .hero {
            padding: 4rem;
          }

          .header-3-2 .left-column {
            margin-bottom: 3rem;
          }

          .header-3-2 .hero-right {
            right: 4rem;
          }

          .header-3-2 .card {
            margin-left: auto;
            margin-top: 0;
          }
        }

        @media (min-width: 992px) {
          .header-3-2 .navbar-light .navbar-nav .active:before {
            content: "";
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            bottom: 0;
            height: 0px;
            width: 80%;
            /* or 100px */
            border-bottom: 2px solid #ff7468;
          }

          .header-3-2 .navbar {
            padding: 2rem 6rem;
          }

          .header-3-2 .navbar-light .navbar-nav .nav-link {
            padding: 0;
            margin-right: 1rem;
            margin-left: 1rem;
          }

          .header-3-2 .navbar-light .navbar-nav .active:before {
            width: 40%;
          }

          .header-3-2 .hr {
            padding-left: 6rem;
            padding-right: 6rem;
          }

          .header-3-2 .hero {
            padding: 4rem 6rem 5rem;
          }

          .header-3-2 .left-column {
            width: 50%;
            margin-bottom: 0;
          }

          .header-3-2 .title-text-big {
            font-size: 3.75rem;
            line-height: 1.25;
          }

          .header-3-2 .right-column {
            width: 50%;
          }

          .header-3-2 .hero-right {
            right: 6rem;
          }

          .header-3-2 .card-outer {
            padding-left: 4rem;
          }

          .header-3-2 .center-search {
            left: 48%;
            top: 50%;
            bottom: auto;
            transform: translate(-48%, -50%);
          }

          .header-3-2 .form {
            width: 340px;
          }
        }

        @media (max-width: 1023px) {
          .header-3-2 .form div input[type="text"] {
            width: 100%;
          }
        }
      </style>
      <div
        class="header-3-2 container-xxl mx-auto p-0 position-relative"
        style="font-family: 'Poppins', sans-serif"
      >
        <nav class="navbar navbar-expand-lg navbar-light">
          <a href="#">
            <img
              style="margin-right: 0.75rem"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-5.png"
              alt=""
            />
          </a>
          <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#targetModal-item"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="modal-item modal fade"
            id="targetModal-item"
            tabindex="-1"
            role="dialog"
            aria-labelledby="targetModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content bg-white border-0">
                <div
                  class="modal-header border-0"
                  style="padding: 2rem; padding-bottom: 0"
                >
                  <a class="modal-title" id="targetModalLabel">
                    <img
                      style="margin-top: 0.5rem"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-5.png"
                      alt=""
                    />
                  </a>
                  <button
                    type="button"
                    class="close btn-close text-white"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div
                  class="modal-body"
                  style="padding: 2rem; padding-top: 0; padding-bottom: 0"
                >
                  <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                    <li class="nav-item active position-relative">
                      <a class="nav-link main" style="color: #243142" href="index.html"
                        >Beranda</a
                      >
                    </li>
                    <li class="nav-item position-relative">
                      <a class="nav-link" href="tentang-saya.html"
                        >Tentang Saya</a
                      >
                    </li>
                    <li class="nav-item position-relative">
                      <a class="nav-link" href="view.php">Data Rekam Medis</a>
                    </li>
                    <li class="nav-item position-relative">
                      <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapse"
                      >
                        <svg
                          width="15"
                          height="15"
                          viewBox="0 0 15 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                            fill="#303030"
                          />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                            fill="#303030"
                          />
                        </svg>
                      </a>
                      <form
                        method
                        class="collapse position-absolute form center-search border-0"
                        id="collapse"
                      >
                        <div class="d-flex">
                          <input
                            type="text"
                            class="rounded-full border-0 focus:outline-none"
                            placeholder="Search"
                          />
                          <button class="btn" type="button">
                            <svg
                              style="width: 20px; height: 20px"
                              data-bs-toggle="collapse"
                              href="#collapse"
                              role="button"
                              aria-expanded="false"
                              aria-controls="collapse"
                              fill="none"
                              stroke="#273B56"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
                <div
                  class="modal-footer border-0"
                  style="padding: 2rem; padding-top: 0.75rem"
                >
                  <a href="view.php" class="btn btn-default btn-no-fill">
                    Lihat Data
                  </a>
                  <a href="tambah.php" class="btn btn-fill text-white"
                    >Tambah Data</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
              <li class="nav-item active position-relative">
                <a class="nav-link main=" style="color: #243142" href="index.html"
                  >Beranda</a
                >
              </li>
              <li class="nav-item position-relative">
                <a class="nav-link" href="tentang-saya.html">Tentang Saya</a>
              </li>
              <li class="nav-item position-relative">
                <a class="nav-link" href="view.php">Data Rekam Medis</a>
              </li>
              <li class="nav-item my-auto">
                <a
                  class="nav-link"
                  data-bs-toggle="collapse"
                  href="#collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapse"
                >
                  <svg
                    width="15"
                    height="15"
                    viewBox="0 0 15 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                      fill="#303030"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                      fill="#303030"
                    />
                  </svg>
                </a>
                <form
                  class="collapse position-absolute form center-search border-0"
                  id="collapse"
                >
                  <div class="d-flex">
                    <input
                      type="text"
                      class="rounded-full border-0 focus:outline-none"
                      placeholder="Search"
                    />
                    <button class="btn" type="button">
                      <svg
                        style="width: 20px; height: 20px"
                        data-bs-toggle="collapse"
                        href="#collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapse"
                        fill="none"
                        stroke="#273B56"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </form>
              </li>
            </ul>
            <a href="view.php" class="btn btn-default btn-no-fill"
              >Lihat Data</a
            >
            <a href="tambah.php" class="btn btn-fill text-white">Tambah Data</a>
          </div>
        </nav>
        <div class="hr">
          <hr
            style="
              border-color: #f4f4f4;
              background-color: #f4f4f4;
              opacity: 1;
              margin: 0 !important;
            "
          />
        </div>
      </div>
    </section>

    <section>
        <h1 class="text-center">Data Rekam Medis Silva Hospital</h1>
        <div class="container">
        <table class="table">
        <tr> <!-- <tr> = table rows -->
      <th width="60" scope="col">Kode Pasien </th> <!-- <th> = table header -->
      <th width="147" scope="col">Nama Pasien </th>
      <th width="147" scope="col">Tanggal Lahir </th>
      <th width="147" scope="col">Tempat Lahir </th>
      <th width="147" scope="col">Jenis Kelamin </th>
      <th width="147" scope="col">Alamat Pasien </th>
      <th width="40" scope="col">Usia</th>
      <th width="160" scope="col">Jenis Penyakit</th>
      <th width="160" scope="col">Rincian</th>
      <th width="147" scope="col">Opsi</th>
    </tr>
            <tbody>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM rumahsakit") or die(mysqli_error($koneksi));
                foreach ($data as $baris){ ?>
                <tr>
                    <td><?php echo $baris['kd']; ?></td>
                    <td><?php echo $baris['nama']; ?></td>
                    <td><?php echo $baris['tgl']; ?></td>
                    <td><?php echo $baris['tl']; ?></td>
                    <td><?php echo $baris['kelamin']; ?></td>
                    <td><?php echo $baris['alamat']; ?></td>
                    <td><?php echo $baris['usia']; ?></td>
                    <td><?php echo $baris['penyakit']; ?></td>
                    <td><?php echo $baris['rincian']; ?></td>
                    <td>
                        <a href="update.php?kd=<?php echo $baris['kd']; ?>" class="btn btn-warning">Update</a>
                        <a href="delete.php?kd=<?php echo $baris['kd']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        </div>
    </section>


    <nav
     class="d-flex flex-lg-row flex-column align-items-center justify-content-center"
     >
        <p style="margin: 0">Copyright © 2022 Silva Hospital</p>
    </nav>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>