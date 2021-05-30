<!DOCTYPE html>
<?php include '../modules/header.php';

require_once '../connection.php';
$con = OpenCon();

function nije_realizovano($con)
{
  $stmt = $con->prepare("SELECT COUNT(ID) AS brojRedova FROM istorijat_pol WHERE dobavljac = 'Poloptic - Beograd' AND realizovana=''");
  $stmt->execute();
  $result = $stmt->get_result();
  while ($row = $result->fetch_object()) {
    echo $row->brojRedova;
  }
}

$rb;
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
  $page_no = $_GET['page_no'];
  $rb = ($page_no - 1) * 10;
} else {
  $page_no = 1;
  $rb = 0;
}

$total_records_per_page = 10;
$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query($con, "SELECT COUNT(*) As total_records FROM istorijat_pol WHERE dobavljac = 'Poloptic - Beograd'");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;

if (isset($_GET['realizovano']) && $_GET['realizovano'] != "") {
  if ($_GET['realizovano'] == "asc") {
    $stmt = $con->prepare("SELECT ID,IDKorisnika,datum,realizovana FROM istorijat_pol WHERE dobavljac = 'Poloptic - Beograd' ORDER BY realizovana ASC LIMIT $offset, $total_records_per_page");
  } else {
    $stmt = $con->prepare("SELECT ID,IDKorisnika,datum,realizovana FROM istorijat_pol WHERE dobavljac = 'Poloptic - Beograd' ORDER BY realizovana DESC LIMIT $offset, $total_records_per_page");
  }
} else {
  $stmt = $con->prepare("SELECT ID,IDKorisnika,datum,realizovana FROM istorijat_pol WHERE dobavljac = 'Poloptic - Beograd' ORDER BY ID DESC LIMIT $offset, $total_records_per_page");
}
$stmt->execute();
$result = $stmt->get_result();

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include '../modules/menu.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php
        include '../modules/logout.php';
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <h1 class="h3 mb-4 text-gray-800">Poloptic Beograd</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Istorijat narudžbi <i class="fa fa-folder-open"></i></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="table" data-toggle="table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Broj narudžbe</th>
                      <th>Datum</th>
                      <th>Naručio</th>
                      <th>Realizovano <a href="pol_history_bg.php?realizovano=asc"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>&nbsp;<a href="pol_history_bg.php?realizovano=desc"><i class="fas fa-arrow-down" aria-hidden="true"></i></a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    while ($row = $result->fetch_object()) {
                      $originalDate = $row->datum;
                      $datum_narudzbe = date('d.m.Y', strtotime($originalDate));
                      echo '<tr>';
                      echo '<td>' . ($rb = $rb + 1) . ' </td>';
                      echo "<td><a target='_blank' rel='noopener noreferrer' href='orders_document_preview.php?id=$row->ID'>$row->ID</a></td>";
                      echo "<td>$datum_narudzbe</td>";

                      //Upit koji na osnovu dobijenog ID korisnika čita ime korisnika kojem pripada taj ID
                      $stmt1 = $con->prepare('SELECT ime_prezime FROM korisnici WHERE ID = ?');
                      $stmt1->bind_param('i', $row->IDKorisnika);
                      $stmt1->execute();
                      $result1 = $stmt1->get_result();
                      while ($row1 = $result1->fetch_object()) {
                        echo "<td>$row1->ime_prezime</td>";
                      }
                      echo "<td style='color:green;font-weight:800;'>$row->realizovana</td>";
                      echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="form-group col-md-9">
                  <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                    <strong>Stranica <?php echo $page_no . " od " . $total_no_of_pages; ?></strong>
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <ul class="pagination">
                    <?php
                    ?>
                    <li <?php if ($page_no <= 1) {
                          echo "class='disabled'";
                        } ?>>
                      <a <?php if ($page_no > 1) {
                            echo "href='?page_no=$previous_page&rb=$rb'";
                          } ?>>Prethodna</a>
                    </li>

                    <?php
                    if ($total_no_of_pages <= 10) {
                      for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                        if ($counter == $page_no) {
                          echo "<li class='active'><a>$counter</a></li>";
                        } else {
                          echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                        }
                      }
                    } elseif ($total_no_of_pages > 10) {

                      if ($page_no <= 4) {
                        for ($counter = 1; $counter < 8; $counter++) {
                          if ($counter == $page_no) {
                            echo "<li class='active'><a>$counter</a></li>";
                          } else {
                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                          }
                        }
                        echo "<li><a>...</a></li>";
                        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                      } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                        echo "<li><a href='?page_no=1'>1</a></li>";
                        echo "<li><a href='?page_no=2'>2</a></li>";
                        echo "<li><a>...</a></li>";
                        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                          if ($counter == $page_no) {
                            echo "<li class='active'><a>$counter</a></li>";
                          } else {
                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                          }
                        }
                        echo "<li><a>...</a></li>";
                        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                      } else {
                        echo "<li><a href='?page_no=1'>1</a></li>";
                        echo "<li><a href='?page_no=2'>2</a></li>";
                        echo "<li><a>...</a></li>";

                        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                          if ($counter == $page_no) {
                            echo "<li class='active'><a>$counter</a></li>";
                          } else {
                            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                          }
                        }
                      }
                    }
                    ?>

                    <li <?php if ($page_no >= $total_no_of_pages) {
                          echo "class='disabled'";
                        } ?>>
                      <a <?php if ($page_no < $total_no_of_pages) {
                            echo "href='?page_no=$next_page'";
                          } ?>>Sljedeća</a>
                    </li>
                  </ul>
                </div>
              </div>
              <p>Ukupno narudžbi: <?php echo $total_records; ?></p>
              <p>Nije realizovano: <?php echo nije_realizovano($con); ?></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php
      include '../modules/footer.php';
      ?>
      <!-- End of Footer -->

      <!-- /.container-fluid -->
    </div>
  </div>
  </div>
</body>

</html>