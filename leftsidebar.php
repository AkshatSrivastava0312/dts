<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="dashboard_new.php">
      <i class="fas fa-fw fa-desktop"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    OPTIONS
  </div>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_RDC" aria-expanded="true" aria-controls="collapse_RDC">
      <i class="fas fa-user-plus"></i>
      <span>RDC & Registration</span>
    </a>
    <div id="collapse_RDC" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="rdc_formation.php">RDC Formation</a>
        <a class="collapse-item" href="#">Candidate Registration</a>
        <a class="collapse-item" href="#">RDC Meeting Decision</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_THESIS_MGMT" aria-expanded="true" aria-controls="collapse_THESIS_MGMT">
      <i class="fas fa-book"></i>
      <span>Thesis Management</span>
    </a>
    <div id="collapse_THESIS_MGMT" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="thesis_submission.php">Thesis Submission</a>
        <a class="collapse-item" href="#">Selection of Examiners</a>
        <a class="collapse-item" href="#">Consent to Examiner</a>
        <a class="collapse-item" href="#">Send Thesis to Examiner</a>
        <a class="collapse-item" href="#">Evaluation Report</a>
      </div>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_THESIS" aria-expanded="true" aria-controls="collapse_THESIS">
      <i class="fas fa-users"></i>
      <span>Viva Management</span>
    </a>
    <div id="collapse_THESIS" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Selection of Examiners</a>
        <a class="collapse-item" href="#">Date Allotment</a>
        <a class="collapse-item" href="phd_viva_result.php">Viva Result</a>
      </div>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_AWARD_OF_DEGREE" aria-expanded="true" aria-controls="collapse_AWARD_OF_DEGREE">
      <i class="fas fa-school"></i>
      <span>Award of Degree</span>
    </a>
    <div id="collapse_AWARD_OF_DEGREE" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">VC Decision</a>
        <a class="collapse-item" href="#">Examination Committee</a>
        <a class="collapse-item" href="#">Executive Council</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_CANDIDATE_PORTAL" aria-expanded="true" aria-controls="collapse_CANDIDATE_PORTAL">
      <i class="fas fa-user"></i>
      <span>Candidate Portal</span>
    </a>
    <div id="collapse_CANDIDATE_PORTAL" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Request for Registration</a>
        <a class="collapse-item" data-toggle="collapse" data-target="#child_1" href="#">Request for</a>
        <div id="child_1" class="collapse bg-white p-2">
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
        </div>
      </div>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_SUPERVISOR_PORTAL" aria-expanded="true" aria-controls="collapse_SUPERVISOR_PORTAL">
      <i class="fas fa-user"></i>
      <span>Supervisor Portal</span>
    </a>

    <div id="collapse_SUPERVISOR_PORTAL" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="#">Examiner Recommendation</a>
        <a class="collapse-item" href="#">Thesis Progress Report</a>
        <a class="collapse-item" data-toggle="collapse" data-target="#child_1" href="#">Request for</a>
        <div id="child_1" class="collapse bg-white p-2">
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
          <a class="collapse-item" href="#"> <i class="fas fa-user-plus mr-2"></i>Child 1</a>
        </div>
      </div>
    </div>

  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>