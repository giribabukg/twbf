@extends('layouts.frontnoparallex')

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('content')
		      <div class="container">
						<div class="row justify-content-center">
					    <div class="register-box w-100">
					        <div class="card">
					            <div class="card-body register-card-body">
					            <p class="login-box-msg text-center">{{ __('adminlte::adminlte.register_message') }}</p>
					            <form action="{{ $register_url }}" method="post">
					                {{ csrf_field() }}

													<div class="form-group row">
													  <label for="inputFullName" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.full_name') }} <i class="fa fa-asterisk text-danger pl-1"></i></label>
													  <div class="col-sm-6">
													    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputFullName" value="{{ old('name') }}" autofocus>
					                    @if ($errors->has('name'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('name') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>
													<div class="form-group row">
													  <label for="inputFatherName" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.father_name') }}</label>
													  <div class="col-sm-6">
													    <input type="text" name="father_name" class="form-control {{ $errors->has('father_name') ? 'is-invalid' : '' }}" id="inputFatherName" value="{{ old('father_name') }}">
					                    @if ($errors->has('father_name'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('father_name') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>
													<div class="form-group row">
													  <label for="inputGender" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.gender') }}<i class="fa fa-asterisk text-danger pl-1"></i></label>
													  <div class="col-sm-6">
													    <input type="text" name="gender" class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" id="inputGender" value="{{ old('gender') }}">
					                    @if ($errors->has('gender'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('gender') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputDob" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.dob') }}<i class="fa fa-asterisk text-danger pl-1"></i></label>
													  <div class="col-sm-6">
													    <input type="date" name="dob" class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}" id="inputDob value="{{ old('dob') }}" min="1920-01-01" max="2019-12-31">
					                    @if ($errors->has('dob'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('dob') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputAddress" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.address') }}</label>
													  <div class="col-sm-6">
													    <textarea name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" id="inputAddress" >{{ old('address') }}</textarea>
					                    @if ($errors->has('address'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('address') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputMobile" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.mobile') }}<i class="fa fa-asterisk text-danger pl-1"></i></label>
													  <div class="col-sm-6">
													    <input type="number" name="mobile" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" id="inputMobile" value="{{ old('mobile') }}" pattern="[56789][0-9]{9}">
					                    @if ($errors->has('mobile'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('mobile') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputWhatsApp" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.whatsapp_no') }}</label>
													  <div class="col-sm-6">
													    <input type="number" name="whatsapp_no" class="form-control {{ $errors->has('whatsapp_no') ? 'is-invalid' : '' }}" id="inputWhatsApp" value="{{ old('whatsapp_no') }}" pattern="[56789][0-9]{9}">
					                    @if ($errors->has('whatsapp_no'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('whatsapp_no') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputDistrict" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.district') }}</label>
													  <div class="col-sm-6">
													    <input type="text" name="district" class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" id="inputDistrict" value="{{ old('district') }}">
					                    @if ($errors->has('district'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('district') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputConsti" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.constituency') }}</label>
													  <div class="col-sm-6">
													    <input type="text" name="constituency" class="form-control {{ $errors->has('constituency') ? 'is-invalid' : '' }}" id="inputConsti" value="{{ old('constituency') }}">
					                    @if ($errors->has('constituency'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('constituency') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputWard" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.ward_no') }}</label>
													  <div class="col-sm-6">
													    <input type="text" name="ward_no" class="form-control {{ $errors->has('ward_no') ? 'is-invalid' : '' }}" id="inputWard" value="{{ old('ward_no') }}">
					                    @if ($errors->has('ward_no'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('ward_no') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputVoter" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.voter_id') }}</label>
													  <div class="col-sm-6">
													    <input type="text" name="voter_id" class="form-control {{ $errors->has('voter_id') ? 'is-invalid' : '' }}" id="inputVoter" value="{{ old('voter_id') }}">
					                    @if ($errors->has('voter_id'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('voter_id') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputEmail3" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.email') }}<i class="fa fa-asterisk text-danger pl-1"></i></label>
													  <div class="col-sm-6">
													    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="inputEmail3" value="{{ old('email') }}">
					                    @if ($errors->has('email'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('email') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputPassword" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.password') }}<i class="fa fa-asterisk text-danger pl-1"></i></label>
													  <div class="col-sm-6">
													    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="inputPassword" value="{{ old('password') }}">
					                    @if ($errors->has('password'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('password') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

													<div class="form-group row">
													  <label for="inputPassConf" class="col-sm-2 col-form-label">{{ __('adminlte::adminlte.retype_password') }}</label>
													  <div class="col-sm-6">
													    <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="inputPassConf" value="{{ old('password_confirmation') }}">
					                    @if ($errors->has('password_confirmation'))
					                        <div class="invalid-feedback">
					                            <strong>{{ $errors->first('password_confirmation') }}</strong>
					                        </div>
					                    @endif
													  </div>
													</div>

					                <div class="form-group row">
														<div class="col-sm-2"></div>
														<div class="col-sm-6">
														<button type="submit" class="btn btn-primary btn-block btn-flat">
						                    {{ __('adminlte::adminlte.register') }}
						                </button>
						              </div>
												</div>
					            </form>
					        </div>
					        <!-- /.form-box -->
					    </div><!-- /.register-box -->
	          </div>
        </div>

@stop