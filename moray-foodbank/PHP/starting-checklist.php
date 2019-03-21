<?php
$title = "New Volunteer Starting Checklist";
include("header.php");
?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Starting Checklist</h1>
        <p>Checklist for new volunteers starting</p>
    </div>
</div>

<div class="container">
    <form class="volunteer-form" action="" method="post" name="startingChecklist">
    <label><strong>Actions:</strong></label>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="interview">
            <label class="form-check-label" for="interview">
                Interview completed
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="supervisor">
            <label class="form-check-label" for="supervisor">
                Introduced to Project manager/Supervisor
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="buddy">
            <label class="form-check-label" for="buddy">
                Buddy arranged
            </label>
        </div>
        <!-- TODO: Confirm this field - is on paper, not in database -->
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="buddyName" id="buddyName" placeholder="Name of Buddy" value="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="tour">
            <label class="form-check-label" for="tour">
                Tour of workplace given
            </label>
        </div>
    </div>
    <!-- TODO: Confirm this row - on paper there is the option of checking box 1 or 2-->
    <div class="form-row">
        <div class="form-check form-group col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="refRequest">
            <label class="form-check-label" for="refRequest">
                References requested
            </label>
        </div>
        <div class="form-check form-group col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="refReceived"> <!--TODO: fix spelling in database-->
            <label class="form-check-label" for="refReceived">
                References received
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="agreedStart">
            <label class="form-check-label" for="agreedStart">
                Agreed start, date & location
            </label>
        </div>
        <!-- TODO: Confirm this row - "On hold" checkbox and "Other" input box - on paper, but not database -->
        <div class="form-check form-group col-md-2">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="">
                On hold
            </label>
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="" id="" placeholder="Other" value="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="inductionSet">
            <label class="form-check-label" for="inductionSet">
                Induction/Taster Day arranged
            </label>
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="" id="" placeholder="Induction to be carried out by" value="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="contactDB">
            <label class="form-check-label" for="contactDB">
                Added to database of volunteer contacts
            </label>
        </div>
    </div>
    <br>
    <label><strong>Once Started:</strong></label>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="inductionDone">
            <label class="form-check-label" for="inductionDone">
                Induction & welcome on first day
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="hsTour">
            <label class="form-check-label" for="hsTour">
                Health & Safety tour given
            </label>
        </div>
        <!--TODO: Confirm this checkbox - is on paper, but not in database-->
        <div class="form-check form-group col-md-4">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="">
                Health & Safety form signed
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="roleDescSup">
            <label class="form-check-label" for="roleDescSup">
                Role description/volunteer agreement supplied
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="handbookSup">
            <label class="form-check-label" for="handbookSup">
                Volunteer handbook supplied
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="emailList">
            <label class="form-check-label" for="emailList">
                Added to email list for newsletters
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="updatedRotas">
            <label class="form-check-label" for="updatedRotas">
                Update volunteer rotas
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="weekCheck">
            <label class="form-check-label" for="weekCheck">
                1st week check OK
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-check form-group col-md-6">
            <input class="form-check-input" type="checkbox" value="" id="monthCheck">
            <label class="form-check-label" for="monthCheck">
                1st month review
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 offset-md-3 form-buttons">
            <input type ="submit" name="submit" class="btn btn-primary" value="Save">
        </div>
    </div>
    </form>
</div>
</main>
</body>