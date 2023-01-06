@extends('layout.dash-layout')
@section('css.plugins')
    <link href="{{ asset('assets-dash/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-dash/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-dash/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-dash/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-dash/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-dash/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets-dash/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
@endsection
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Letter of Appointment*" value="{{ old('title') }}" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please input mail title.</div>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom02" class="form-label">Date and Time of Arrival</label>
                                {{-- <div class="card-body"> --}}
                                    <div class="mb-3">
                                        <label class="form-label">Pick a Date</label>
                                        <input type="text" name="date" class="form-control datepicker" />
                                    </div>
                                    <div class="">
                                        <label class="form-label">Time</label>
                                        <input type="text" name="time" class="form-control timepicker" />
                                    </div>
                                {{-- </div> --}}
                                <div class="valid-feedback">Looks good!</div>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @error('time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="source" class="form-label">Source</label>
                                <input type="text" class="form-control" name="source" id="source" placeholder="Student - 2019122021*" value="{{ old('source') }}" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please input mail source.</div>
                                @error('source')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="destination" class="form-label">Destination</label>
                                <select class="form-select" id="destination" name="destination" required>
                                    <option selected disabled value="">Choose Destination</option>
                                    <option>Office One</option>
                                    <option>Office Two</option>
                                </select>
                                <div class="invalid-feedback">Please select a destination.</div>
                            </div>
                            <div class="col-md-12">
                                <label for="classfication" class="form-label">Classfication</label>
                                <select class="form-select" id="classfication" name="classfication" required>
                                    <option selected disabled value="">Choose Classfication</option>
                                    <option>Class One</option>
                                    <option>Class Two</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid class.</div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="priority" class="form-label">Priority Range</label>
									<input type="range" class="form-range text-center" min="0" max="6" id="priority">
                                    <div class="row text-center">
                                        <div class="col-4 bg-success">Low</div>
                                        <div class="col-4 bg-primary">Medium</div>
                                        <div class="col-4 bg-danger">High</div>
                                    </div>
								</div>
                            </div>
                            <div class="col-md-12">
                                <label for="image-uploadify" class="form-label">Upload Scanned Documents(Optional)</label>
                                <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                <div class="invalid-feedback">Please provide a valid file.</div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script src="{{ asset('assets-dash/plugins/datetimepicker/js/legacy.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/datetimepicker/js/picker.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/datetimepicker/js/picker.time.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/datetimepicker/js/picker.date.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>


<script src="{{ asset('assets-dash/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('assets-dash/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })()
</script>
<script>
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    }),
    $('.timepicker').pickatime()
</script>
<script>
    $(function () {
        $('#date-time').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD HH:mm:ss'
        });
        $('#date').bootstrapMaterialDatePicker({
            time: false
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm:ss'
        });
    });
</script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>
@endsection
