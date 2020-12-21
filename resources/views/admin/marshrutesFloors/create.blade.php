@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.marshrutesFloor.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.marshrutes-floors.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="marshrutesfloor_title">{{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_title') }}</label>
                <input class="form-control {{ $errors->has('marshrutesfloor_title') ? 'is-invalid' : '' }}" type="text" name="marshrutesfloor_title" id="marshrutesfloor_title" value="{{ old('marshrutesfloor_title', '') }}" required>
                @if($errors->has('marshrutesfloor_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marshrutesfloor_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marshrutesfloor_image">{{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('marshrutesfloor_image') ? 'is-invalid' : '' }}" id="marshrutesfloor_image-dropzone">
                </div>
                @if($errors->has('marshrutesfloor_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marshrutesfloor_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marshrutesFloor.fields.marshrutesfloor_image_helper') }}</span>
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
    Dropzone.options.marshrutesfloorImageDropzone = {
    url: '{{ route('admin.marshrutes-floors.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
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
      $('form').find('input[name="marshrutesfloor_image"]').remove()
      $('form').append('<input type="hidden" name="marshrutesfloor_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="marshrutesfloor_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($marshrutesFloor) && $marshrutesFloor->marshrutesfloor_image)
      var file = {!! json_encode($marshrutesFloor->marshrutesfloor_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="marshrutesfloor_image" value="' + file.file_name + '">')
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