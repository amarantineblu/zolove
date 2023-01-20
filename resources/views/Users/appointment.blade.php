@extends('layouts.app')

<div class="pq-breadcrumb" style="background-image:url('/assets/images/breadcrumb.jpg');">
    <div class="container">
          <div class="row align-items-center">
                <div class="col-lg-12">
                      <nav aria-label="breadcrumb">
                            <div class="pq-breadcrumb-title">
                                  <h2>Make
                   Appointments
                </h2> </div>
                            <div class="pq-breadcrumb-container mt-2">
                                  <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home mr-2"></i>Home</a></li>
                                        <li class="breadcrumb-item active">Make Appointments </li>
                                  </ol>
                            </div>
                      </nav>
                </div>
                <div class="col-lg-4">
                      <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
                </div>
          </div>
    </div>
</div>
<!--=================================
 Banner end-->
<!--=================================
 appoinment-form start-->
<div class="appoinment-form  appointment-page pq-pt-130 pb-0">
    <div class="container">
          <div class="row">
                <div class="col-xl-6">
                      <div class="appoinment-box">
                            <form action="#" class="pq-applyform" novalidate>
                                  <div class="pq-appointment">
                                        <div class="row">
                                              <div class="col-lg-12">
                                                    <label> <span class="pq-appointment-title"> Select Department </span> <span class="form-control-wrap your-country">
                                                    <select name="your-country" class="form-select" aria-invalid="false">
                                                    <option value="Gynaecology">Gynaecology</option>
                                                    <option value="Cardiology">Cardiology</option>
                                                    <option value="Orthopaedics">Orthopaedics</option>
                                                    <option value="Medicine">Medicine</option>
                                                 </select>
                                              </span> </label>
                                              </div>
                                              <div class="col-lg-12">
                                                    <label> <span class="pq-appointment-title"> Choose Doctor by Name </span> <span class="form-control-wrap your-country">
                                                    <select name="your-country" class="form-select" aria-invalid="false">
                                                    <option value="Naidan Smith">Naidan Smith</option>
                                                    <option value="Danial Frankie">Danial Frankie</option>
                                                    <option value="Jason Roy">Jason Roy</option>
                                                    <option value="Alexa Jhon">Alexa Jhon</option>
                                                 </select>
                                              </span> </label>
                                              </div>
                                              <div class="col-lg-12">
                                                    <input type="text" id="patient-name" name="Patient" class="form-control pq-bg-white paitent-name-field"  placeholder="Patient Name" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="text" id="phone-number" name="Phone" class="form-control pq-bg-white phone-number-field" aria-invalid="false" placeholder="Phone" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="email" id="e-mail" name="your-email" class="form-control pq-bg-white e-mail-field"  aria-invalid="false" placeholder="your-email" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="date" value="" class="form-control pq-bg-white" aria-invalid="false">
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="text" id="time" name="Time" class="form-control pq-bg-white time-field"  aria-invalid="false" placeholder="time"> </span> </div>
                                              <div class="col-lg-12">
                                                    <textarea cols="40" id="message" rows="10" aria-invalid="false" class="form-control pq-bg-white" placeholder="Type Appintment Note"></textarea>
                                              </div>
                                              <div class="col-lg-12">
                                                    <a class="pq-button form-btn">
                                                          <div class="pq-button-block">
                                                                <span class="pq-button-text me-0">SUBMIT</span>
                                                          </div>
                                                    </a>
                                              </div>
                                        </div>
                                  </div>
                            </form>
                      </div>
                </div>
                <div class="col-xl-6">
                      <div class="appointment-img text-center"> <img src="/assets/images/appoinment.png" alt="" class="img-a img-fluid"> </div>
                </div>
          </div>
    </div>
</div>
<!--=================================
 appoinment-form end-->
<!--=================================
 contact-healthcare start-->
<section class="contact-us pq-bg-primary-dark pq-bg-img-1">
    <div class="container">
          <div class="row ">
                <div class="col-xl-7">
                      <h6 class="pq-title">A great place of medical hospital center &amp; health care</h6> </div>
                <div class="col-xl-5 d-xl-flex justify-content-xl-end align-items-center text-left mt-xl-0 mt-4">
                      <a class="pq-button pq-button-flat" href="contact-us.html">
                            <div class="pq-button-block"> <span class="pq-button-text">Contact Us</span> <i class="ion ion-plus-round"></i> </div>
                      </a>
                </div>
          </div>
    </div>
</section>
<!--=================================
