<div class="row d-flex justify-content-center modalWrapper" id="add_edit_form">
    <div class="modal fade addNewInputs" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="modalEmail" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Email adrese
                        dobavljača</h4>
                    <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <u>
                            <h6>Pol Optic</h6>
                        </u>
                        <?php

                        $con = OpenCon();
                        mysqli_set_charset($con, 'utf8');

                        $stmt1 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="pol-sarajevo"');
                        $stmt1->execute();
                        $result1 = $stmt1->get_result();
                        while ($row1 = $result1->fetch_object()) {
                            echo "Sarajevo: <a href='mailto: $row1->email'> $row1->email</a>";
                            if (strlen($row1->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt2 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="pol-beograd"');
                        $stmt2->execute();
                        $result2 = $stmt2->get_result();
                        while ($row2 = $result2->fetch_object()) {
                            echo "Beograd: <a href='mailto: $row2->email'> $row2->email</a>";
                            if (strlen($row2->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt3 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="pol-novi sad"');
                        $stmt3->execute();
                        $result3 = $stmt3->get_result();
                        while ($row3 = $result3->fetch_object()) {
                            echo "Novi Sad: <a href='mailto: $row3->email'> $row3->email</a>";
                            if (strlen($row3->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt4 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="pol-bojana"');
                        $stmt4->execute();
                        $result4 = $stmt4->get_result();
                        while ($row4 = $result4->fetch_object()) {
                            echo "Bojana C.: <a href='mailto: $row4->email'> $row4->email</a>";
                            if (strlen($row4->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        ?>

                    </div>
                    <div class="md-form mb-5">
                        <u>
                            <h6>Essilor</h6>
                        </u>
                        <?php

                        $stmt5 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="essilor-bih"');
                        $stmt5->execute();
                        $result5 = $stmt5->get_result();
                        while ($row5 = $result5->fetch_object()) {
                            echo "BiH: <a href='mailto: $row5->email'> $row5->email</a>";
                            if (strlen($row5->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt6 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="essilor-srbija"');
                        $stmt6->execute();
                        $result6 = $stmt6->get_result();
                        while ($row6 = $result6->fetch_object()) {
                            echo "Srbija: <a href='mailto: $row6->email'> $row6->email</a>";
                            if (strlen($row6->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        ?>

                    </div>
                    <div class="md-form mb-5">
                        <u>
                            <h6>Hoya</h6>
                        </u>
                        <?php

                        $stmt7 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="hoya-srbija"');
                        $stmt7->execute();
                        $result7 = $stmt7->get_result();
                        while ($row7 = $result7->fetch_object()) {
                            echo "Srbija: <a href='mailto: $row7->email'> $row7->email</a>";
                            if (strlen($row7->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        ?>
                    </div>
                    <div class="md-form mb-5">
                        <u>
                            <h6>Johnson & Johnson</h6>
                        </u>
                        <?php

                        $stmt8 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="johnson_johnson-bih"');
                        $stmt8->execute();
                        $result8 = $stmt8->get_result();
                        while ($row8 = $result8->fetch_object()) {
                            echo "BiH: <a href='mailto: $row8->email'> $row8->email</a>";
                            if (strlen($row8->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt9 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="johnson_johnson-srbija"');
                        $stmt9->execute();
                        $result9 = $stmt9->get_result();
                        while ($row9 = $result9->fetch_object()) {
                            echo "Srbija: <a href='mailto: $row9->email'> $row9->email</a>";
                            if (strlen($row9->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        ?>

                    </div>
                    <div class="md-form mb-5">
                        <u>
                            <h6>Alcon (Ciba)</h6>
                        </u>
                        <?php

                        $stmt10 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="alcon-bih"');
                        $stmt10->execute();
                        $result10 = $stmt10->get_result();
                        while ($row10 = $result10->fetch_object()) {
                            echo "BiH: <a href='mailto: $row10->email'> $row10->email</a>";
                            if (strlen($row10->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt11 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="alcon-srbija"');
                        $stmt11->execute();
                        $result11 = $stmt11->get_result();
                        while ($row11 = $result11->fetch_object()) {
                            echo "Srbija: <a href='mailto: $row11->email'> $row11->email</a>";
                            if (strlen($row11->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        ?>

                    </div>
                    <div class="md-form mb-5">
                        <u>
                            <h6>Bausch & Lomb</h6>
                        </u>
                        <?php

                        $stmt12 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="bausch_lomb-bih"');
                        $stmt12->execute();
                        $result12 = $stmt12->get_result();
                        while ($row12 = $result12->fetch_object()) {
                            echo "BiH: <a href='mailto: $row12->email'> $row12->email</a>";
                            if (strlen($row12->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        $stmt13 = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="bausch_lomb-srbija"');
                        $stmt13->execute();
                        $result13 = $stmt13->get_result();
                        while ($row13 = $result13->fetch_object()) {
                            echo "Srbija: <a href='mailto: $row13->email'> $row13->email</a>";
                            if (strlen($row13->email) == 0) {
                                echo "Nije definisan";
                            }
                            echo "</br>";
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>