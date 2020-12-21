@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.news.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.news.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nw_title">{{ trans('cruds.news.fields.nw_title') }}</label>
                <input class="form-control {{ $errors->has('nw_title') ? 'is-invalid' : '' }}" type="text" name="nw_title" id="nw_title" value="{{ old('nw_title', '') }}" required>
                @if($errors->has('nw_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nw_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.nw_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nw_date">{{ trans('cruds.news.fields.nw_date') }}</label>
                <input class="form-control date {{ $errors->has('nw_date') ? 'is-invalid' : '' }}" type="text" name="nw_date" id="nw_date" value="{{ old('nw_date') }}">
                @if($errors->has('nw_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nw_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.nw_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nw_pic">{{ trans('cruds.news.fields.nw_pic') }}</label>
                <div class="needsclick dropzone {{ $errors->has('nw_pic') ? 'is-invalid' : '' }}" id="nw_pic-dropzone">
                </div>
                @if($errors->has('nw_pic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nw_pic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.nw_pic_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nw_text">{{ trans('cruds.news.fields.nw_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('nw_text') ? 'is-invalid' : '' }}" name="nw_text" id="nw_text">{!! old('nw_text') !!}</textarea>
                @if($errors->has('nw_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nw_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.nw_text_helper') }}</span>
            </div>
            <!--<div class="form-group">
                <label for="nw_phs_id">{{ trans('cruds.news.fields.nw_phs') }}</label>
                <select class="form-control select2 {{ $errors->has('nw_phs') ? 'is-invalid' : '' }}" name="nw_phs_id" id="nw_phs_id">
                    @foreach($nw_phs as $id => $nw_phs)
                        <option value="{{ $id }}" {{ old('nw_phs_id') == $id ? 'selected' : '' }}>{{ $nw_phs }}</option>
                    @endforeach
                </select>
                @if($errors->has('nw_phs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nw_phs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.nw_phs_helper') }}</span>
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
    Dropzone.options.nwPicDropzone = {
    url: '{{ route('admin.news.storeMedia') }}',
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
      $('form').find('input[name="nw_pic"]').remove()
      $('form').append('<input type="hidden" name="nw_pic" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="nw_pic"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($news) && $news->nw_pic)
      var file = {!! json_encode($news->nw_pic) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="nw_pic" value="' + file.file_name + '">')
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
                xhr.open('POST', '/admin/news/ckmedia', true);
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
                data.append('crud_id', {{ $news->id ?? 0 }});
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