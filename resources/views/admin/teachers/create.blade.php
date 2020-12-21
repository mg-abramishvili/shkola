@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.teacher.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.teachers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tch_pic">{{ trans('cruds.teacher.fields.tch_pic') }}</label>
                <div class="needsclick dropzone {{ $errors->has('tch_pic') ? 'is-invalid' : '' }}" id="tch_pic-dropzone">
                </div>
                @if($errors->has('tch_pic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tch_pic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.tch_pic_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tch_name">{{ trans('cruds.teacher.fields.tch_name') }}</label>
                <input class="form-control {{ $errors->has('tch_name') ? 'is-invalid' : '' }}" type="text" name="tch_name" id="tch_name" value="{{ old('tch_name', '') }}" required>
                @if($errors->has('tch_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tch_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.tch_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tch_spec">{{ trans('cruds.teacher.fields.tch_spec') }}</label>
                <input class="form-control {{ $errors->has('tch_spec') ? 'is-invalid' : '' }}" type="text" name="tch_spec" id="tch_spec" value="{{ old('tch_spec', '') }}" required>
                @if($errors->has('tch_spec'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tch_spec') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.tch_spec_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tch_text">{{ trans('cruds.teacher.fields.tch_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('tch_text') ? 'is-invalid' : '' }}" name="tch_text" id="tch_text">{!! old('tch_text') !!}</textarea>
                @if($errors->has('tch_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tch_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.tch_text_helper') }}</span>
            </div>
            <!--<div class="form-group">
                <label>{{ trans('cruds.teacher.fields.tch_category') }}</label>
                <select class="form-control {{ $errors->has('tch_category') ? 'is-invalid' : '' }}" name="tch_category" id="tch_category">
                    <option value disabled {{ old('tch_category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Teacher::TCH_CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('tch_category', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('tch_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tch_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teacher.fields.tch_category_helper') }}</span>
            </div>-->
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
    Dropzone.options.tchPicDropzone = {
    url: '{{ route('admin.teachers.storeMedia') }}',
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
      $('form').find('input[name="tch_pic"]').remove()
      $('form').append('<input type="hidden" name="tch_pic" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="tch_pic"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($teacher) && $teacher->tch_pic)
      var file = {!! json_encode($teacher->tch_pic) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="tch_pic" value="' + file.file_name + '">')
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
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/teachers/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', {{ $teacher->id ?? 0 }});
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection