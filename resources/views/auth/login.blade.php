<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <title>PlanningSoc</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <script src="{{ asset('js/dashboard/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/animsition.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/countdowntime.js') }}"></script>
    <script src="{{ asset('js/dashboard/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/js/bootstrap/popper.js') }}"></script>







    <style>
        /* Ajoutez ici vos styles CSS personnalisés pour les animations et l'affichage */

        /* Exemple d'animation de fond */
        .fond {
            animation: backgroundAnimation 10s infinite alternate;
        }

        @keyframes backgroundAnimation {
            0% { background-position: right top; }
            100% { background-position: left bottom; }
        }
    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <section class="vh-100 fond" style="background-repeat: no-repeat; background-position: right top; backgroud-attachment: fixed; background-image: url('{{ asset('images/DSC_0867-scaled.jpg') }}'); background-size: cover;">


        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: rgba(246,138,12,.83)">

                        <div class="card-body p-5 ">
                            <div class="row align-items-center mb-2">
                                {{-- <img src="{{ asset('images/téléchargement.jpg') }}" alt="" style="width: 50px;"> --}}
                                <span class="text-center" style="color: white; font-size:25px;font-family: 'Lora', serif;">SOC ELITE</span>
                            </div>

                            <p class="mb-5 text-center" style="color: white;">
                                <span style="display: inline-block; margin-right: 3px; font-size: 1em; width: 2em; height: 1.5em;">
                                  <x-uni-exclamation-circle-thin style="width: 100%; height: 115%;" />
                                </span>
                                Connectez-vous à <span style="font-family: 'Lora', serif;">SOC ELITE</span>
                            </p>

                            <form method="POST" action="{{ route('auth.login') }}">
                                @csrf

                                <div class="wrap-input100 validate-input" >
                                    <input class="input100" type="text" name="nomUtilisateur" id="nomUtilisateur" value="{{ old('nomUtilisateur') }}">
                                    <span class="focus-input100" data-placeholder="Identifiant"></span>

                                </div>


                                    {{-- @error('nomUtilisateur')
                                        <p style="color: white">Le l'identifiant est obligatoire</p>
                                    @enderror --}}

                                    @if ($errors->has('nomUtilisateur'))
                                        <p style="color: white">{{ $errors->first('nomUtilisateur') }}</p>
                                    @endif




                                {{-- @error("nomUtilisateur")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}

                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye" style="color:white;"></i>
                                    </span>
                                    <input class="input100" type="password" name="password" id="password">
                                    <span class="focus-input100" data-placeholder="Mot de passe"></span>

                                </div>


                                    @if ($errors->has('password'))
                                        <p style="color:white">{{ $errors->first('password') }}</p>
                                    @endif
                                    {{-- @error('password')
                                        <p style="color: white;">Le mot de passe est requis</p>
                                    @enderror --}}



                                {{-- @error("password")
                                    <span class="text-danger mt-0">{{ $message }}</span>
                                @enderror --}}

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label mx-2" for="form1Example3" style="color:white;"> Se souvenir de moi </label>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn" type="submit">
                                            Connexion
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script>


        $(document).ready(function() {
            (function ($) {
                "use strict";


                /*==================================================================
                [ Focus input ]*/
                $('.input100').each(function(){
                    $(this).on('blur', function(){
                        if($(this).val().trim() != "") {
                            $(this).addClass('has-val');
                        }
                        else {
                            $(this).removeClass('has-val');
                        }
                    })
                })


                /*==================================================================
                [ Validate ]*/
                var input = $('.validate-input .input100');

                $('.validate-form').on('submit',function(){
                    var check = true;

                    for(var i=0; i<input.length; i++) {
                        if(validate(input[i]) == false){
                            showValidate(input[i]);
                            check=false;
                        }
                    }

                    return check;
                });


                $('.validate-form .input100').each(function(){
                    $(this).focus(function(){
                    hideValidate(this);
                    });
                });

                function validate (input) {
                    if($(input).attr('type') == 'nomUtilisateur' || $(input).attr('name') == 'nomUtilisateur') {
                        if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                            return false;
                        }
                    }
                    else {
                        if($(input).val().trim() == ''){
                            return false;
                        }
                    }
                }

                function showValidate(input) {
                    var thisAlert = $(input).parent();

                    $(thisAlert).addClass('alert-validate');
                }

                function hideValidate(input) {
                    var thisAlert = $(input).parent();

                    $(thisAlert).removeClass('alert-validate');
                }

                /*==================================================================
                [ Show pass ]*/
                var showPass = 0;
                $('.btn-show-pass').on('click', function(){
                    if(showPass == 0) {
                        $(this).next('input').attr('type','text');
                        $(this).find('i').removeClass('zmdi-eye');
                        $(this).find('i').addClass('zmdi-eye-off');
                        showPass = 1;
                    }
                    else {
                        $(this).next('input').attr('type','password');
                        $(this).find('i').addClass('zmdi-eye');
                        $(this).find('i').removeClass('zmdi-eye-off');
                        showPass = 0;
                    }

                });


            })(jQuery);
        });



    </script>
</body>
</html>
