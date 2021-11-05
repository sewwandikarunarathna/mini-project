<style>


</style>

<div class="row justify-content-center">
    <div class="col-md-8">

                <form method="POST" action="makeAppt.blade.php">
                    @csrf
                    <h3>Make Appointment!</h3>
                    <hr>
                    <div class="form-group row">
                        <label for="patient_id" class="col-md-4 col-form-label text-md-right">{{ __('patient ID') }}</label>

                        <div class="col-md-6">
                            <input id="patient_id" type="text" class="form-control @error('patient_id') is-invalid @enderror" name="patient_id" value="{{ old('patient_id') }}" required autocomplete="name" autofocus>

                            @error('patient_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="doctor" class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>

                        <div class="col-md-6">
                            <select id="doctor" class="form-control @error('doctor') is-invalid @enderror" name="doctor" value="{{ old('doctor') }}" required autocomplete="name" autofocus>
                                <option value="doctor 1">doctor 1</option>
                                <option value="doctor 2">doctor 2</option>
                            </select>

                            @error('doctor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                      <div class="col-md-6">
                          <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="name" autofocus>

                          @error('date')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                 

                    <div class="form-group row">
                      <label for="session" class="col-md-4 col-form-label text-md-right">{{ __('Session') }}</label>

                      <div class="col-md-6">
                          <select id="session" class="form-control @error('session') is-invalid @enderror" name="session" value="{{ old('session') }}" required autocomplete="name" autofocus>
                              <option value="4">4 - 5</option>
                              <option value="5">5 - 6</option>
                              <option value="6">6 - 7</option>
                              <option value="7">7 - 8</option>
                          </select>

                          @error('session')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                   
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary button">
                                {{ __('Make Appointment') }}
                            </button>
                        </div>
                    </div>
                   
                </form>
         </div>   
       
    </div>