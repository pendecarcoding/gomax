@extends('backend.layouts.app')
@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h3">{{ translate('Add New Page') }}</h1>
            </div>
        </div>
    </div>
    <div class="card">
        <form action="{{ route('custom-pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h6 class="fw-600 mb-0">{{ translate('Page Content') }}</h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Title') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="{{ translate('Title') }}" name="title"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Link') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <div class="input-group d-block d-md-flex">
                            <div class="input-group-prepend "><span
                                    class="input-group-text flex-grow-1">{{ route('home') }}/page-custom/</span></div>
                            <input type="text" class="form-control w-100 w-md-auto" placeholder="{{ translate('Slug') }}"
                                name="slug" required>
                        </div>
                        <small class="form-text text-muted">{{ translate('Use character, number, hypen only') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Add Content') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <textarea class="aiz-text-editor form-control"
                            data-buttons='[
        ["font", ["bold", "underline", "italic", "clear"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["style", ["style"]],
        ["color", ["color"]],
        ["table", ["table"]],
        ["insert", ["link", "picture", "video"]],
        ["view", ["fullscreen", "codeview", "undo", "redo"]]
    ]'
                            placeholder="Content.." data-min-height="300" name="content" required></textarea>
                    </div>
                </div>
            </div>

            <div class="card-header">
                <h6 class="fw-600 mb-0">{{ translate('Seo Fields') }}</h6>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Meta Title') }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="{{ translate('Title') }}"
                            name="meta_title">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Meta Description') }}</label>
                    <div class="col-sm-10">
                        <textarea class="resize-off form-control" placeholder="{{ translate('Description') }}" name="meta_description"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Keywords') }}</label>
                    <div class="col-sm-10">
                        <textarea class="resize-off form-control" placeholder="{{ translate('Keyword, Keyword') }}" name="keywords"></textarea>
                        <small class="text-muted">{{ translate('Separate with coma') }}</small>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{ translate('Meta Image') }}</label>
                    <div class="col-sm-10">
                        <div class="input-group " data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                    {{ translate('Browse') }}</div>
                            </div>
                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                            <input type="hidden" name="meta_image" class="selected-files">
                        </div>
                        <div class="file-preview">
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">{{ translate('Save Page') }}</button>
                </div>
            </div>
        </form>
    </div>
    {{-- <script src="https://cdn.tiny.cloud/1/157aq4ovl78a320hdb60bb1wbdm7hrtganhtmalqi1flmsm7/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media',
                'searchreplace', 'table', 'visualblocks', 'wordcount',
                // Your account includes a free trial of TinyMCE premium features
                // Try the most popular premium features until Nov 11, 2025:
                'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker',
                'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai',
                'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags',
                'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                'See docs to implement AI Assistant')),
            uploadcare_public_key: '3aa965d6874cb959f57e',
        });
    </script> --}}
@endsection
