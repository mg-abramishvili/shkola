@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.photoalbum.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.photoalbums.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="phs">{{ trans('cruds.photoalbum.fields.phs') }}</label>
                <div class="needsclick dropzone {{ $errors->has('phs') ? 'is-invalid' : '' }}" id="phs-dropzone">
                </div>
                @if($errors->has('phs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.photoalbum.fields.phs_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phs_title">{{ trans('cruds.photoalbum.fields.phs_title') }}</label>
                <input class="form-control {{ $errors->has('phs_title') ? 'is-invalid' : '' }}" type="text" name="phs_title" id="phs_title" value="{{ old('phs_title', '') }}" required>
                @if($errors->has('phs_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phs_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.photoalbum.fields.phs_title_helper') }}</span>
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
    var uploadedPhsMap = {}
Dropzone.options.phsDropzone = {
    url: '{{ route('admin.photoalbums.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10,
      width: 6000,
      height: 6000
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="phs[]" value="' + response.name + '">')
      uploadedPhsMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhsMap[file.name]
      }
      $('form').find('input[name="phs[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($photoalbum) && $photoalbum->phs)
      var files = {!! json_encode($photoalbum->phs) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="phs[]" value="' + file.file_name + '">')
        }
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