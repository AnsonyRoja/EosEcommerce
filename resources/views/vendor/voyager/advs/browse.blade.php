@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        @can('add', app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
            </a>
        @endcan
        @can('delete', app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if(isset($dataType->order_column) && isset($dataType->order_display_column))
                <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary btn-add-new">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan
        <button target="_blank" onclick="popitup('/storage/{{setting('admin.mapa_posiciones_publicidad')}}','Posiciones')" class="btn btn-primary btn-add-new" >Ver posiciones</button>
        @can('delete', app($dataType->model_name))
            @if($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle" data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan
        @foreach($actions as $action)
            @if (method_exists($action, 'massAction'))
                @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
            @endif
        @endforeach
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if ($isServerSide)
                            <form method="get" class="form-search"  id="formulario">
                                <div id="search-input">
                                    <div class="col-2">
                                        <select id="search_key" name="key">
                                            @foreach($searchNames as $key => $name)
                                                <option value="{{ $key }}" @if($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)) selected @endif>{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select id="filter" name="filter">
                                            <option value="contains" @if($search->filter == "contains") selected @endif>contains</option>
                                            <option value="equals" @if($search->filter == "equals") selected @endif>=</option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control" placeholder="{{ __('voyager::generic.search') }}" name="s" value="{{ $search->value }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="voyager-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                @if (Request::has('sort_order') && Request::has('order_by'))
                                    <input type="hidden" name="sort_order" value="{{ Request::get('sort_order') }}">
                                    <input type="hidden" name="order_by" value="{{ Request::get('order_by') }}">
                                @endif
                            </form>
                        @endif
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        @if($showCheckboxColumn)
                                            <th>
                                                <input type="checkbox" class="select_all">
                                            </th>
                                        @endif
                                        @foreach($dataType->browseRows as $row)
                                        <th>
                                            @if ($isServerSide)
                                                <a href="{{ $row->sortByUrl($orderBy, $sortOrder) }}">
                                            @endif
                                            {{ $row->getTranslatedAttribute('display_name') }}
                                            @if ($isServerSide)
                                                @if ($row->isCurrentSortField($orderBy))
                                                    @if ($sortOrder == 'asc')
                                                        <i class="voyager-angle-up pull-right"></i>
                                                    @else
                                                        <i class="voyager-angle-down pull-right"></i>
                                                    @endif
                                                @endif
                                                </a>
                                            @endif
                                        </th>
                                        @endforeach
                                        <th class="actions text-right">{{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataTypeContent as $data)
                                    <tr>
                                        @if($showCheckboxColumn)
                                            <td>
                                                <input type="checkbox" name="row_id" id="checkbox_{{ $data->getKey() }}" value="{{ $data->getKey() }}">
                                            </td>
                                        @endif
                                        @foreach($dataType->browseRows as $row)
                                            @php
                                            if ($data->{$row->field.'_browse'}) {
                                                $data->{$row->field} = $data->{$row->field.'_browse'};
                                            }
                                            @endphp
                                            <td>
                                                @if (isset($row->details->view))
                                                    @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $data->{$row->field}, 'action' => 'browse', 'view' => 'browse', 'options' => $row->details])
                                                @elseif($row->type == 'image')
                                                    <img src="@if( !filter_var($data->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif" style="width:100px">
                                                @elseif($row->type == 'relationship')
                                                    @include('voyager::formfields.relationship', ['view' => 'browse','options' => $row->details])
                                                @elseif($row->type == 'select_multiple')
                                                    @if(property_exists($row->details, 'relationship'))

                                                        @foreach($data->{$row->field} as $item)
                                                            {{ $item->{$row->field} }}
                                                        @endforeach

                                                    @elseif(property_exists($row->details, 'options'))
                                                        @if (!empty(json_decode($data->{$row->field})))
                                                            @foreach(json_decode($data->{$row->field}) as $item)
                                                                @if (@$row->details->options->{$item})
                                                                    {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            {{ __('voyager::generic.none') }}
                                                        @endif
                                                    @endif

                                                    @elseif($row->type == 'multiple_checkbox' && property_exists($row->details, 'options'))
                                                        @if (@count(json_decode($data->{$row->field})) > 0)
                                                            @foreach(json_decode($data->{$row->field}) as $item)
                                                                @if (@$row->details->options->{$item})
                                                                    {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            {{ __('voyager::generic.none') }}
                                                        @endif

                                                @elseif(($row->type == 'select_dropdown' || $row->type == 'radio_btn') && property_exists($row->details, 'options'))

                                                    {!! $row->details->options->{$data->{$row->field}} ?? '' !!}

                                                @elseif($row->type == 'date' || $row->type == 'timestamp')
                                                    @if ( property_exists($row->details, 'format') && !is_null($data->{$row->field}) )
                                                        {{ \Carbon\Carbon::parse($data->{$row->field})->formatLocalized($row->details->format) }}
                                                    @else
                                                        {{ $data->{$row->field} }}
                                                    @endif
                                                @elseif($row->type == 'checkbox')
                                                    @if(property_exists($row->details, 'on') && property_exists($row->details, 'off'))
                                                        @if($data->{$row->field})
                                                            <span class="label label-info">{{ $row->details->on }}</span>
                                                        @else
                                                            <span class="label label-primary">{{ $row->details->off }}</span>
                                                        @endif
                                                    @else
                                                    {{ $data->{$row->field} }}
                                                    @endif
                                                @elseif($row->type == 'color')
                                                    <span class="badge badge-lg" style="background-color: {{ $data->{$row->field} }}">{{ $data->{$row->field} }}</span>
                                                @elseif($row->type == 'text')
                                                    @include('voyager::multilingual.input-hidden-bread-browse')
                                                    <div>{{ mb_strlen( $data->{$row->field} ) > 200 ? mb_substr($data->{$row->field}, 0, 200) . ' ...' : $data->{$row->field} }}</div>
                                                @elseif($row->type == 'text_area')
                                                    @include('voyager::multilingual.input-hidden-bread-browse')
                                                    <div>{{ mb_strlen( $data->{$row->field} ) > 200 ? mb_substr($data->{$row->field}, 0, 200) . ' ...' : $data->{$row->field} }}</div>
                                                @elseif($row->type == 'file' && !empty($data->{$row->field}) )
                                                    @include('voyager::multilingual.input-hidden-bread-browse')
                                                    @if(json_decode($data->{$row->field}) !== null)
                                                        @foreach(json_decode($data->{$row->field}) as $file)
                                                            <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}" target="_blank">
                                                                {{ $file->original_name ?: '' }}
                                                            </a>
                                                            <br/>
                                                        @endforeach
                                                    @else
                                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($data->{$row->field}) }}" target="_blank">
                                                            Download
                                                        </a>
                                                    @endif
                                                @elseif($row->type == 'rich_text_box')
                                                    @include('voyager::multilingual.input-hidden-bread-browse')
                                                    <div>{{ mb_strlen( strip_tags($data->{$row->field}, '<b><i><u>') ) > 200 ? mb_substr(strip_tags($data->{$row->field}, '<b><i><u>'), 0, 200) . ' ...' : strip_tags($data->{$row->field}, '<b><i><u>') }}</div>
                                                @elseif($row->type == 'coordinates')
                                                    @include('voyager::partials.coordinates-static-image')
                                                @elseif($row->type == 'multiple_images')
                                                    @php $images = json_decode($data->{$row->field}); @endphp
                                                    @if($images)
                                                        @php $images = array_slice($images, 0, 3); @endphp
                                                        @foreach($images as $image)
                                                            <img src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{ Voyager::image( $image ) }}@else{{ $image }}@endif" style="width:50px">
                                                        @endforeach
                                                    @endif
                                                @elseif($row->type == 'media_picker')
                                                    @php
                                                        if (is_array($data->{$row->field})) {
                                                            $files = $data->{$row->field};
                                                        } else {
                                                            $files = json_decode($data->{$row->field});
                                                        }
                                                    @endphp
                                                    @if ($files)
                                                        @if (property_exists($row->details, 'show_as_images') && $row->details->show_as_images)
                                                            @foreach (array_slice($files, 0, 3) as $file)
                                                            <img src="@if( !filter_var($file, FILTER_VALIDATE_URL)){{ Voyager::image( $file ) }}@else{{ $file }}@endif" style="width:50px">
                                                            @endforeach
                                                        @else
                                                            <ul>
                                                            @foreach (array_slice($files, 0, 3) as $file)
                                                                <li>{{ $file }}</li>
                                                            @endforeach
                                                            </ul>
                                                        @endif
                                                        @if (count($files) > 3)
                                                            {{ __('voyager::media.files_more', ['count' => (count($files) - 3)]) }}
                                                        @endif
                                                    @elseif (is_array($files) && count($files) == 0)
                                                        {{ trans_choice('voyager::media.files', 0) }}
                                                    @elseif ($data->{$row->field} != '')
                                                        @if (property_exists($row->details, 'show_as_images') && $row->details->show_as_images)
                                                            <img src="@if( !filter_var($data->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif" style="width:50px">
                                                        @else
                                                            {{ $data->{$row->field} }}
                                                        @endif
                                                    @else
                                                        {{ trans_choice('voyager::media.files', 0) }}
                                                    @endif
                                                @else
                                                    @include('voyager::multilingual.input-hidden-bread-browse')
                                                    <span>{{ $data->{$row->field} }}</span>
                                                @endif
                                            </td>
                                        @endforeach
                                        <td class="no-sort no-click bread-actions">
                                            @foreach($actions as $action)
                                                @if (!method_exists($action, 'massAction'))
                                                    @include('voyager::bread.partials.actions', ['action' => $action])
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if ($isServerSide)
                            <div class="pull-left">
                                <div role="status" class="show-res" aria-live="polite">{{ trans_choice(
                                    'voyager::generic.showing_entries', $dataTypeContent->total(), [
                                        'from' => $dataTypeContent->firstItem(),
                                        'to' => $dataTypeContent->lastItem(),
                                        'all' => $dataTypeContent->total()
                                    ]) }}</div>
                            </div>
                            <div class="pull-right">
                                {{ $dataTypeContent->appends([
                                    's' => $search->value,
                                    'filter' => $search->filter,
                                    'key' => $search->key,
                                    'order_by' => $orderBy,
                                    'sort_order' => $sortOrder,
                                    'showSoftDeleted' => $showSoftDeleted,
                                ])->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
@stop

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script type="text/javascript" language="javascript" src="<?php echo url('/'); ?>/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
    <style>
button.dt-button.active {
    background: white !important;
}
    .topBtn{
       
    }
    </style>
    <script>
function popitup(url,windowName) {
       newwindow=window.open(url,windowName,'height=700,width=350');
       if (window.focus) {newwindow.focus()}
       return false;
     }

        $(document).ready(function () {
            var sub_titulo_pdf ="{{$dataType->getTranslatedAttribute('display_name_plural')}}";
            var orientar='portrait';
            var imagen64='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAAB9CAMAAAD9c/PQAAAAA3NCSVQICAjb4U/gAAACiFBMVEXUAADO6spnvlpswGDjVEy54bP/+/vsjYeQz4bbHRP2ysffOC7x+e/0urbodG19x3Km16Lxqqbh8t/53NvcKB3mZl/ZGA7gRDv76ejvnZia1JKKyoLrgXvdLSTE5r/ZFAqt3Kb98/PZ79Zzw2fr8+f1w8D349/40c7kXFTXCwfvsq7tlpDiTEWe1paCyniz363eMynpenTgPTW/47nnbGXbIxj1+/TWBAD6/fl5wm1pv13T7NDXHBTK6MXc8NnwpaHk9OLlYVnrhoGX0o5vwmPcKB/75uT41dKi15r87u3u+OzXCgTtkYz2xsTgQjnxrar1v733zcqNzoPzs7HhRz7rmpaGy3zZFwz0+vP+9/fbJRvocGn63tzbOS3////dMCbvoJvpeXLqfXrfUUmw3arC5b3S7M7m9OTaGxB/yHSq26LkWVHbIRe34LHsioS64rXO58bXCwDnaWLXIBR2xWvmZV7cKyGk2J3gQDb54N7f79/YEwiOz4X0vLnfOzGS0In52thtvl2e0pLb79h5xm375OPr9+rz9/PnbWndMijztrPi89/eNSx0w2jrhH7pdXD79/PlXVjo9eb1xsP87OvrmpKGynnbOTX76Of409HC47rv+O7f8dzG58Ku26r3y8n42NbYEAX3z83hRTzpfHa24K/ngnntko7jaWGLzoHjYV3si4b7/ft5xnHzsq6m2Z/tjomKyn2CxnXfTUm637bztrbvnpr1wb7O58qq26b3/Pfvrq787+9xwmXvqqrW7dLfOjH6397jVVH749/rgn2947eq16Ke0pbocmzq9ujK58LbIBXXIBjrkpLzysbvmpbhSUHulpHnaWXwop7jUUnYEAfXCQDngn1FmuLWAAAACXBIWXMAAC37AAAt+wH8h0rnAAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1M26LyyjAAADJpJREFUeJztnPtPE1kbx3uRSoGVAEO5RDoUYvTNchMtEgxX5eYCrZdQWsxhMVBrwddguJSgYGI1XkBSJQYjjeBiDIFl3192TQgEXCFZwg9AQP+ed3o/Z+acmSmdfX3zvnwTQ5k5zzOfOec5t+dYZACjImeJ0i9FNK4AWfVJgwFdN4dnSpAMd7FlTBHUlfD8fRxucgR0UgpAyQlfUCHFSAEoOWEVRHhZCsC/lfCdFICHhBLokDBy/f8Rrv/Xj4cNw4VB/XfOKbqJ+omAVFIASk4ovQ4JI9chYeQ6JIxch4SR65Awcv0PEN7zXFh4XGbVRuVn2jM7orTnE1skePDbKXnn7fyOjvworZXXoXAd3iy1j8RnKyApe+cyVyOh3HTXvR4rgR1e6VgtOiihUqnAypm7ejC8JXf0RZzDeHviwQh5dEXONXWnh/QS47rodjzZ4YUyiQkVipHnbNMB6G4W13PpLV5/Jb9xgycyQoXyA8vUDt18yKnAdEGH8eclJmSqEY1wPsIyngYOaUNqQkXzJZGEqyviHOZLTajIixNFuEoYFLjqkJpQ0Qw1NJFwCjvE4HUnbMKSsebczCit3Cov3bBHc/FHhAlbODE4Fm2/45bLtR9yuf3bGhZhfO6ZMmQMaJGnl7A8RgkSsnpxSbo85HMha4BVwb1Q4AgSNuNmo8QR1KMyOC4SCOVo+ZEplsObF9ACF8IgvIcrAEAnWo3BUnjCIidS+g7G4RkUMTRdHXj1tXoR6xFP+AEpW4p1KEfe+VZxxITAinhs5iMs6oWLRhEcorWojZwQRCEes3gIkWeTj5By4WJ5EhCCK7DHXB7COeiisoLoD43WwOIuEsIpuJ3HWoiEFXC5XLI/oIUJ6yQgBMgQYSUSbkDXSjBLsqCWfoVKOpckILTChHYiITx45pG9McqHHa5KQFgMB84ciXAJLmXnJUTiIV8CQqT3+QIRQ/gcXtRgNg6QFvKgoiNSEHZCDpVTBEJ4xish92Sv6qCy8cUSEJZBDn3VgyG8A11yxvG5Q0dO5aYEhJfgqa+TQJgJXeLvKMxcCr/yqgSELXAn+EAghIN1ToDwJdxV3BIQFsORnUkghEfNC3zeWE/276kizCw1Qw7tBEJ4OEwXIETG7HwpCOEZVwwh35znEdIoHeIICStYnxakrsOFAxCOgJabD+XazjOdbuvUS9ZgsXSL7TDCODxIHY7NOaE5QZk30nE+hBkHZ+02CITh9OVi+JVFxmFIJfEjAx863fKsUJKhAr5fSiCEL+Ut8BMiS8SosAhfD7hvFnMKlsIv8JBACK/FewXmFGQK0JIJ0X0FswnJf45/d3gazY4jECI7UXwWM6gpuKyVTLgAE64McLJsARXDiQTfXgpDmAjPE1p+QqRRKoiERVCacqzjMdkfMosSV7BIbAkMiPAStreIRFgW6vFK+1s+f0iqg7wLiIauObnBDAseO/39nku4ERpcLvCv5irgpan/jXGEt+EX4V3CIl3UTiAMBX+2m5cPfeHA1gxHmAiXGyG6A2gYBlITLMKl0AQwJ7AcRt0pysiEyFRWUsbjEo6Hlbc4wqVQEf4tD6NN5BQoMH1jd/T5uJIYIWNNYIJECJdCWQR2vpujIrhiQhkCLOFbJAt1hugTSWIEAhYmXAgGlhKfnoIUB6+7oBUBPvf1G1xWyU4eBoRkyIKdHiYMTvFK/j0jo5evEUBl8PgJT7iJZNmduMMqJq6RZFowQwYRBl+hxIpzAMuNxCAcE4QcLBKJCicuNaJFAJ3B1G+IMDh9Mk3c8riiLCurrGIzbgnj6yErRwyv+giEC2iiXfmB7fdSHeoyNNIFCUNdcyz9da+/VZTZ8XPpHe7n0ETw1s3mU9yCEvGkTHsWKzmftwEfFCVmslZTuDz2FQVZyl9H7HdKrdbSDfuVbM7dMXjgJJ6n5LPNVkbyS7PKyrKsZ35rZh8G9UL4AcLbbAeitYJ0TfKZlPCpY1BICs9PWCH6SIutXnTFRyZc4EQHUch0KxNuY169Zs2NPCePS9FEL6g6ETMfoVbYDK869nkQ3+ltsaiGvsgajL2ELb3Chjj1agFbvCfg4Db7uI0rdqP4CDMF7XBS2jHbIn5CMCUQTsoOzgDsIbwUxsFqUGP2m1wAQUImoPKILhUl6ZiNlozlNVD2Ynb2WPaKktAqK9GdhG1l3POKoPAL/mL3PfzAcSuT8/86/IRwFV50Rg/cdq8mVmxeYvR4syJxtfRO3ZwzO4BasuKMzpTz7K7E6GXnBSdKOTaXuYqbYH2EHQG6ex1yzK7do6XHU6tyeWmpfHXqMf9WSKyKK6xnOgZy09Nz6zKjSh+SN/pGmX/7PpbrvkQs9R01vy7zjoX3tALZiu+k5WNtD2SgWZFe9r1JCPo9hepSybT3+E7avqdikimKugFk5wldCCvzxOfad6+MPywaEhgZDFfvG1/FvJ8enNRJ8y0FSCfOVnu+QbKIzyxxpKo5eXV3Nnk/Zbggg2Krv61gzXFtv/LJ6fk0w/2T12six03a3vf5bqsRQaiL2W7dj+VwEdUf+8u+66+qbcOJ2kndAb6YqTu5e6o/4KyPkJ0LabC81SEejq2Cpv2+9vm9xcbpSXGouvfl7Tuwh3J+wnpDcsEB2dQW5Ne20aYjDGua4cT7BzXLuCDQXW9MqKos7EfdjE7wESZVFR4Qj6L0sTYL4VZbrGNn33X22GzV0R+3t9PStj/OHx9P3m/C1sUsIBO+OcbtEoKyMPL8pE8tb6tJiGGov5ZI+GW2X9ieSKhX14JBtT5ywmRAIFT9EUbXhaQ5Ozjo0lDUzHGwnGOLHJB6TyCc7jqgwyEmbJ7QlDoF1KQMVUcO+BfAE5YftP9SdDsAZ2nK1mUspCPno0a/YAnN7cKmJlN3N62urrYN2Sy0ZstkQgmp7p4epo1tQxrPXY0mYKTXM0bMp26aVquZf0KP+QPgCCdPCfJtaZIXk2q3Y23dyUdP0e2f3hi6TCghdXq+Va+uPHp3qPX+m2eeyKS2TH4jBrV69tmbmITZFIGu5AI4wtomQUC9etFb9NHTnqvgve+zywQTbvXrwBv1zM/gc4L37l80Y2Twfqwp6NbsDPqe9dnCOx6tPcIRnhwWBKToNAD+udauAsdlPzImP7v2ALissUCE3f2PQKN65gZzN8G1C8ADJia2/UYvfiqYBKnHdlxfwCDVzfccI8AQ1q4JA6qbzGD329evX8Cu7CMA29++aaZBTf8Wl5Dp2Ak9MzOXgW6YdqiYkl+/fgZpMgbZdc7U8wok8RKmAQzhoJhZjq4Cuv5z9KwKtJ5jCPdNFpMRpLbhCfuGqCEDMDu+VQFzxjn6tAo8mZkG0za93hbDTzgPMIT1OSIAKZMBLN/48SSzB9uaaWAINRaNEUwSCJNNFM0QFvYEjTSjOmBgOpMAYRXAEKqSxQBSmmfe0g+qmLGDITzCS3jXTzgTNKKvqcDPQ0KE/wI4wqOiAD11aL5RmUPReko8Yc9iwEjfpALlAoQZ5QBHeEIcIDXEBF+OjIkkGl+HyUN6PZvQ8a0hYKR+mgouM6BD74iEhY0ARzghdi1oy2Faa42mR188ncERNvwjQ1/NJpzxGA17jWgjULl6ev40gyQLlvDsJMASjosEZJqZaYPlZ8/qwbpn4PAQngD1PkLTKWbWbPzypy0VvFMzCxxwl6ZoZkx3qE17fqOqc8xUYU7wDOUTGVtc78PlgC0foVE0INXdva3zmMR0/dRgNnsIfzAP+ggp33Qzq0kyf9qaOW02e+vQvOxQ69W7fiO1qT2V+XD1mHm5kDszjz/iAPoIzTucsmTp6bW77U+u2WxUm8PRz2jUERjp9equ8dYdi2XNEWuxtBUWZjAr2gLHWnV1ddCoupp+2td6RNPtsWV57sP+eQUvYVoYgJ6qMplMNs96Wu1d6m9thZpLQ9M2z3W1B9d7t9v3w2/k+cQshkwB25D6kxtxfD7CZRGz3d+stVniH8PxEO5iTKpjrx3pG18/ur2XYFi8enXRUL63e3S9/W5XTtOo1HhtrvIJEp+XkFWFGQ7X+p6xtkaHN1AtP6ptNHxsr9xZa5MCb62v/DoZz0e4B73Nny8WawloHNTUWmNCQ3tlTuyB9oUejZ6av58q9BwZUO37yzeNG74cICdknpg+kbB7427XtTBQqx1d42mveNoWJozxmhS2f1oOnw6RLvXzux/KP64fqzyykzI8iskI9Bes/ZLjGp8vNybVi3YrA8cZ0y6DqNcRLZUudfDBm8uNgUwj09t+N8a8r/08KTKEYEJdCtX3SVI8iSXbcxmFS31PyRrCr/f/rP4N6Yoop+I9EVwAAAAASUVORK5CYII=';
            var ancho=37;
            var alto=30;
            @if (!$dataType->server_side)
                var table = $('#dataTable').DataTable(                    
                    {!!str_replace('--"','',str_replace('"--','',json_encode(
                        
                    array_merge([
                       
                        "buttons"=> [
                            ['extend'=>'colvis', 'text'=> 'Ocultar campos',"className"=> 'btn btn-default btn-xs topBtn'],
                            ['extend'=>'copy', 'text'=> 'Copiar', 'exportOptions'=> ['columns'=> ':visible'],"className"=> 'btn btn-default btn-xs topBtn'],
                            ['extend'=>'print', 'text'=> 'Imprimir', 'exportOptions'=> ['columns'=> ':visible'],"className"=> 'btn btn-default btn-xs topBtn'],
                            ['extend'=>'collection', 'text'=> 'Exportar',"className"=> 'btn btn-default btn-xs topBtn','buttons'=>[
                                ['text'=>'Vertical',"className"=> 'btn btn-warning btn-xs topBtn','action'=>"--function(){if(this.text()=='Vertical'){this.text('Horizontal');orientar='landscape'}else{this.text('Vertical');orientar='portrait'}}--"],
                                ['extend'=>'csv','text'=>"CSV", 'exportOptions'=> ['columns'=> ':visible'],"className"=> 'btn btn-primary btn-xs topBtn'],
                                ['extend'=>'excel','text'=>"CALC y EXCEL", 'exportOptions'=> ['columns'=> ':visible'],"className"=> 'btn btn-primary btn-xs topBtn'],
                                ['extend'=>'pdfHtml5', 'text'=> 'PDF',"className"=> 'btn btn-primary btn-xs topBtn', 'exportOptions'=> ['columns'=> ':visible'],'title'=>'--sub_titulo_pdf--','pageSize'=>'LETTER','customize'=>"--function(doc){doc.content.splice(0,0,{margin:[0,0,0,12],text:''});var fecha=new Date;doc.pageOrientation=orientar,doc.header=function(){return{columns:[{image:imagen64,width:ancho,height:alto}],margin:[10,10]}},doc.footer=function(e,t){return{columns:[{fontSize:9,text:'Reporte generado a la fecha: '+fecha.getDate()+'-'+(fecha.getMonth()+1)+'-'+fecha.getFullYear()+' hora: '+fecha.toLocaleTimeString('en-US')},{alignment:'right',text:[{text:'Pag. '+e.toString(),italics:!0},' de ',{text:t.toString(),italics:!0}]}],margin:[10,0]}};}--"],
                                
                                
                            ],
                            ],
                            ],
                             "dom"=>'Blfrtip',
                        "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [['targets' => -1, 'searchable' =>  false, 'orderable' => false]],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true))) !!}); //table.buttons().container().appendTo("#dataTable_length .col-sm-6:eq(0)");
            @else
            var table = $('#dataTable').DataTable({
                aLengthMenu: [
 
        [-1]
    ],
    
    buttons: [
					    { extend: 'print', text: 'Imprimir', exportOptions: {columns: ':visible'},"className": 'btn btn-default btn-xs'  },
					    { extend: 'colvis', text: 'Ocultar campos',"className": 'btn btn-default btn-xs'   },
					    { extend: 'copy', text: 'Copiar',"className": 'btn btn-default btn-xs'   },
					    {
								extend: 'collection',
								text: 'Exportar',"className": 'btn btn-default btn-xs'  ,
								
								buttons: [ 
									{text: 'Vertical', action:function ( ){
										
										if(this.text()=='Vertical'){
											this.text('Horizontal');
											orientar='landscape';
											
										}else{
											this.text('Vertical');
											orientar='portrait';
										}
									},"className": 'btn btn-warning btn-xs topBtn',
									},
									{ extend: 'csv', text: 'CSV', exportOptions: {columns: ':visible'},"className": 'btn btn-primary btn-xs topBtn'},
									{ extend: 'excel', text: 'CALC y EXCEL', exportOptions: {columns: ':visible'},"className": 'btn btn-primary btn-xs topBtn'   },
									{
										exportOptions: {columns: ':visible'} ,
										extend: 'pdf',
										
										text: 'PDF',
										title:sub_titulo_pdf,
										pageSize:'LETTER',"className": 'btn btn-primary btn-xs topBtn',
										
										//message:,

										customize: function ( doc ) {
											//margen entre el logo y el titulo
											doc.content.splice( 0, 0, {
												margin: [ 0, 0, 0, 12 ],
												text:''
												
											} );
											//
											var fecha=new Date();	
											doc['pageOrientation']=orientar;								
											//alert(JSON.stringify(doc));
											doc['header']=function(){
												return{
													columns:[{

														image:imagen64,
														width: ancho,height: alto,
														
													}],
													margin:[10,10]
												};
											};

											doc['footer']=function(page,pages){return{columns:[{fontSize: 9,text:'Reporte generado a la fecha: '+fecha.getDate()+'-'+(fecha.getMonth()+1)+'-'+fecha.getFullYear()+' hora: '+fecha.toLocaleTimeString('en-US')},{alignment:'right',text:[{text:'Pag. '+page.toString(),italics:true},' de ',{text:pages.toString(),italics:true}]}],margin:[10,0]};};
										}
									 }
								]
						},
						
										
					    
					],
               dom: 'B',
            });
                $('#search-input select').select2({
                    minimumResultsForSearch: Infinity
                });
            @endif

            @if ($isModelTranslatable)
                $('.side-body').multilingual();
                //Reinitialise the multilingual features when they change tab
                $('#dataTable').on('draw.dt', function(){
                    $('.side-body').data('multilingual').init();
                })
            @endif
            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if($usesSoftDeletes)
            @php
                $params = [
                    's' => $search->value,
                    'filter' => $search->filter,
                    'key' => $search->key,
                    'order_by' => $orderBy,
                    'sort_order' => $sortOrder,
                ];
            @endphp
            $(function() {
                $('#show_soft_deletes').change(function() {
                    if ($(this).prop('checked')) {
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
                    }else{
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
                    }

                    $('#redir')[0].click();
                })
            })
        @endif
        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
