{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

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

                            <form method="POST" action="{{ route('register') }}" class="pq-applyform" novalidate>
                                @csrf
                                  <div class="pq-appointment">
                                        <div class="row">
                                              <div class="col-lg-12">
                                                    <label> <span class="pq-appointment-title"> Register as an Admin </span> <span class="form-control-wrap your-country">

                                              </span> </label>
                                              </div>

                                              <div class="col-lg-12" :value="__('Name')">
                                                    <input type="text" id="Name"  name="Name" :value="old('name')" class="form-control pq-bg-white paitent-name-field"  placeholder="Your Name" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="text" id="phone-number" name="Phone" class="form-control pq-bg-white phone-number-field" aria-invalid="false" placeholder="Phone" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input  id="email" type="email" name="email" :value="old('email')" class="form-control pq-bg-white e-mail-field"  aria-invalid="false" placeholder="Your E-mail" required>
                                              </div>
                                              <div class="col-lg-6">
                                                    <input type="password" id="password" name="password" class="form-control pq-bg-white paitent-name-field"  placeholder="Your Password" required>
                                              </div>

                                              <div class="col-lg-6">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control pq-bg-white paitent-name-field"  placeholder="Confirm Password" required>
                                          </div>

                                              <div class="col-lg-12">
                                                    <a class="pq-button form-btn">
                                                          <div class="pq-button-block">
                                                                <span class="pq-button-text me-0">SUBMIT</span>
                                                          </div>
                                                    </a>
                                              </div>

                                              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
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
