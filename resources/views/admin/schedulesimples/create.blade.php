@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.schedulesimple.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.schedulesimples.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="schsm_title">{{ trans('cruds.schedulesimple.fields.schsm_title') }}</label>
                <input class="form-control {{ $errors->has('schsm_title') ? 'is-invalid' : '' }}" type="text" name="schsm_title" id="schsm_title" value="{{ old('schsm_title', '') }}" required>
                @if($errors->has('schsm_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('schsm_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.schedulesimple.fields.schsm_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="schsm_file">{{ trans('cruds.schedulesimple.fields.schsm_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('schsm_file') ? 'is-invalid' : '' }}" id="schsm_file-dropzone">
                </div>
                @if($errors->has('schsm_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('schsm_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.schedulesimple.fields.schsm_file_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.schsmFileDropzone = {
    url: '{{ route('admin.schedulesimples.storeMedia') }}',
    maxFilesize: 1, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 1
    },
    success: function (file, response) {
      $('form').find('input[name="schsm_file"]').remove()
      $('form').append('<input type="hidden" name="schsm_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="schsm_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($schedulesimple) && $schedulesimple->schsm_file)
      var file = {!! json_encode($schedulesimple->schsm_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="schsm_file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection