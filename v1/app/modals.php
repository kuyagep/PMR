<!-- Add Modal -->
<div class="modal fade" id="addItems">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-item.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Property/Item</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="item_name" class="col-sm-3 col-form-label">Name <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_name" name="item_name"
                                placeholder="Item name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_desc" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_desc" name="item_desc"
                                placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_serial" class="col-sm-3 col-form-label">Serial # <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_serial" name="item_serial"
                                placeholder="Enter Serial No." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_model" class="col-sm-3 col-form-label">Model</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_model" name="item_model"
                                placeholder="Enter model">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_brand" class="col-sm-3 col-form-label">Brand <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_brand" name="item_brand"
                                placeholder="Enter Brand" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unit" class="col-sm-3 col-form-label">Unit <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="unit" name="unit"
                                placeholder="Enter Unit ex. pc, unit" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-sm-3 col-form-label">Amount <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="item_amount"
                                placeholder="Amount" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_purdate" class="col-sm-3 col-form-label">Aquired <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="item_purdate" name="item_purdate"
                                placeholder="Date of Aquired" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="supplier" class="col-sm-3 col-form-label">Supplier <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="supplier" name="supplier" required>
                                <option value="" selected>Choose Supplier...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM suppliers;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['supplier_id']; ?>">
                                    <?php echo $row['supplier_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Category <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="category" name="category" required>
                                <option value="" selected>Choose Category...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM category;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['category_id']; ?>">
                                    <?php echo $row['category_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="condtion" class="col-sm-3 col-form-label">Condition <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="condtion" name="condition" required>
                                <option value="" selected>Choose Condition...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM con;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['con_id']; ?>">
                                    <?php echo $row['con_desc']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="status" name="status" required>
                                <option value="" selected>Choose Status...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM item_status;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['status_id']; ?>">
                                    <?php echo $row['status_desc']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn bg-gradient-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add-employee"
                        class="btn bg-gradient-primary addEmployeeAlert">Create</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Add Modal -->
<div class="modal fade" id="issuance">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-issuance.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Issuance</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="item" class="col-sm-3 col-form-label">Item Name <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="item" name="item" required>
                                <option value="" selected>Choose Item...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM items;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['item_id']; ?>">
                                    <?php echo $row['item_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="employee" class="col-sm-3 col-form-label">Employee <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="employee" name="employee" required>
                                <option value="" selected>Choose Employee...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM employee;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['employee_id']; ?>">
                                    <?php echo $row['firstname']." ".$row['lastname']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>



                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn bg-gradient-danger " data-dismiss="modal">Cancel</button>
                    <button type="submit" name="add-purchase" class="btn bg-gradient-primary ">Save & Record</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- Add Purchase Order -->
<div class="modal fade" id="add-purchase-order" data-backdrop="static" data-keyboard="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="action/admin/add-purchase.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Purchase Order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- form -->
                    <div class="form-group row">
                        <label for="pr" class="col-sm-3 col-form-label">PR # <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pr" name="pr" placeholder="Enter PR #" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="po" class="col-sm-3 col-form-label">PO # <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="po" name="po" placeholder="Enter PO #" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-3 col-form-label">PO Date <span class="text-danger">
                                *</span> </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Category <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="category" name="category" required>
                                <option value="" class="text-muted" selected>Choose Category...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM procurement_category;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['pcategory_id']; ?>">
                                    <?php echo $row['category_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="particulars" class="col-sm-3 col-form-label">Particulars <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="particulars" placeholder="Enter Description"
                                id="particulars" value="" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-sm-3 col-form-label">Amount <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter Total Amount" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src_fund" class="col-sm-3 col-form-label">Source of Fund <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="src_fund" name="src_fund"
                                placeholder="Enter Source of Fund">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="end_user" class="col-sm-3 col-form-label">End User <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="end_user" name="end_user" required>
                                <option value="" class="text-muted" selected>Choose Employee...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM employee;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['employee_id']; ?>">
                                    <?php echo $row['firstname']." ".$row['lastname']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status <span class="text-danger">
                                *</span></label>
                        <div class="col-sm-9">
                            <select class="custom-select" id="status" name="status" required>
                                <option value="" class="text-muted" selected>Choose Employee...</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM po_status;");
                                    $rowCount = mysqli_num_rows($result);
                                    if($rowCount > 0){
                                        while($row = mysqli_fetch_assoc($result)){ ?>
                                <option value="<?php echo $row['pstatus_id']; ?>">
                                    <?php echo $row['pstatus_name']; ?>
                                </option>

                                <?php   }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="remarks" class="col-sm-3 col-form-label">Remarks</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="remarks" placeholder="Enter Remarks"
                                id="remarks"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-right">
                    <button type="button" class="btn bg-gradient-danger " data-dismiss="modal">Close</button>
                    <button type="submit" name="add-purchase" class="btn bg-gradient-primary ">Save & Record</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Privacy Policy -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="privacy-policy" tabindex="-1" role="dialog" aria-labelledby="privacy-policy"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="privacy-policy">Privacy Policy of DEPED-Davao del Sur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div data-spy="scroll" data-offset="0" class="scrollspy">
                    <h3>Privacy Policy of DEPED-Davao del Sur</h3>

                    <p>DEPED-Davao del Sur operates the localhost/pmr website, which provides the SERVICE.</p>

                    <p>This page is used to inform website visitors regarding our policies with the collection, use, and
                        disclosure of Personal Information if anyone decided to use our Service, the PMR website.</p>

                    <p>If you choose to use our Service, then you agree to the collection and use of information in
                        relation
                        with this policy. The Personal Information that we collect are used for providing and improving
                        the
                        Service. We will not use or share your information with anyone except as described in this
                        Privacy
                        Policy. </p>

                    <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions,
                        which is
                        accessible at localhost/pmr, unless otherwise defined in this Privacy Policy.</p>

                    <h2>Information Collection and Use</h2>

                    <p>For a better experience while using our Service, we may require you to provide us with certain
                        personally identifiable information, including but not limited to your name, phone number, and
                        postal address. The information that we collect will be used to contact or identify you.</p>

                    <h2>Log Data</h2>

                    <p>We want to inform you that whenever you visit our Service, we collect information that your
                        browser
                        sends to us that is called Log Data. This Log Data may include information such as your
                        computer’s
                        Internet Protocol ("IP") address, browser version, pages of our Service that you visit, the time
                        and
                        date of your visit, the time spent on those pages, and other statistics.</p>

                    <h2>Cookies</h2>

                    <p>Cookies are files with small amount of data that is commonly used an anonymous unique identifier.
                        These are sent to your browser from the website that you visit and are stored on your computer’s
                        hard drive.</p>

                    <p>Our website uses these "cookies" to collection information and to improve our Service. You have
                        the
                        option to either accept or refuse these cookies, and know when a cookie is being sent to your
                        computer. If you choose to refuse our cookies, you may not be able to use some portions of our
                        Service.</p>

                    <h2>Service Providers</h2>

                    <p>We may employ third-party companies and individuals due to the following reasons:</p>

                    <ul>
                        <li>To facilitate our Service;</li>
                        <li>To provide the Service on our behalf;</li>
                        <li>To perform Service-related services; or</li>
                        <li>To assist us in analyzing how our Service is used.</li>
                    </ul>

                    <p>We want to inform our Service users that these third parties have access to your Personal
                        Information. The reason is to perform the tasks assigned to them on our behalf. However, they
                        are
                        obligated not to disclose or use the information for any other purpose.</p>

                    <h2>Security</h2>

                    <p>We value your trust in providing us your Personal Information, thus we are striving to use
                        commercially acceptable means of protecting it. But remember that no method of transmission over
                        the
                        internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee
                        its
                        absolute security.</p>

                    <h2>Links to Other Sites</h2>

                    <p>Our Service may contain links to other sites. If you click on a third-party link, you will be
                        directed to that site. Note that these external sites are not operated by us. Therefore, we
                        strongly
                        advise you to review the Privacy Policy of these websites. We have no control over, and assume
                        no
                        responsibility for the content, privacy policies, or practices of any third-party sites or
                        services.
                    </p>

                    <p>Children's Privacy</p>

                    <p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal
                        identifiable information from children under 13. In the case we discover that a child under 13
                        has
                        provided us with personal information, we immediately delete this from our servers. If you are a
                        parent or guardian and you are aware that your child has provided us with personal information,
                        please contact us so that we will be able to do necessary actions.</p>

                    <h2>Changes to This Privacy Policy</h2>

                    <p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page
                        periodically for any changes. We will notify you of any changes by posting the new Privacy
                        Policy on
                        this page. These changes are effective immediately, after they are posted on this page.</p>

                    <h2>Contact Us</h2>

                    <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Clo</button> -->
                <button type="button" class="btn btn-primary">Done</button>
            </div>
        </div>
    </div>
</div>