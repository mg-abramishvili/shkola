@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.events.update", [$event->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="ev_title">{{ trans('cruds.event.fields.ev_title') }}</label>
                <input class="form-control {{ $errors->has('ev_title') ? 'is-invalid' : '' }}" type="text" name="ev_title" id="ev_title" value="{{ old('ev_title', $event->ev_title) }}" required>
                @if($errors->has('ev_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ev_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ev_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ev_date">{{ trans('cruds.event.fields.ev_date') }}</label>
                <input class="form-control date {{ $errors->has('ev_date') ? 'is-invalid' : '' }}" type="text" name="ev_date" id="ev_date" value="{{ old('ev_date', $event->ev_date) }}">
                @if($errors->has('ev_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ev_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ev_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ev_pic">{{ trans('cruds.event.fields.ev_pic') }}</label>
                <div class="needsclick dropzone {{ $errors->has('ev_pic') ? 'is-invalid' : '' }}" id="ev_pic-dropzone">
                </div>
                @if($errors->has('ev_pic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ev_pic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ev_pic_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ev_text">{{ trans('cruds.event.fields.ev_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('ev_text') ? 'is-invalid' : '' }}" name="ev_text" id="ev_text">{!! old('ev_text', $event->ev_text) !!}</textarea>
                @if($errors->has('ev_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ev_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ev_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.event.fields.ev_cat') }}</label>
                <select class="form-control {{ $errors->has('ev_cat') ? 'is-invalid' : '' }}" name="ev_cat" id="ev_cat" required>
                    <option value disabled {{ old('ev_cat', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Event::EV_CAT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('ev_cat', $event->ev_cat) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('ev_cat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ev_cat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ev_cat_helper') }}</span>
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
    var uploadedEvPicMap = {}
Dropzone.options.evPicDropzone = {
    url: '{{ route('admin.events.storeMedia') }}',
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
      $('form').append('<input type="hidden" name="ev_pic[]" value="' + response.name + '">')
      uploadedEvPicMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedEvPicMap[file.name]
      }
      $('form').find('input[name="ev_pic[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($event) && $event->ev_pic)
      var files = {!! json_encode($event->ev_pic) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="ev_pic[]" value="' + file.file_name + '">')
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
                xhr.open('POST', '/admin/events/ckmedia', true);
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
                data.append('crud_id', {{ $event->id ?? 0 }});
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