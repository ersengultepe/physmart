@extends('admin.sablon')

@section('meta')
    <title>SDS Danışmanlık | Haber Ekleme Sayfası</title>
@endsection

@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('pa/HTML/assets/vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}"/>

    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/vendor/summernote/summernote-bs3.css') }}"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme.css') }}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/skins/default.css') }}"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('pa/HTML/assets/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('pa/HTML/assets/vendor/modernizr/modernizr.js') }}"></script>
@endsection

@section('content')
    <div class="col-md-12">
        <form action="{{ route('haber.store') }}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="slug" value="">
            {!! Form::token() !!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
            {!! Form::hidden('publish', 1) !!}

            <section class="panel">
                @if(Session::get('hata'))
                    <div class="alert alert-danger">{{ Session::get('hata') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                @endif
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Haber Ekleme Sayfası</h2>
                    <p class="panel-subtitle">

                    </p>
                </header>
                <div class="panel-body">
                    <div class="form-group">

                        <label class="col-sm-3 control-label" id="title">Başlık<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control"  value="{{ old('title') }}"
                                   placeholder="Haberin Başlığını Yazınız" required="">

                            @if ($errors->has('title'))
                                <label for="title" class="error">{{ $errors->first('title') }}</label>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kategori <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-sort-down"></i>
                                </span>

                                <select name="category_id" id="category_id" class="form-control" required="">
                                    <option value="">Seçiniz</option>
                                    @foreach($categories as $category)
                                        <option @if(Session::has('category_id') and Session::get('category_id') == $category->id) selected
                                                @endif
                                                value="{{ $category->id }}">{!! $category->title !!}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <label for="category_id" class="error">{{ $errors->first('category_id') }}</label>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Foto<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control">
                            @if ($errors->has('image'))
                                <label for="image" class="error">{{ $errors->first('image') }}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Haber İçeriği<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <!-- text editörünün başlangıcı -->
                            <div class="summernote" data-plugin-summernote=""
                                 data-plugin-options="{ &quot;height&quot;: 180, &quot;codemirror&quot;: { &quot;theme&quot;: &quot;ambiance&quot; } }"
                                 style="display: none;">Start typing...
                            </div>
                            <div class="note-editor">
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message"></div>
                                </div>
                                <div class="note-dialog">
                                    <div class="note-image-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" aria-hidden="true"
                                                            tabindex="-1">×
                                                    </button>
                                                    <h4>Insert Image</h4></div>
                                                <div class="modal-body">
                                                    <div class="row-fluid">
                                                        <h5>Select from files</h5>
                                                        <input class="note-image-input" type="file" name="files"
                                                               accept="image/*">
                                                        <h5>Image URL</h5><input
                                                                class="note-image-url form-control span12"
                                                                type="text"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button href="#"
                                                            class="btn btn-primary note-image-btn disabled"
                                                            disabled="">Insert Image
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-link-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" aria-hidden="true"
                                                            tabindex="-1">×
                                                    </button>
                                                    <h4>Insert Link</h4></div>
                                                <div class="modal-body">
                                                    <div class="row-fluid">
                                                        <div class="form-group"><label>Text to
                                                                display</label><input
                                                                    class="note-link-text form-control span12"
                                                                    type="text" disabled=""></div>
                                                        <div class="form-group"><label>To what URL should this
                                                                link go?</label><input
                                                                    class="note-link-url form-control span12"
                                                                    type="text"></div>
                                                        <div class="checkbox"><label><input type="checkbox"
                                                                                            checked=""> Open in
                                                                new window</label></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button href="#"
                                                            class="btn btn-primary note-link-btn disabled"
                                                            disabled="">Insert Link
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-video-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" aria-hidden="true"
                                                            tabindex="-1">×
                                                    </button>
                                                    <h4>Insert Video</h4></div>
                                                <div class="modal-body">
                                                    <div class="row-fluid">
                                                        <div class="form-group"><label>Video URL?</label>&nbsp;<small
                                                                    class="text-muted">(YouTube, Vimeo, Vine,
                                                                Instagram, or DailyMotion)
                                                            </small>
                                                            <input class="note-video-url form-control span12"
                                                                   type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button href="#"
                                                            class="btn btn-primary note-video-btn disabled"
                                                            disabled="">Insert Video
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-help-dialog modal" aria-hidden="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row-fluid"><a class="modal-close pull-right"
                                                                              aria-hidden="true" tabindex="-1">Close</a>
                                                        <div class="title">Keyboard shortcuts</div>
                                                        <p class="text-center"><a
                                                                    href="//hackerwins.github.io/summernote/"
                                                                    target="_blank">Summernote 0.5.2</a> · <a
                                                                    href="//github.com/HackerWins/summernote"
                                                                    target="_blank">Project</a> · <a
                                                                    href="//github.com/HackerWins/summernote/issues"
                                                                    target="_blank">Issues</a></p>
                                                        <table class="note-shortcut-layout">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table class="note-shortcut">
                                                                        <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Ctrl + Z</td>
                                                                            <td>Undo</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + Z</td>
                                                                            <td>Redo</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + ]</td>
                                                                            <td>Indent</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + [</td>
                                                                            <td>Outdent</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + ENTER</td>
                                                                            <td>Insert Horizontal Rule</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <table class="note-shortcut">
                                                                        <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>Text formatting</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Ctrl + B</td>
                                                                            <td>Bold</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + I</td>
                                                                            <td>Italic</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + U</td>
                                                                            <td>Underline</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + S</td>
                                                                            <td>Strike</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + \</td>
                                                                            <td>Remove Font Style</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="note-shortcut">
                                                                        <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>Document Style</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Ctrl + NUM0</td>
                                                                            <td>Normal</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + NUM1</td>
                                                                            <td>Header 1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + NUM2</td>
                                                                            <td>Header 2</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + NUM3</td>
                                                                            <td>Header 3</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + NUM4</td>
                                                                            <td>Header 4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + NUM5</td>
                                                                            <td>Header 5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + NUM6</td>
                                                                            <td>Header 6</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <table class="note-shortcut">
                                                                        <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>Paragraph formatting</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + L</td>
                                                                            <td>Align left</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + E</td>
                                                                            <td>Align center</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + R</td>
                                                                            <td>Align right</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + J</td>
                                                                            <td>Justify full</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + NUM7</td>
                                                                            <td>Ordered list</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ctrl + Shift + NUM8</td>
                                                                            <td>Unordered list</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-handle">
                                    <div class="note-control-selection" style="display: none;">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div>
                                <div class="note-popover">
                                    <div class="note-link-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content"><a href="http://www.google.com"
                                                                        target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                    class="note-insert btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="showLinkDialog" tabindex="-1"
                                                        data-original-title="Edit"><i
                                                            class="fa fa-edit icon-edit"></i></button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="unlink" tabindex="-1"
                                                        data-original-title="Unlink"><i
                                                            class="fa fa-unlink icon-unlink"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-image-popover popover bottom in" style="display: none;">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="resize" data-value="1"
                                                        tabindex="-1" data-original-title="Resize Full"><span
                                                            class="note-fontsize-10">100%</span></button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="resize" data-value="0.5"
                                                        tabindex="-1" data-original-title="Resize Half"><span
                                                            class="note-fontsize-10">50%</span></button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="resize" data-value="0.25"
                                                        tabindex="-1" data-original-title="Resize Quarter"><span
                                                            class="note-fontsize-10">25%</span></button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="floatMe" data-value="left"
                                                        tabindex="-1" data-original-title="Float Left"><i
                                                            class="fa fa-align-left icon-align-left"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="floatMe" data-value="right"
                                                        tabindex="-1" data-original-title="Float Right"><i
                                                            class="fa fa-align-left icon-align-right"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="floatMe" data-value="none"
                                                        tabindex="-1" data-original-title="Float None"><i
                                                            class="fa fa-align-justify icon-align-justify"></i>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="removeMedia" data-value="none"
                                                        tabindex="-1" data-original-title="Remove Image"><i
                                                            class="fa fa-trash-o icon-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-toolbar btn-toolbar">
                                    <div class="note-style btn-group">
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Style"><i
                                                    class="fa fa-magic icon-magic"></i> <span
                                                    class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a data-event="formatBlock" data-value="p">Normal</a></li>
                                            <li><a data-event="formatBlock" data-value="blockquote">
                                                    <blockquote>Quote</blockquote>
                                                </a></li>
                                            <li><a data-event="formatBlock" data-value="pre">Code</a></li>
                                            <li><a data-event="formatBlock" data-value="h1"><h1>Header 1</h1>
                                                </a></li>
                                            <li><a data-event="formatBlock" data-value="h2"><h2>Header 2</h2>
                                                </a></li>
                                            <li><a data-event="formatBlock" data-value="h3"><h3>Header 3</h3>
                                                </a></li>
                                            <li><a data-event="formatBlock" data-value="h4"><h4>Header 4</h4>
                                                </a></li>
                                            <li><a data-event="formatBlock" data-value="h5"><h5>Header 5</h5>
                                                </a></li>
                                            <li><a data-event="formatBlock" data-value="h6"><h6>Header 6</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="note-font btn-group">
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="bold" tabindex="-1"
                                                data-original-title="Bold (CTRL+B)"><i
                                                    class="fa fa-bold icon-bold"></i></button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="italic" tabindex="-1"
                                                data-original-title="Italic (CTRL+I)"><i
                                                    class="fa fa-italic icon-italic"></i></button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="underline" tabindex="-1"
                                                data-original-title="Underline (CTRL+U)"><i
                                                    class="fa fa-underline icon-underline"></i></button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="removeFormat" tabindex="-1"
                                                data-original-title="Remove Font Style (CTRL+\)"><i
                                                    class="fa fa-eraser icon-eraser"></i></button>
                                    </div>
                                    <div class="note-fontname btn-group">
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Font Family"><span
                                                    class="note-current-fontname">Arial</span> <span
                                                    class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a data-event="fontName" data-value="Serif" class=""><i
                                                            class="fa fa-check icon-ok"></i> Serif</a></li>
                                            <li><a data-event="fontName" data-value="Sans" class=""><i
                                                            class="fa fa-check icon-ok"></i> Sans</a></li>
                                            <li><a data-event="fontName" data-value="Arial" class="checked"><i
                                                            class="fa fa-check icon-ok"></i> Arial</a></li>
                                            <li><a data-event="fontName" data-value="Arial Black" class=""><i
                                                            class="fa fa-check icon-ok"></i> Arial Black</a>
                                            </li>
                                            <li><a data-event="fontName" data-value="Courier" class=""><i
                                                            class="fa fa-check icon-ok"></i> Courier</a></li>
                                            <li><a data-event="fontName" data-value="Courier New" class=""><i
                                                            class="fa fa-check icon-ok"></i> Courier New</a>
                                            </li>
                                            <li><a data-event="fontName" data-value="Comic Sans MS" class=""><i
                                                            class="fa fa-check icon-ok"></i> Comic Sans MS</a>
                                            </li>
                                            <li><a data-event="fontName" data-value="Helvetica" class=""><i
                                                            class="fa fa-check icon-ok"></i> Helvetica</a></li>
                                            <li><a data-event="fontName" data-value="Impact" class=""><i
                                                            class="fa fa-check icon-ok"></i> Impact</a></li>
                                            <li><a data-event="fontName" data-value="Lucida Grande" class=""><i
                                                            class="fa fa-check icon-ok"></i> Lucida Grande</a>
                                            </li>
                                            <li><a data-event="fontName" data-value="Lucida Sans" class=""><i
                                                            class="fa fa-check icon-ok"></i> Lucida Sans</a>
                                            </li>
                                            <li><a data-event="fontName" data-value="Tahoma" class=""><i
                                                            class="fa fa-check icon-ok"></i> Tahoma</a></li>
                                            <li><a data-event="fontName" data-value="Times" class=""><i
                                                            class="fa fa-check icon-ok"></i> Times</a></li>
                                            <li><a data-event="fontName" data-value="Times New Roman"
                                                   class=""><i class="fa fa-check icon-ok"></i> Times New Roman</a>
                                            </li>
                                            <li><a data-event="fontName" data-value="Verdana" class=""><i
                                                            class="fa fa-check icon-ok"></i> Verdana</a></li>
                                        </ul>
                                    </div>
                                    <div class="note-color btn-group">
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small note-recent-color"
                                                title="" data-event="color"
                                                data-value="{&quot;backColor&quot;:&quot;yellow&quot;}"
                                                tabindex="-1" data-original-title="Recent Color"><i
                                                    class="fa fa-font icon-font"
                                                    style="color:black;background-color:yellow;"></i></button>
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="More Color"><span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">BackColor</div>
                                                    <div class="note-color-reset" data-event="backColor"
                                                         data-value="inherit" title="Transparent">Set
                                                        transparent
                                                    </div>
                                                    <div class="note-color-palette"
                                                         data-target-event="backColor">
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#000000;"
                                                                    data-event="backColor" data-value="#000000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#000000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#424242;"
                                                                    data-event="backColor" data-value="#424242"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#424242"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#636363;"
                                                                    data-event="backColor" data-value="#636363"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#636363"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94;"
                                                                    data-event="backColor" data-value="#9C9C94"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C9C94"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE;"
                                                                    data-event="backColor" data-value="#CEC6CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEC6CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF;"
                                                                    data-event="backColor" data-value="#EFEFEF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFEFEF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7;"
                                                                    data-event="backColor" data-value="#F7F7F7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7F7F7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF;"
                                                                    data-event="backColor" data-value="#FFFFFF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FF0000;"
                                                                    data-event="backColor" data-value="#FF0000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF0000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00;"
                                                                    data-event="backColor" data-value="#FF9C00"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF9C00"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00;"
                                                                    data-event="backColor" data-value="#FFFF00"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFF00"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00;"
                                                                    data-event="backColor" data-value="#00FF00"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FF00"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF;"
                                                                    data-event="backColor" data-value="#00FFFF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FFFF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF;"
                                                                    data-event="backColor" data-value="#0000FF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#0000FF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF;"
                                                                    data-event="backColor" data-value="#9C00FF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C00FF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF;"
                                                                    data-event="backColor" data-value="#FF00FF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#F7C6CE;"
                                                                    data-event="backColor" data-value="#F7C6CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7C6CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE;"
                                                                    data-event="backColor" data-value="#FFE7CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE7CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6;"
                                                                    data-event="backColor" data-value="#FFEFC6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFEFC6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6;"
                                                                    data-event="backColor" data-value="#D6EFD6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6EFD6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7;"
                                                                    data-event="backColor" data-value="#CEDEE7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEDEE7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7;"
                                                                    data-event="backColor" data-value="#CEE7F7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEE7F7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7;"
                                                                    data-event="backColor" data-value="#D6D6E7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6D6E7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE;"
                                                                    data-event="backColor" data-value="#E7D6DE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E79C9C;"
                                                                    data-event="backColor" data-value="#E79C9C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79C9C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C;"
                                                                    data-event="backColor" data-value="#FFC69C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFC69C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C;"
                                                                    data-event="backColor" data-value="#FFE79C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE79C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5;"
                                                                    data-event="backColor" data-value="#B5D6A5"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5D6A5"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE;"
                                                                    data-event="backColor" data-value="#A5C6CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A5C6CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF;"
                                                                    data-event="backColor" data-value="#9CC6EF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9CC6EF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6;"
                                                                    data-event="backColor" data-value="#B5A5D6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5A5D6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD;"
                                                                    data-event="backColor" data-value="#D6A5BD"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E76363;"
                                                                    data-event="backColor" data-value="#E76363"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E76363"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B;"
                                                                    data-event="backColor" data-value="#F7AD6B"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7AD6B"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663;"
                                                                    data-event="backColor" data-value="#FFD663"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFD663"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B;"
                                                                    data-event="backColor" data-value="#94BD7B"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#94BD7B"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD;"
                                                                    data-event="backColor" data-value="#73A5AD"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#73A5AD"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE;"
                                                                    data-event="backColor" data-value="#6BADDE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BADDE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6;"
                                                                    data-event="backColor" data-value="#8C7BC6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#8C7BC6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5;"
                                                                    data-event="backColor" data-value="#C67BA5"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CE0000;"
                                                                    data-event="backColor" data-value="#CE0000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CE0000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E79439;"
                                                                    data-event="backColor" data-value="#E79439"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79439"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631;"
                                                                    data-event="backColor" data-value="#EFC631"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFC631"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A;"
                                                                    data-event="backColor" data-value="#6BA54A"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BA54A"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C;"
                                                                    data-event="backColor" data-value="#4A7B8C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A7B8C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6;"
                                                                    data-event="backColor" data-value="#3984C6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#3984C6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5;"
                                                                    data-event="backColor" data-value="#634AA5"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#634AA5"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B;"
                                                                    data-event="backColor" data-value="#A54A7B"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9C0000;"
                                                                    data-event="backColor" data-value="#9C0000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C0000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#B56308;"
                                                                    data-event="backColor" data-value="#B56308"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B56308"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400;"
                                                                    data-event="backColor" data-value="#BD9400"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#BD9400"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#397B21;"
                                                                    data-event="backColor" data-value="#397B21"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#397B21"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A;"
                                                                    data-event="backColor" data-value="#104A5A"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#104A5A"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#085294;"
                                                                    data-event="backColor" data-value="#085294"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#085294"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#311873;"
                                                                    data-event="backColor" data-value="#311873"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#311873"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#731842;"
                                                                    data-event="backColor" data-value="#731842"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#731842"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#630000;"
                                                                    data-event="backColor" data-value="#630000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#630000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900;"
                                                                    data-event="backColor" data-value="#7B3900"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#7B3900"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#846300;"
                                                                    data-event="backColor" data-value="#846300"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#846300"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#295218;"
                                                                    data-event="backColor" data-value="#295218"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#295218"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#083139;"
                                                                    data-event="backColor" data-value="#083139"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#083139"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#003163;"
                                                                    data-event="backColor" data-value="#003163"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#003163"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#21104A;"
                                                                    data-event="backColor" data-value="#21104A"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#21104A"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031;"
                                                                    data-event="backColor" data-value="#4A1031"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">FontColor</div>
                                                    <div class="note-color-reset" data-event="foreColor"
                                                         data-value="inherit" title="Reset">Reset to default
                                                    </div>
                                                    <div class="note-color-palette"
                                                         data-target-event="foreColor">
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#000000;"
                                                                    data-event="foreColor" data-value="#000000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#000000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#424242;"
                                                                    data-event="foreColor" data-value="#424242"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#424242"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#636363;"
                                                                    data-event="foreColor" data-value="#636363"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#636363"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9C9C94;"
                                                                    data-event="foreColor" data-value="#9C9C94"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C9C94"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CEC6CE;"
                                                                    data-event="foreColor" data-value="#CEC6CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEC6CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#EFEFEF;"
                                                                    data-event="foreColor" data-value="#EFEFEF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFEFEF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#F7F7F7;"
                                                                    data-event="foreColor" data-value="#F7F7F7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7F7F7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFFFFF;"
                                                                    data-event="foreColor" data-value="#FFFFFF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFFFF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FF0000;"
                                                                    data-event="foreColor" data-value="#FF0000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF0000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FF9C00;"
                                                                    data-event="foreColor" data-value="#FF9C00"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF9C00"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFFF00;"
                                                                    data-event="foreColor" data-value="#FFFF00"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFFF00"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#00FF00;"
                                                                    data-event="foreColor" data-value="#00FF00"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FF00"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#00FFFF;"
                                                                    data-event="foreColor" data-value="#00FFFF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#00FFFF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#0000FF;"
                                                                    data-event="foreColor" data-value="#0000FF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#0000FF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9C00FF;"
                                                                    data-event="foreColor" data-value="#9C00FF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C00FF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FF00FF;"
                                                                    data-event="foreColor" data-value="#FF00FF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FF00FF"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#F7C6CE;"
                                                                    data-event="foreColor" data-value="#F7C6CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7C6CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFE7CE;"
                                                                    data-event="foreColor" data-value="#FFE7CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE7CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFEFC6;"
                                                                    data-event="foreColor" data-value="#FFEFC6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFEFC6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#D6EFD6;"
                                                                    data-event="foreColor" data-value="#D6EFD6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6EFD6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CEDEE7;"
                                                                    data-event="foreColor" data-value="#CEDEE7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEDEE7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CEE7F7;"
                                                                    data-event="foreColor" data-value="#CEE7F7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CEE7F7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#D6D6E7;"
                                                                    data-event="foreColor" data-value="#D6D6E7"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6D6E7"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E7D6DE;"
                                                                    data-event="foreColor" data-value="#E7D6DE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E7D6DE"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E79C9C;"
                                                                    data-event="foreColor" data-value="#E79C9C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79C9C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFC69C;"
                                                                    data-event="foreColor" data-value="#FFC69C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFC69C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFE79C;"
                                                                    data-event="foreColor" data-value="#FFE79C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFE79C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#B5D6A5;"
                                                                    data-event="foreColor" data-value="#B5D6A5"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5D6A5"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#A5C6CE;"
                                                                    data-event="foreColor" data-value="#A5C6CE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A5C6CE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9CC6EF;"
                                                                    data-event="foreColor" data-value="#9CC6EF"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9CC6EF"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#B5A5D6;"
                                                                    data-event="foreColor" data-value="#B5A5D6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B5A5D6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#D6A5BD;"
                                                                    data-event="foreColor" data-value="#D6A5BD"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#D6A5BD"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E76363;"
                                                                    data-event="foreColor" data-value="#E76363"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E76363"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#F7AD6B;"
                                                                    data-event="foreColor" data-value="#F7AD6B"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#F7AD6B"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#FFD663;"
                                                                    data-event="foreColor" data-value="#FFD663"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#FFD663"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#94BD7B;"
                                                                    data-event="foreColor" data-value="#94BD7B"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#94BD7B"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#73A5AD;"
                                                                    data-event="foreColor" data-value="#73A5AD"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#73A5AD"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#6BADDE;"
                                                                    data-event="foreColor" data-value="#6BADDE"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BADDE"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#8C7BC6;"
                                                                    data-event="foreColor" data-value="#8C7BC6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#8C7BC6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#C67BA5;"
                                                                    data-event="foreColor" data-value="#C67BA5"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#C67BA5"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#CE0000;"
                                                                    data-event="foreColor" data-value="#CE0000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#CE0000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#E79439;"
                                                                    data-event="foreColor" data-value="#E79439"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#E79439"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#EFC631;"
                                                                    data-event="foreColor" data-value="#EFC631"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#EFC631"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#6BA54A;"
                                                                    data-event="foreColor" data-value="#6BA54A"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#6BA54A"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#4A7B8C;"
                                                                    data-event="foreColor" data-value="#4A7B8C"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A7B8C"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#3984C6;"
                                                                    data-event="foreColor" data-value="#3984C6"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#3984C6"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#634AA5;"
                                                                    data-event="foreColor" data-value="#634AA5"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#634AA5"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#A54A7B;"
                                                                    data-event="foreColor" data-value="#A54A7B"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#A54A7B"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#9C0000;"
                                                                    data-event="foreColor" data-value="#9C0000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#9C0000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#B56308;"
                                                                    data-event="foreColor" data-value="#B56308"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#B56308"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#BD9400;"
                                                                    data-event="foreColor" data-value="#BD9400"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#BD9400"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#397B21;"
                                                                    data-event="foreColor" data-value="#397B21"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#397B21"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#104A5A;"
                                                                    data-event="foreColor" data-value="#104A5A"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#104A5A"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#085294;"
                                                                    data-event="foreColor" data-value="#085294"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#085294"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#311873;"
                                                                    data-event="foreColor" data-value="#311873"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#311873"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#731842;"
                                                                    data-event="foreColor" data-value="#731842"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#731842"></button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#630000;"
                                                                    data-event="foreColor" data-value="#630000"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#630000"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#7B3900;"
                                                                    data-event="foreColor" data-value="#7B3900"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#7B3900"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#846300;"
                                                                    data-event="foreColor" data-value="#846300"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#846300"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#295218;"
                                                                    data-event="foreColor" data-value="#295218"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#295218"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#083139;"
                                                                    data-event="foreColor" data-value="#083139"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#083139"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#003163;"
                                                                    data-event="foreColor" data-value="#003163"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#003163"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#21104A;"
                                                                    data-event="foreColor" data-value="#21104A"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#21104A"></button>
                                                            <button type="button" class="note-color-btn"
                                                                    style="background-color:#4A1031;"
                                                                    data-event="foreColor" data-value="#4A1031"
                                                                    title="" data-toggle="button" tabindex="-1"
                                                                    data-original-title="#4A1031"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="note-para btn-group">
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="insertUnorderedList" tabindex="-1"
                                                data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i
                                                    class="fa fa-list-ul icon-list-ul"></i></button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="insertOrderedList" tabindex="-1"
                                                data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i
                                                    class="fa fa-list-ol icon-list-ol"></i></button>
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Paragraph"><i
                                                    class="fa fa-align-left icon-align-left"></i> <span
                                                    class="caret"></span></button>
                                        <div class="dropdown-menu">
                                            <div class="note-align btn-group">
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-small active" title=""
                                                        data-event="justifyLeft" tabindex="-1"
                                                        data-original-title="Align left (CTRL+SHIFT+L)"><i
                                                            class="fa fa-align-left icon-align-left"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="justifyCenter" tabindex="-1"
                                                        data-original-title="Align center (CTRL+SHIFT+E)"><i
                                                            class="fa fa-align-center icon-align-center"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="justifyRight" tabindex="-1"
                                                        data-original-title="Align right (CTRL+SHIFT+R)"><i
                                                            class="fa fa-align-right icon-align-right"></i>
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="justifyFull" tabindex="-1"
                                                        data-original-title="Justify full (CTRL+SHIFT+J)"><i
                                                            class="fa fa-align-justify icon-align-justify"></i>
                                                </button>
                                            </div>
                                            <div class="note-list btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="indent" tabindex="-1"
                                                        data-original-title="Indent (CTRL+])"><i
                                                            class="fa fa-indent icon-indent-right"></i></button>
                                                <button type="button" class="btn btn-default btn-sm btn-small"
                                                        title="" data-event="outdent" tabindex="-1"
                                                        data-original-title="Outdent (CTRL+[)"><i
                                                            class="fa fa-outdent icon-indent-left"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-height btn-group">
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Line Height"><i
                                                    class="fa fa-text-height icon-text-height"></i> <span
                                                    class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a data-event="lineHeight" data-value="1.0" class=""><i
                                                            class="fa fa-check icon-ok"></i> 1.0</a></li>
                                            <li><a data-event="lineHeight" data-value="1.2" class=""><i
                                                            class="fa fa-check icon-ok"></i> 1.2</a></li>
                                            <li><a data-event="lineHeight" data-value="1.4" class=""><i
                                                            class="fa fa-check icon-ok"></i> 1.4</a></li>
                                            <li><a data-event="lineHeight" data-value="1.5" class=""><i
                                                            class="fa fa-check icon-ok"></i> 1.5</a></li>
                                            <li><a data-event="lineHeight" data-value="1.6" class=""><i
                                                            class="fa fa-check icon-ok"></i> 1.6</a></li>
                                            <li><a data-event="lineHeight" data-value="1.8" class=""><i
                                                            class="fa fa-check icon-ok"></i> 1.8</a></li>
                                            <li><a data-event="lineHeight" data-value="2.0" class=""><i
                                                            class="fa fa-check icon-ok"></i> 2.0</a></li>
                                            <li><a data-event="lineHeight" data-value="3.0" class=""><i
                                                            class="fa fa-check icon-ok"></i> 3.0</a></li>
                                        </ul>
                                    </div>
                                    <div class="note-table btn-group">
                                        <button type="button"
                                                class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Table"><i
                                                    class="fa fa-table icon-table"></i> <span
                                                    class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <div class="note-dimension-picker">
                                                <div class="note-dimension-picker-mousecatcher"
                                                     data-event="insertTable" data-value="1x1"></div>
                                                <div class="note-dimension-picker-highlighted"></div>
                                                <div class="note-dimension-picker-unhighlighted"></div>
                                            </div>
                                            <div class="note-dimension-display"> 1 x 1</div>
                                        </ul>
                                    </div>
                                    <div class="note-insert btn-group">
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="showLinkDialog" tabindex="-1"
                                                data-original-title="Link"><i class="fa fa-link icon-link"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="showImageDialog" tabindex="-1"
                                                data-original-title="Picture"><i
                                                    class="fa fa-picture-o icon-picture"></i></button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="showVideoDialog" tabindex="-1"
                                                data-original-title="Link"><i
                                                    class="fa fa-youtube-play icon-play"></i></button>
                                    </div>
                                    <div class="note-view btn-group">
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="fullscreen" tabindex="-1"
                                                data-original-title="Full Screen"><i
                                                    class="fa fa-arrows-alt icon-fullscreen"></i></button>
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="codeview" tabindex="-1"
                                                data-original-title="Code View"><i
                                                    class="fa fa-code icon-code"></i></button>
                                    </div>
                                    <div class="note-help btn-group">
                                        <button type="button" class="btn btn-default btn-sm btn-small" title=""
                                                data-event="showHelpDialog" tabindex="-1"
                                                data-original-title="Help"><i
                                                    class="fa fa-question icon-question"></i></button>
                                    </div>
                                </div>
                                <textarea name="body" class="note-codable"></textarea>
                                <div class="note-editable" contenteditable="true"
                                     style="height: 180px;">{!! old('body') !!}</div>
                                @if ($errors->has('body'))
                                    <label for="body" class="error">{{ $errors->first('body') }}</label>
                                @endif
                                <div class="note-statusbar">
                                    <div class="note-resizebar">
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            {!! Form::submit('Kaydet', ['class'=>'btn btn-primary']) !!}
                            {!! Form::reset('Formu Temizle', ['class'=>'btn btn-default']) !!}
                        </div>
                    </div>
                </footer>
            </section>
            </form>
    </div>
    <?php $errors = ''; ?>
@endsection

@section('js')
    <!-- Vendor -->
    <script src="{{ asset('pa/HTML/assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('pa/HTML/assets/vendor/summernote/summernote.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('pa/HTML/assets/javascripts/theme.init.js') }}"></script>

    <script src="{{ asset('pa/HTML/assets/javascripts/custom/makale-edit.js') }}"></script>
    <script>
        $('input[name=slug]').slugify('input[name=title]');
    </script>
@endsection